<?php
    require_once("Sources/Data.php");
    function find_user_by_login_password(string $login, string $password):array|null{
        $users = find_all_users();
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
        return null;
    }

    function show_icon(string $f_name):string{
        return "<img src='Sources/Assets/Profil/$f_name' alt='icon'>";
    }
?>