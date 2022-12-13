<div class="entete">
    <?php
        echo $_SESSION["user_connect"]["nom"];
        
    ?>
    <h1>Bienvenue sur l'interface utilisateur</h1>
    <img src='Sources/Assets/Profil/<?=find_user_profil_by_id($_SESSION["user_connect"]["id"]) ?>' alt='icon'>
</div>