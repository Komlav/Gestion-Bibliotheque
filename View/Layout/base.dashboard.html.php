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
<div class="container">
        <div class="profil">
            
            <div class="info">
                <span><?=$_SESSION["user_connect"]["nom"]." ".$_SESSION["user_connect"]["prenom"];?></span>
                <h1><?=$_SESSION["user_connect"]["role"];?></h1>
            </div>
        </div>
        <div class="navigation">
            <ul>
                <?=use_case("index.php?base=connected", "Tableau de bord", "home-outline")?>
                <?php if($_SESSION["user_connect"]["role"] == "RB"):?>
                    <?=use_case("index.php?base=connected&act=ouvgs&mode=all", "Gérer les ouvrages", "book-outline")?>
                    <?=use_case("index.php?base=connected&act=auteurs", "Gérer les auteurs", "people-outline")?>
                    <?=use_case("index.php?base=connected&act=ryn", "Gérer les rayons", "layers-outline")?>
                    <?=use_case("index.php?base=connected&act=expls", "Gérer les exemplaires", "library-outline")?>
                <?php endif ?>
                <?php if($_SESSION["user_connect"]["role"] == "RP"):?>
                    <?=use_case("index.php?base=connected&act=prêts&mode=all", "Lister les prêts", "list-outline")?>
                    <?=use_case("index.php?base=connected&act=demandes", "Gérer les demandes", "bookmarks-outline")?>
                <?php endif ?>
                <?php if($_SESSION["user_connect"]["role"] == "AD"):?>
                    <?=use_case("index.php?base=connected&act=demandes", "Voir ses demandes", "hand-left")?>
                <?php endif ?>
                <?=use_case("#","Mon profil","person-circle-outline")?>
                <?=use_case("index.php","Se déconnecter","log-out-outline")?>
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