<?php 
    require_once("Model/Models.php");
?>

<div class="details">
    <div class="recentOders">
        <div class="cardHeader">
            <?php if (isset($_GET["y"])): ?>
                <h2>LISTE DES DEMANDES DE <?=find_adhérent_by_id((int)$_GET["y"])["PrénomAdhé"]; ?></h2>
            <?php else: ?>
                <h2>LISTE DES DEMANDES DE LA BIBLIOTHEQUE</h2>
            <?php endif ?>
            <a href="#" class="btn">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM PRENOM</th>
                    <th>DATE</th>
                    <th>ETAT</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($demandes as $dem): ?>
                    <?php $ad = find_adhérent_by_id($dem["id_adhérent"]); ?>
                    <tr>
                        <td><?php echo($dem["id_Dem"]); ?> </td>
                        <td><?php echo($ad["NomAdhé"]." ".$ad["PrénomAdhé"]); ?></td>
                        <td><?php echo($dem["Date"]); ?></td>
                        <td><span class="status <?=$dem['Etat'];?>"><?php echo($dem["Etat"]); ?></span></td>    
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
        <?php if($_SESSION["user_connect"]["role"] == "RP") :?>
            <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Vous pouvez...</h2>
            </div>
                <table>
                    <tr>
                        <td width = "60px">
                            <div class="imgBx">
                                <img src="Sources/Assets/duplicate-outline.svg" >
                            </div>
                        </td>
                        <td><a href="#"><h4>Valider un pret</h4></a></td>
                    </tr>
                    <tr>
                        <td width = "60px">
                            <div class="imgBx">
                            <img src="Sources/Assets/save-outline.svg" >
                            </div>
                        </td>
                        <td><a href="#"><h4>Enregistrer un prêt</h4></a></td>
                    </tr>
                    <tr>
                        <td width = "60px">
                            <div class="imgBx">
                            <img src="Sources/Assets/list-outline.svg" >
                            </div>
                        </td>
                        <td><a href="index.php?base=connected&act=demandes"><h4>Lister les prêts</h4></a></td>
                    </tr>
                </table>
            </div>
        <?php endif ?>
    </div>
</div>
</div>
