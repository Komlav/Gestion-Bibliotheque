<div class="cardBox">
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Vous pouvez...</h2>
        </div>
        <table class="ligne">
            <tr>
                <td width = "60px">
                    <div class="imgBx">
                        <img src="Sources/Assets/add-circle-outline.svg" >
                    </div>
                </td>
                <td><a href="#"><h4>Ajouter un ouvrage</h4></a></td>
            </tr>
            <tr>
                <td width = "60px">
                    <div class="imgBx">
                    <img src="Sources/Assets/list-outline.svg" >
                    </div>
                </td>
                <td><a href="index.php?base=connected&act=ouvgs&mode=all"><h4>Lister les ouvrages</h4></a></td>
            </tr>
        </table>
    </div>
</div>
<div class="details tout">
    <div class="recentOders tout">
    <div class="cardHeader">
            <?php 
                if (isset($_GET["etat"])) {
                    if ($_GET["etat"] == "Disponible") {
                        print("<h2>LISTE DES OUVRAGES DISPONIBLES</h2>");
                    }elseif ($_GET["etat"] == "Indisponible") {
                        print("<h2>LISTE DES OUVRAGES INDISPONIBLES</h2>");
                    }
                }if($_GET["mode"] == "all" || $_GET["etat"] == "all"){
                    print("<h2>LISTE DES EXEMPLAIRES</h2>");
                }
            ?>
            <div class="form">
                <form action="index.php" method="POST" class="form btn">
                    <div>
                        <h4>Filtré par : </h4>
                    </div>
                    <div class="labelle">
                        <label for="etat">ETAT</label>
                        <select name="etat" id="">
                            <option value="Disponible">Disponible</option>
                            <option value="Indisponible">Indisponible</option>
                            <option value="Pret">Prêtter</option>
                            <option value="Détériorer">Prêtter</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" value="Filtrer" name="btn-save" class="btn bot">
                    </div>
                </form>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITRE</th>
                    <th>AUTEURS</th>
                    <th>DATE-EDITION</th>
                    <th>RAYONS</th>
                    <th>ETAT</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($ouvrages as $ouvrage):  ?>
                    <tr>
                        <?php $auteur = find_auteur_by_id($ouvrage["Auteur_CodeAuteur"]); ?>
                        <?php $rayon = find_rayon_by_id($ouvrage["IdRayon"]); ?>
                        <td><?=($ouvrage["Id"]); ?> </td>
                        <td><?=($ouvrage["Titre"]); ?></td>
                        <td><?=($auteur["NomAuteur"]." ".$auteur["PrénomAuteur"]); ?></td>
                        <td><?=($ouvrage["DateEdition"]); ?></td>
                        <td><?=($rayon["NomRayon"]); ?></td>
                        <td><span class="status <?=$ouvrage["Etat"];?>"><?php echo($ouvrage["Etat"]); ?></span></td> 
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
