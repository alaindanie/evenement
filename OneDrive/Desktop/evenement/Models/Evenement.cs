<?php

class Evenement {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // READ – Liste
    public function getAll() {
        $req = $this->db->query("SELECT * FROM evenement ORDER BY date_event DESC");
        return $req->fetchAll();
    }

    // READ – Un seul
    public function getById($id) {
        $req = $this->db->prepare("SELECT * FROM evenement WHERE id = ?");
        $req->execute([$id]);
        return $req->fetch();
    }

    // CREATE
    public function create($data) {
        $req = $this->db->prepare("
            INSERT INTO evenement (titre, description, date_event, lieu, image)
            VALUES (?, ?, ?, ?, ?)
        ");
        return $req->execute([
            $data['titre'],
            $data['description'],
            $data['date_event'],
            $data['lieu'],
            $data['image']
        ]);
    }

    // UPDATE
    public function update($id, $data) {
        $req = $this->db->prepare("
            UPDATE evenement
            SET titre = ?, description = ?, date_event = ?, lieu = ?, image = ?
            WHERE id = ?
        ");
        return $req->execute([
            $data['titre'],
            $data['description'],
            $data['date_event'],
            $data['lieu'],
            $data['image'],
            $id
        ]);
    }

    // DELETE
    public function delete($id) {
        $req = $this->db->prepare("DELETE FROM evenement WHERE id = ?");
        return $req->execute([$id]);
    }
}
