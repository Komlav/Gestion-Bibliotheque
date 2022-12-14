<!DOCTYPE html>
<html lang="fr-Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Public/dashboard.css">
</head>
<body>
    <!-- <div class="entete">
    <div class="profil">
        <a href='Sources/Assets/Profil/<?=find_user_profil_by_id($_SESSION["user_connect"]["id"]) ?>'><img src='Sources/Assets/Profil/<?=find_user_profil_by_id($_SESSION["user_connect"]["id"]) ?>' alt='icon'></a>
        <?php
            echo $_SESSION["user_connect"]["nom"]."<br>";
            echo $_SESSION["user_connect"]["prenom"]."<br>";
            echo $_SESSION["user_connect"]["role"];
        ?>
    </div>
   <div class="logout">
        <a href="index.php?base=connected&act=logout">Se déconnecter</a>
        <ion-icon name="log-out-outline"></ion-icon>
   </div>
</div>
<h1>Bienvenue sur l'interface utilisateur</h1> -->

<div class="container">
        <div class="profil">
            
            <div class="info">
                <span><?=$_SESSION["user_connect"]["nom"]." ".$_SESSION["user_connect"]["prenom"]?></span>
                <span><?=$_SESSION["user_connect"]["role"]?></span>
            </div>
        </div>
        <div class="navigation">
            <ul>
                <!-- <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                        <span class="title">
                            <div>
                            <?php
                                echo $_SESSION["user_connect"]["nom"]."<br>";
                            ?>
                            </div>
                        </span>
                    </a>
                </li> -->
                <li>
                    <a href="index.php?base=connected">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?base=connected&act=customers">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings<"/span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?base=connected&act=logout">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Se déconnecter</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-sharp"></ion-icon>
                </div>
                <div class="search">
                    <label>
                        <input type="text" name="" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <a href='Sources/Assets/Profil/<?=find_user_profil_by_id($_SESSION["user_connect"]["id"]) ?>'>
                        <img src='Sources/Assets/Profil/<?=find_user_profil_by_id($_SESSION["user_connect"]["id"]) ?>' alt='profil'>
                    </a>
                </div>
            </div>

            <?=$content_view ?>
        </div>
    </div>

    <script script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> 
    <script script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //Menu toggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');
        let profil = document.querySelector('.profil');

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
            profil.classList.toggle('active');
        }
        //add
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered')); 
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activeLink));
    </script>
</body>
</html>