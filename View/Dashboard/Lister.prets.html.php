<?php 
    require_once("./Sources/Data.php"); 
    require_once("./Models/Models.php");
    // $depart = microtime(true);
?>

<div class="form">
<?php 
        if (isset($_POST["btn-save"])) {
            print("<h3>LISTE DES PRETS EN RETAIRE DE LA BIBLIOTHEQUE</h3>");
        }else {
            print("<h3>LISTE DES PRETS DE LA BIBLIOTHEQUE</h3>");
        }
    ?>
    <form action="index.php?x=5" method="POST">
    <h4>Filtré par : </h4>
        <div class="labelle">
            <label for="etat">ETAT</label>
            <select name="etat" id="">
                <option value="En retard">En retard</option>
                <option value="Encours">Encours</option>
                <option value="Retourner">Retourner</option>
            </select>
        </div>
        <input type="submit" value="Valider" name="btn-save">
    </form>
</div>
<div class="conteneur">
    
    <table>
        <tr>
            <th>ID</th>
            <th>ADHERENT</th>
            <th>EXEMPLAIRE</th>
            <th>DATE DE PRET</th>
            <th>DATE DE RETOUR </th>
            <th>DATE REEL</th>
        </tr>
        <?php foreach ($prets as $pret):  ?>
            <tr>
                <?php $ad = find_adhérent_by_id($pret["idAdhérent"]); ?>
                <?php $exemp = find_exemplair_by_id($pret["Id_Exemplaire"]); ?>
                <?php $ouv = find_ouvrage_by_id($exemp["id_Ouvrage"])["Titre"]; ?>
                <td><?=($pret["Id_Pret"]); ?> </td>
                <td><?php echo($ad["NomAdhé"]." ".$ad["PrénomAdhé"]); ?></td>
                <td><?=($ouv); ?></td>
                <td><?=($pret["Date"]); ?></td>
                <td><?=($pret["DateRetour"]); ?></td>
                <td><?=($pret["DateRéel"]); ?></td>
                
            </tr>
        <?php endforeach ?>
    </table>
</div>
<!-- <?php         
    $fin = microtime(true);
    $temps = $fin - $depart;
    $temps_de_chargement = number_format($temps, 5); 
    echo "Début du script: ".date("H:i:s", $depart)."<br>";
    echo "Fin du script: ".date("H:i:s", $fin)."<br>";
    echo "Script exécuté en " . $temps_de_chargement . " sec";

?> -->
