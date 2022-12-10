<?php
    require_once("Model/Models.php");
    if (isset($_GET["x"])) {
        if (!isset($_SESSION["user-connect"])) {
            load_view("Connexion","base.connexion");
        }
        switch ($_GET["x"]) {
            case 'connexion':
                load_view("Connexion","base.connexion");
                break;
            
            default:
                # code...
                break;
        }
    }else {
        load_view("Accueil","base.accueil");
    }

    /* Fonction technique du controller */
    function load_view(string $view,string $layout,array $data = []){
        ob_start();
        extract($data);
        require_once("View/$view.html.php");
        $content_view = ob_get_clean();
        require_once("View/Layout/$layout.html.php");
    }
?>