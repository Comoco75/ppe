<?php
include './Model/ContactModel.php';

class ContactController {
    private $contactModel;

    public function __construct() {
        $this->contactModel = new ContactModel();
    }

    public function envoyerMessage() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['envoyer'])) {
            $nom = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            if (!empty($nom) && !empty($email) && !empty($message)) {
                $this->contactModel->ajouterMessage($nom, $email, $message);
                header("Location: index.php?page=contact&success=1");
                exit();
            }
        }
    }
}