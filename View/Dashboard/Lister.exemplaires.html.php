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
                <td><a href="#"><h4>Ajouter un exemplaire</h4></a></td>
            </tr>
            <tr>
                <td width = "60px">
                    <div class="imgBx">
                    <img src="Sources/Assets/list-outline.svg" >
                    </div>
                </td>
                <td><a href="index.php?base=connected&act=ouvgs&mode=all"><h4>Lister les exemplaires</h4></a></td>
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
                    }elseif ($_GET["etat"] == "Pret") {
                        print("<h2>LISTE DES OUVRAGES EN PRET</h2>");
                    }elseif ($_GET["etat"] == "Détériorer") {
                        print("<h2>LISTE DES OUVRAGES DETERIORER</h2>");
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
                            <option value="Détériorer">Détériorer</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" value="Valider" name="btn-save" class="btn bot">
                    </div>
                </form>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>OUVRAGE-EXEMPLAIRE</th>
                    <th>DATE-ENRE</th>
                    <th>NOMBRE</th>
                    <th>ETAT</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($exemplaires as $exemplaire):  ?>
                    <tr>
                        <?php $ovg = find_ouvrage_by_id($exemplaire["id_Ouvrage"])["Titre"]; ?>
                        <td><?=($exemplaire["idExemplaire"]); ?> </td>
                        <td><?=$ovg?></td>
                        <td><?=($exemplaire["DateEnre"]); ?></td>
                        <td><?=($exemplaire["Nombre"]); ?></td>
                        <td><span class="status <?=$exemplaire['Etat'];?>"><?php echo($exemplaire["Etat"]); ?></span></td> 
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
