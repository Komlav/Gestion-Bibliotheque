<?php
    function find_all_users():array{
        return [
            ["id" => 1, "login" => "user", "password" => "passer", "nom" => "TAMAKLOE", "prenom" => "Komlavi Nutekpor", "role" => "AC"],
            ["id" => 2, "login" => "wane", "password" => "passer", "nom" => "WANE", "prenom" => "Baila", "role" => "Etudiant"]
        ];
    }

    function find_all_user_profil():array{
        return [
            ["id" => 1, "image" => "icon.jpeg", "id_user" => 1],
            ["id" => 2, "image" => "young-girl-3973379_1920.jpg", "id_user" => 2]
        ];
    }
?>