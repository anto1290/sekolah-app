<?php

require_once BASE_PATH . '/config/database.php';

class ArtikelModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllArticles() {
        $stmt = $this->db->prepare("SELECT * FROM articles");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id) {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createArticle($data) {
        $stmt = $this->db->prepare("INSERT INTO articles (title, content, tumbnail, user_id) VALUES (:title, :content, :tumbnail, :user_id)");
        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_INT);
        $stmt->bindParam(':tumbnail', $data['tumbnail']);
        if (empty($data['tumbnail'])) {
            $data['tumbnail'] = 'default.jpg'; // Set a default thumbnail if none provided
        }
        $data['tumbnail'] = htmlspecialchars($data['tumbnail'], ENT_QUOTES, 'UTF-8'); // Sanitize thumbnail input
        $data['title'] = htmlspecialchars($data['title'], ENT_QUOTES, 'UTF-8'); // Sanitize title input
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':content', $data['content']);
        return $stmt->execute();
    }

    public function updateArticle($id, $data) {
        $stmt = $this->db->prepare("UPDATE articles SET title = :title, content = :content WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':content', $data['content']);
        return $stmt->execute();
    }

    public function deleteArticle($id) {
        $stmt = $this->db->prepare("DELETE FROM articles WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
