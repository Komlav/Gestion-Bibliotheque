<?php 
    require_once("Sources/Data.php"); 
?>
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
                    <th>NOM AUTEUR</th>
                    <th>PRENOM AUTEUR</th>
                    <th>PROFESSION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (find_all_auteurs() as $auteur):  ?>
                    <tr>
                        <td><?php echo($auteur["IdAuteur"]); ?> </td>
                        <td><?php echo($auteur["NomAuteur"]); ?></td>
                        <td><?php echo($auteur["PrénomAuteur"]); ?></td>
                        <td><?php echo($auteur["Profession"]); ?></td>     
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
