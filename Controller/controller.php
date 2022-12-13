<?php
    require_once("Model/Models.php");
    if (isset($_GET["base"])) {
        switch ($_GET["base"]) {
            case 'connexion':
                load_view("Connexion","base.connexion");
                break;
            case 'connected':
                if (isset($_GET["act"])) {
                    if (!isset($_SESSION["user_connect"])) {
                        header("location:index.php?base=connexion");
                    }
                    switch ($_GET["act"]) {
                        case 'logout':
                            session_destroy();
                            unset($_SESSION["user_connect"]);
                            header("location:index.php");
                            break;
                        default:
                            # code...
                            break;
                    }
                }else {
                    load_view("interface","base");
                }
            default:
                # code...
                break;
        }
    }else {
        load_view("Accueil","base.accueil");
    }

    /* Vérification des informations saisies par l'utilisateur */
    if (isset($_POST["btn-save"])){
        extract($_POST);
        switch ($_POST["btn-save"]) {
            case 'connexion':
                se_connecter($login,$psw);
                break;
            default:
                # code...
                break;
        }
    }


    function se_connecter(string $login, string $password):void{
        $user = find_user_by_login_password($login, $password);
        if ($user == null) {
            header("location:index.php?base=connexion");
        }else {
            $_SESSION["user_connect"] = $user;
            header("location:index.php?base=connected");
        }
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