<?php
    require_once("./Sources/Data.php");
?>
<div class="conteneur">
    <h3>LISTE DES RAYONS DE LA BIBLIOTHEQUE</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>NOM RAYON</th>
        </tr>
        <?php foreach (find_all_rayons() as $val):  ?>
            <tr>
                <td><?=($val["IdRayon"]); ?> </td>
                <td><?=($val["NomRayon"]); ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>