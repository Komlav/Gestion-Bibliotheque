<?php
    require_once("Model/Models.php");
    if (isset($_GET["base"])) {
        switch ($_GET["base"]) {
            case 'connexion':
                load_view("Connexion","base.connexion");
                break;
            case 'connected':
                if (!isset($_SESSION["user_connect"])) {
                    header("location:index.php?base=connexion");
                }
                if (isset($_GET["act"])) {
                    switch ($_GET["act"]) {
                        case 'ryn':
                            load_view("Dashboard/Lister.rayons","base.dashboard");   
                            break;   
                        case 'prêts':
                            $data["prets"] = lister_prets($_GET);
                            load_view("Dashboard/Lister.prets","base.dashboard",$data);   
                            break;   
                        case 'expls':
                            $data["exemplaires"] = lister_exemplaires($_GET);
                            load_view("Dashboard/Lister.exemplaires","base.dashboard",$data);   
                            break;   
                        case 'ouvgs':
                            $data["ouvrages"] = lister_ouvrages($_GET);
                            load_view("Dashboard/Lister.ouvrages","base.dashboard",$data);   
                            break;   
                        case 'demandes':
                            $data["demandes"] = find_all_demandes();
                            load_view("Dashboard/Lister.demandes","base.dashboard",$data);   
                            break;   
                        case 'auteurs':
                            load_view("Dashboard/Lister.auteurs","base.dashboard");
                            break;           
                        case 'logout':
                            session_destroy();
                            unset($_SESSION["user_connect"]);
                            header("location:index.php?base=connexion");
                            break;
                    }
                }else {
                    load_view("Dashboard/Home","base.dashboard");
                }
        }
    }else {
        load_view("Accueil","base.accueil");
    }

    /* Vérification des informations saisies par l'utilisateur */
    if (isset($_POST["btn-save"])){
        extract($_POST);
        switch ($_POST["btn-save"]) {
            case 'Trier': /* Filtrer les prets */
                header("location:index.php?base=connected&act=prêts&mode=flt&etat=$etat");
                break;
            case 'Filtrer': /* Filtrer ouvrages */
                header("location:index.php?base=connected&act=ouvgs&mode=flt&etat=$etat");
                break;
            case 'Valider': /* Filtrer ouvrages */
                header("location:index.php?base=connected&act=expls&mode=flt&etat=$etat");
                break;
            case 'connexion':/* Page de connexion */
                se_connecter($login,$psw);
                break;
            default:
                # code...
                break;
        }
    }

    function lister_exemplaires(array $request):array{
        if ($request["mode"] == "flt") {
            switch ($request["etat"]) {
                case 'Disponible':
                    return find_all_exemplaires_by_etat("Disponible");
                    break;
                case 'Indisponible':
                    return find_all_exemplaires_by_etat("Indisponible");
                    break;
                case 'Pret':
                    return find_all_exemplaires_by_etat("En prêt");
                    break;
                case 'Détériorer':
                    return find_all_exemplaires_by_etat("Détérioré");
                    break;
            }
        }else {
                return find_all_exemplaires();
        }
    }


    function lister_ouvrages(array $request):array{
        switch ($request["mode"]) {
            case 'flt':
                return find_ouvrage_by_etat($request["etat"]);
                break;
            case 'all':
                return find_ouvrage_by_etat($request["etat"]);
                break;
        }
    }

    function lister_prets(array $request):array{
        switch ($request["mode"]) {
            case 'flt':
                switch ($request["etat"]) {
                    case 'rtd':
                        return find_prets_retardataire();
                        break;
                    case 'ecr':
                        return find_prets_retardataire(false);
                        break;
                    case 'rtn':
                        #code...
                        break;
                }
                break;
            case 'all':
                return find_all_prets();
                break;
        }
    }

    function se_connecter(string $login, string $password):void{
        $user = find_user_by_login_password($login, $password);
        if ($user == null) {
            header("location:index.php?base=connexion");
        }else{
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