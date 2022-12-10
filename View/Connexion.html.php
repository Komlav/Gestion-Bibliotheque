<div class="box">
    <?php
        if (isset($erreur)) {
            print("<h3>Login/mot de passe invalide !</h3>");
        }
    ?>
    <div class="form">
        <form action="index.php" method="post">
            <h2>Se connecter</h2>
            <div class="inputbox">
                <input type="text" required="required" name="login">
                <span>Nom d'utilisateur</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="psw">
                <span>Mot de passe</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Mot de passe oublié</a>
                <a href="#">Créer un compte</a>
            </div>
            <input type="submit" name = "btn-save" value="connexion">
            <div class="links acceuil">
                <a href="index.php" id="retour"><-- Retourner à la page d'acceuil</a>
            </div>
        </form>
    </div>
</div>