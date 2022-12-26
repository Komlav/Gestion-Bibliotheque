<div class="cardBox">
    <?php if (isset($_SESSION["user_connect"])):?>
        <?php if ($_SESSION["user_connect"]["role"] == "RB"):?>
            <?= carte(count(find_all_auteurs()),"Auteurs","people");?>
            <?= carte(count(find_all_rayons()),"Rayons","layers");?>
            <?= carte(count(find_all_ouvrages()),"Ouvrages","book");?>
            <?= carte(count(find_all_exemplaires()),"Exemplaires","library");?>
        <?php endif ?>
        <?php if ($_SESSION["user_connect"]["role"] == "RP"):?>
            <?= carte(count(find_prets_retardataire(false)),"Prêts en cours","barcode");?>
            <?= carte(count(find_dem_by_etat("Encours")),"Demandes en cours","accessibility");?>
            <?= carte(count(find_prets_retardataire()),"Prêts en retards","alert");?>
            <?= carte(count(find_all_exemplaires()),"Exemplaires","library");?>
        <?php endif ?>
    <?php endif ?>
</div>


<div class="details">
    <div class="recentOders">
        <div class="cardHeader">
            <h2 class="howdy">Salut <?=$_SESSION["user_connect"]["prenom"]?> !</h2>
            <a href="#" class="btn">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Notifications...</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivred">Delivered</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivred">Delivered</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivred">Delivered</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivred">Delivered</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivred">Delivered</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivred">Delivered</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">return</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivred">Delivered</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">return</span></td>
                </tr>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivred">Delivered</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php 
    function carte(int $data, string $libelle,string $icon):void{
        print("<div class='card'>");
            print("<div>");
                print("<div class='numbers'>$data</div>");
                print("<div class='cardName'>$libelle</div>");
           print("</div>");
            print("<div class='iconBx'>");
                print("<ion-icon name='$icon-outline'></ion-icon>");
            print("</div>");
        print("</div>");
    }
?>