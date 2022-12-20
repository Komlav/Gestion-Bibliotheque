<div class="container">
        <form action="index.php" method="POST" id="form" class="form">
            <h2>Créer un compte</h2>
            <div class="entete">
                <div class="form-control">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom">
                    <small>Error message</small>
                </div>
            </div>
            <div class="form-control">
                <label for="login">Login</label>
                <input type="text" id="login" name="login">
                <small>Error message</small>
            </div>
            <div class="entete">
                <div class="form-control">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="password-conf">Confirmé le Mot de passe</label>
                    <input type="password" id="password-conf" >
                    <small>Error message</small>
                </div>
            </div>
            <div class="form-control">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email">
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="addresse">Addresse</label>
                <textarea id="addresse" cols="30" rows="3"name="addresse"></textarea>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input type="submit" id="submit" name="btn-save" value="Créer">
            </div>
        </form>
    </div>