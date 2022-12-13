<!-- <!-- 
<?php
    // if (isset($_POST["Create"])) {
    //     $PDO = new PDO("mysql:host=localhost;dbname=gestion bibliotheque","root","");
    //     $PDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $SQL = "INSERT INTO `users`(`nom`, `prenom`, `login`, `password`, `role`) 
    //             VALUES (:nam,:prn,:log,:psw,:rol)";

    //     $stmt = $PDO ->prepare($SQL);
    //     $ad = "Adhérent";
    //     $stmt->bindParam(':nam', $_POST['nom']);
    //     $stmt->bindParam(':prn', $_POST['prenom'] );
    //     $stmt->bindParam(':log', $_POST['login']);
    //     $stmt->bindParam(':psw', $_POST['password']);
    //     $stmt->bindParam(':rol', $ad);
   
    //     $stmt->execute();
    //     if($stmt ->rowCount() > 0){
    //         echo "<p>books inserted into the database.</p>";
    //     } else {
    //         echo "<p>An error has occurred.<br> The item was not added.</p>";
    //     }
    // }

?> -->
<?php
        $PDO = new PDO("mysql:host=localhost;dbname=gestion bibliotheque","root","");
        $SQL = $PDO -> query("SELECT * FROM `users`");
        // $stmt = $PDO ->prepare($SQL);
        // $stmt->execute();
?>


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Login</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
        <?php while ($rep = $SQL ->fetch()):?>
            <tr>
                <td><?=$rep["nom"]?></td>
                <td><?=$rep["prenom"]?></td>
                <td><?=$rep["login"]?></td>
                <td><?=$rep["password"]?></td>
                <td><?=$rep["role"]?></td>
            </tr>
            <?php $data[] = $rep ?>
        <?php endwhile?> -->
            

    </table>

    <?php

$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');

$req->execute(array(

       'nom' => $nom,

       'possesseur' => $possesseur,

       'console' => $console,

       'prix' => $prix,

       'nbre_joueurs_max' => $nbre_joueurs_max,

       'commentaires' => $commentaires

       ));

        

echo 'Le jeu a bien été ajouté !';

?>
</body>
</html> -->