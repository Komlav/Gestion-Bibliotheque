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
?>