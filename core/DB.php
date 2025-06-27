<?php

require_once  __DIR__ .  '/../config/database.php';

class DB {
  private $pdo;
  private $table;
  private $where = '';
  private $bindings = [];
  private $orderBy = '';
  private $limit = '';
  private $offset = '';
  private $select = '*';

  public function __construct() {
    $this->pdo = Database::connect();
}

public function table($table) {
  $this->table = $table;
  return $this;
}

public function where($column, $operator, $value) {
  $this->where = "WHERE $column $operator ?";
  $this->bindings[] = $value;
  return $this;
}

public function get() {
  $sql = "SELECT * FROM $this->table $this->where";
  $stmt = $this->pdo->prepare($sql);
  $stmt->execute($this->bindings);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function insert($data) {
  $columns = implode(',', array_keys($data));
  $placeholders = rtrim(str_repeat('?,', count($data)), ',');
  $sql = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";
  $stmt = $this->pdo->prepare($sql);
  return $stmt->execute(array_values($data));
}

public function update($data) {
  $set = '';
  foreach ($data as $key => $value) {
      $set .= "$key = ?, ";
      $this->bindings[] = $value;
  }
  $set = rtrim($set, ', ');
  $sql = "UPDATE $this->table SET $set $this->where";
  $stmt = $this->pdo->prepare($sql);
  return $stmt->execute($this->bindings);
}

public function delete() {
  $sql = "DELETE FROM $this->table $this->where";
  $stmt = $this->pdo->prepare($sql);
  return $stmt->execute($this->bindings);
}
public function orderBy($column, $direction = 'ASC') {
  $this->orderBy = "ORDER BY $column $direction";
  return $this;

}
public function limit($limit) {
  $this->limit = "LIMIT $limit";
  return $this;
}

public function offset($offset) {
  $this->offset = "OFFSET $offset";
  return $this;
}
public function select($columns) {
  $this->select = is_array($columns) ? implode(',', $columns) : $columns;
  return $this;
}
public function raw($sql, $params = []) {
  $stmt = $this->pdo->prepare($sql);
  $stmt->execute($params);
  // Jika SELECT
  if (stripos(trim($sql), 'SELECT') === 0) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  // Untuk INSERT, UPDATE, DELETE kembalikan true/false
  return $stmt->rowCount();
}

}
