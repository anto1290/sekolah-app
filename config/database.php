<?php 


class Database {
    private $driver = 'mysql'; // pgsql,mysql
    private $host = 'localhost';
    private $db_name = 'sekolah';
    private $username = 'root';
    private $password = '';
    private $port = '3306'; // Default MySQL port
    public $conn;
    public $dsn;
   public static function connect() {
        $instance = new self();
        try {
            $instance->dsn = "{$instance->driver}:host={$instance->host};dbname={$instance->db_name};port={$instance->port}";
            $instance->conn = new PDO($instance->dsn, $instance->username, $instance->password);
            $instance->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $instance->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }

  }
