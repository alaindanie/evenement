<?php

require_once "Models/Evenement.php";

class EventController {

    public function index() {
        $eventModel = new Evenement();
        $events = $eventModel->getAll();
        require "Views/frontoffice/list.php";
    }

    public function create() {

        // Si on a envoyé le formulaire
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $eventModel = new Evenement();

            $eventModel->create(
                $_POST['titre'],
                $_POST['description'],
                $_POST['date_event']
            );

            // Redirection après ajout
            header("Location: index.php");
            exit;
        }

        // Sinon on affiche le formulaire
        require "Views/frontoffice/create.php";
    }
}
