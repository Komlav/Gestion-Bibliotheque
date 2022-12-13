<div class="entete">
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
<h1>Bienvenue sur l'interface utilisateur</h1>