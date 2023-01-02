<?php
    require_once("Sources/Data.php");
    function PDO(){
        return new PDO("mysql:host=localhost;dbname=gestion bibliotheque","root","");
    }
    
    function find_user_by_login_password(string $login, string $password):array|null{
        $users = find_all_user();
        // $users = PDO() -> query("SELECT * FROM `users`");
        foreach ($users as $user) {
            if($user["login"] == $login && $user["password"] == $password){
                return $user;
            }
        }
        return null;
    }

    function find_user_profil_by_id(int $id):string|null{
        foreach (find_all_user_profil() as $profil) {
            if ($profil["id_user"] == $id) {
                return $profil["image"];
            }
        }
        return find_all_user_profil()[2]['image'];
    }

    function show_icon(string $f_name):string{
        return "<img src='Sources/Assets/Profil/$f_name' alt='icon'>";
    }

    function use_case(string $lien, string $fonction, string $icon){
        echo "<li>";
        echo "<a href='$lien'>";
        echo "<span class='icon'><ion-icon name='$icon'></ion-icon></span>";
        echo "<span class='title'>$fonction</span>";
        echo "</a>";
        echo "</li>";
    }

    /*------------------------------------------------------------------------------------------------------------ */
    function find_rayon_by_id(int $id):array|null{
        foreach (find_all_rayons() as $rayon) {
            if ($rayon["IdRayon"] == $id){
                return $rayon;
            }
        }
        return null;
    }

    function find_auteur_by_id(int $id):array|null{
        foreach (find_all_auteurs() as $auteur) {
            if($auteur["IdAuteur"] == $id){
                return $auteur;
            }
        }
        return null;
    }

    function find_adhérent_by_id(int $id):array|null{
        foreach (find_all_adhérents() as $adhérent) {
            if ($adhérent["Id_Adérent"] == $id) {
                return $adhérent;
            }
        }
        return null;
    }

    function find_auteur_ouvrages_by_id(int $id):array{
        $auteur_ouvrages = [];
        foreach (find_all_ouvrages() as $ouvrage) {
            if ($ouvrage["Auteur_CodeAuteur"] == $id) {
                $auteur_ouvrages = $ouvrage;
            }
        }
        return $auteur_ouvrages;
    }

    function find_all_adhérent_dem(int $id):array{
        $demandes = [];
        foreach (find_all_demandes() as $dem) {
            if ($dem["id_adhérent"] == $id) {
                $demandes[] = $dem;
            }
        }
        return $demandes;
    }
    function find_exemplair_by_id(int $id):array|null{
        foreach (find_all_exemplaires() as $exem) {
            if ($exem["idExemplaire"] == $id) {
                return $exem;
            }
        }
        return null;
    }

    function find_all_exemplaires_by_etat(string $etat):array|null{
        $tri = [];
        foreach (find_all_exemplaires() as $value) {
            if ($value["Etat"] == $etat) {
                $tri[] = $value;
            }
        }
        return $tri;
    }

    function find_ouvrage_by_id(int $id):array{
        foreach (find_all_ouvrages() as $ouv) {
            if ($ouv["Id"] == $id) {
                return $ouv;
            }
        }
    }

    function find_prets_retardataire(array $data,bool $signe=true,bool $encours=False):array{
        $retardaires = [];
        $cours =[];
        foreach ($data as $pret) {
            $dateRetour = strtotime($pret["Date"]."+2 week +1 day");
            if (strlen($pret["DateRéel"]) == 0) {
                $cours[] = $pret;
            }else {
                $DateReel = strtotime($pret["DateRéel"]);
                if ($signe==true) {
                    if ($dateRetour > $DateReel ) {
                        $retardaires[] = $pret;
                    }
                }else {
                    if ($dateRetour < $DateReel ) {
                        $retardaires[] = $pret;
                    }
                }
            }
            
            
        }
        
        return $encours ? $cours : $retardaires   ;
    }

    function find_all_prets_by_adherent(int $id):array{
        $T_Pres = [];
        foreach (find_all_prets() as $pret) {
            if ($pret["idAdhérent"] == $id) {
                $T_Pres[] = $pret;
            }
        }
        return $T_Pres;
    }
    function find_user_by_login_pwd(string $login, string $password):array|null{
        $users = find_all_user();
        foreach ($users as $user) {
            if($user["login"] == $login && $user["password"] == $password){
                return $user;
            }
        }
        return null;
    }

    function find_ouvrage_by_etat(string $etat):array|null{
        $tri = [];
        foreach (find_all_ouvrages() as $value) {
            if ($value["Etat"] == $etat) {
                $tri[] = $value;
            }
        }
        return $tri;
    }

    function find_dem_by_etat(string $etat):array{
        $res = [];
        foreach (find_all_demandes() as $value) {
            if ($value["Etat"] == $etat) {
                $res[] = $value;
            }
        }
        return $res;
    }
    
?>