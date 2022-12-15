<?php
    require_once("Sources/Data.php");
?>
<div class="details">
    <div class="recentOders">
        <div class="cardHeader">
            <h2>LISTE DES RAYONS</h2>
            <a href="#" class="btn">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM RAYON</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (find_all_rayons() as $val):  ?>
                    <tr>
                        <td><?=($val["IdRayon"]); ?> </td>
                        <td><?=($val["NomRayon"]); ?></td>
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
                        <img src="Sources/Assets/add-circle-outline.svg" >
                    </div>
                </td>
                <td><a href="#"><h4>Ajouter un rayon</h4></a></td>
            </tr>
            <tr>
                <td width = "60px">
                    <div class="imgBx">
                    <img src="Sources/Assets/list-outline.svg" >
                    </div>
                </td>
                <td><a href="index.php?base=connected&act=auteurs"><h4>Lister les rayons</h4></a></td>
            </tr>
        </table>
    </div>
</div>