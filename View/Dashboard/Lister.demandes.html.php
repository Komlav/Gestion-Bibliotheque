<?php 
    require_once("./Models/Models.php");die;
?>

<div class="conteneur">
    <?php if (isset($_GET["y"])): ?>
        <h3>LISTE DES DEMANDES DE <?=find_adhérent_by_id((int)$_GET["y"])["PrénomAdhé"]; ?></h3>
    <?php else: ?>
        <h3>LISTE DES DEMANDES DE LA BIBLIOTHEQUE</h3>
    <?php endif ?>
    <table>
        <tr>
            <th>ID</th>
            <?php if (isset($_GET["y"]) == false) : ?>
                <th>NOM PRENOM</th>
            <?php endif ?>
            <th>DATE</th>
            <th>ETAT</th>
            <?php if (isset($_GET["y"]) == false) : ?>
                <th>DEMANDES</th>
            <?php endif ?>
        </tr>
        <?php foreach ($demandes as $dem): ?>
            <?php $ad = find_adhérent_by_id($dem["id_adhérent"]); ?>
            <tr>
                <td><a href="">o</a><?php echo($dem["id_Dem"]); ?> </td>
                <?php if (isset($_GET["y"]) == false) : ?>
                    <td><?php echo($ad["NomAdhé"]." ".$ad["PrénomAdhé"]); ?></td>
                <?php endif ?>
                <td><?php echo($dem["Date"]); ?></td>
                <td><?php echo($dem["Etat"]); ?></td>   
                <?php if (isset($_GET["y"]) == false) : ?>  
                    <td><a href="index.php?x=4&y=<?=$ad["Id_Adérent"]; ?>" class="lien">Voir ses demandes</a></td> 
                <?php endif ?>    
            </tr>
        <?php endforeach ?>
    </table>
</div>
