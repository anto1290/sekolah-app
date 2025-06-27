<?php

require_once BASE_PATH . '/config/database.php';

class ProfileSekolahModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getProfile() {
        $stmt = $this->db->prepare("SELECT * FROM profile_sekolah WHERE id = 1");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function updateProfile($data) {
        $stmt = $this->db->prepare("UPDATE profile_sekolah SET nama_sekolah = :nama_sekolah, alamat = :alamat, telepon = :telepon, email = :email WHERE id = 1");
        $stmt->bindParam(':nama_sekolah', $data['nama_sekolah']);
        $stmt->bindParam(':alamat', $data['alamat']);
        $stmt->bindParam(':telepon', $data['telepon']);
        $stmt->bindParam(':email', $data['email']);
        return $stmt->execute();
    }
}
