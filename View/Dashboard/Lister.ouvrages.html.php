<?php 
    require_once("./Sources/Data.php"); 
    require_once("./Models/Models.php");
?>
<div class="conteneur">
    <h3>LISTE DES OUVRAGES DE LA BIBLIOTHEQUE</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>TITRE</th>
            <th>DATE-EDITION</th>
            <th>AUTEURS</th>
            <th>RAYONS</th>
            <th>ETAT</th>
        </tr>
        <?php foreach (find_all_ouvrages() as $ouvrage):  ?>
            <tr>
                <?php $auteur = find_auteur_by_id($ouvrage["Auteur_CodeAuteur"]); ?>
                <?php $rayon = find_rayon_by_id($ouvrage["IdRayon"]); ?>
                <td><?=($ouvrage["Id"]); ?> </td>
                <td><?=($ouvrage["Titre"]); ?></td>
                <td><?=($ouvrage["DateEdition"]); ?></td>
                <td><?=($auteur["NomAuteur"]." ".$auteur["PrénomAuteur"]); ?></td>
                <td><?=($rayon["NomRayon"]); ?></td>
                <td><?=($ouvrage["Etat"]); ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
