<!-- 
<?php
    if (isset($_POST["Create"])) {
        $PDO = new PDO("mysql:host=localhost;dbname=gestion bibliotheque","root","");
        $PDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $SQL = "INSERT INTO `users`(`nom`, `prenom`, `login`, `password`, `role`) 
                VALUES (:nam,:prn,:log,:psw,:rol)";

        $stmt = $PDO ->prepare($SQL);
        $ad = "Adhérent";
        $stmt->bindParam(':nam', $_POST['nom']);
        $stmt->bindParam(':prn', $_POST['prenom'] );
        $stmt->bindParam(':log', $_POST['login']);
        $stmt->bindParam(':psw', $_POST['password']);
        $stmt->bindParam(':rol', $ad);
   
        $stmt->execute();
        if($stmt ->rowCount() > 0){
            echo "<p>books inserted into the database.</p>";
        } else {
            echo "<p>An error has occurred.<br> The item was not added.</p>";
        }
    }

?> -->
<!-- <?php
        $PDO = new PDO("mysql:host=localhost;dbname=gestion bibliotheque","root","");
        $SQL = $PDO -> query("SELECT * FROM `users`");
        $stmt = $PDO ->prepare($SQL);
        $stmt->execute();
?> -->

<?php

    $PDO = new PDO("mysql:host=localhost;dbname=gestion bibliotheque","root","");
    $PDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = $PDO -> prepare("INSERT INTO `utilisateurs`(`Nom`, `Prénom`, `login`, `password`, `email`, `addresse`) 
    VALUES (:nom,:prenom,:log,:psw,:email,:addresse)");
    $req->execute(array(
        'nom' => $_POST["nom"],
        'prenom' => $_POST["prenom"],
        'log' => $_POST["login"],
        'psw' => $_POST["password"],
        'email' => $_POST["email"],
        'addresse' => $_POST["addresse"]
        ));
    if($req ->rowCount() > 0){
        echo "<p>Utilisateur insérer avec succes</p>";
    } else {
        echo "<p>An error has occurred.<br> The item was not added.</p>";
    }
?>