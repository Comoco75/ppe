<?php
require_once './Bdd/bdd.php';

class ContactModel {
    private $db;

    public function __construct() {
        global $bdd;
        $this->db = $bdd;
    }

    public function ajouterMessage($nom, $email, $message) {
        $sql = "INSERT INTO contacts (nom, email, message) VALUES (:nom, :email, :message)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':nom' => $nom,
            ':email' => $email,
            ':message' => $message
        ]);
    }
}