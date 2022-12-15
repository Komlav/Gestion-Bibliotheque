<?php 
    require_once("Sources/Data.php"); 
    require_once("Model/Models.php");
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
<div class="details">
    <div class="recentOders">
        <div class="cardHeader">
            <h2>LISTE DES AUTEURS DE LA BIBLIOTHEQUE</h2>
            <a href="#" class="btn">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ADHERENT</th>
                    <th>EXEMPLAIRE</th>
                    <th>DATE DE PRET</th>
                    <th>DATE DE RETOUR </th>
                    <th>DATE REEL</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
        </div>
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Vous pouvez...</h2>
            </div>
            <table>
                <tr>
                    <td width = "60px">
                        <div class="imgBx">
                            <img src="Sources/Assets/person-add-outline.svg" >
                        </div>
                    </td>
                    <td><a href="#"><h4>Ajouter un auteur</h4></a></td>
                </tr>
                <tr>
                    <td width = "60px">
                        <div class="imgBx">
                        <img src="Sources/Assets/list-outline.svg" >
                        </div>
                    </td>
                    <td><a href="index.php?base=connected&act=auteurs"><h4>Lister les auteurs</h4></a></td>
                </tr>
            </table>
    </div>
</div>