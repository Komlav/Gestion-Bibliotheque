<?php 
    require_once("Sources/Data.php"); 
    require_once("Model/Models.php");
?>
<div class="details">
    <div class="recentOders">
        <div class="cardHeader">
            <h2>LISTE DES OUVRAGES DE LA BIBLIOTHEQUE</h2>
            <a href="#" class="btn">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITRE</th>
                    <th>DATE-EDITION</th>
                    <th>AUTEURS</th>
                    <th>RAYONS</th>
                    <th>ETAT</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach (find_all_ouvrages() as $ouvrage):  ?>
                    <tr>
                        <?php $auteur = find_auteur_by_id($ouvrage["Auteur_CodeAuteur"]); ?>
                        <?php $rayon = find_rayon_by_id($ouvrage["IdRayon"]); ?>
                        <td><?=($ouvrage["Id"]); ?> </td>
                        <td><?=($ouvrage["Titre"]); ?></td>
                        <td><?=($ouvrage["DateEdition"]); ?></td>
                        <td><?=($auteur["NomAuteur"]." ".$auteur["PrénomAuteur"]); ?></td>
                        <td><?=($rayon["NomRayon"]); ?></td>
                        <td><span class="status <?=$ouvrage["Etat"];?>"><?php echo($ouvrage["Etat"]); ?></span></td> 
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
                <td><a href="#"><h4>Ajouter un ouvrage</h4></a></td>
            </tr>
            <tr>
                <td width = "60px">
                    <div class="imgBx">
                    <img src="Sources/Assets/list-outline.svg" >
                    </div>
                </td>
                <td><a href="index.php?base=connected&act=ouvgs"><h4>Lister les ouvrages</h4></a></td>
            </tr>
        </table>
    </div>
</div>
