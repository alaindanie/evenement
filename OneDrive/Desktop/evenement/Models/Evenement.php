<?php

class Evenement {

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=evenement_db;charset=utf8", "root", "");
    }

    public function getAll() {
        $sql = "SELECT * FROM evenement ORDER BY date_event DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($titre, $description, $date_event) {
    $sql = "INSERT INTO evenement (titre, description, date_event) VALUES (:titre, :description, :date_event)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':titre' => $titre,
        ':description' => $description,
        ':date_event' => $date_event
    ]);
}

}

