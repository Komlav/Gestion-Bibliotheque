<?php 
    require_once("Sources/Data.php"); 
    require_once("Model/Models.php");
?>
<div class="details tout">
    <div class="recentOders tout">
        <div class="cardHeader">
            <?php 
                if (isset($_GET["etat"])) {
                    if ($_GET["etat"] == "rtd") {
                        print("<h2>LISTE DES PRETS EN RETAIRE</h2>");
                    }elseif ($_GET["etat"] == "ecr") {
                        print("<h2>LISTE DES PRETS ENCOURS</h2>");
                    }elseif ($_GET["etat"]== "rtn") {
                        print("<h2>LISTE DES PRETS RETOURNER</h2>");
                    }
                }if($_GET["mode"] == "all" || $_GET["etat"] == "all"){
                    print("<h2>LISTE DES PRETS</h2>");
                }
            ?>
            <div class="form pret">
                <form action="index.php" method="POST" class="form btn">
                    <div>
                        <h4>Filtré par : </h4>
                    </div>
                    <div class="labelle Nom">
                        <?php if($_SESSION["user_connect"]["role"] == "RP"):?>
                            <div class="flt">
                                <label for="adhérent">Nom & prénom</label>
                                <select name="adhérent" id="">
                                    <option value="all">Tous</option>
                                    <?php foreach(find_all_adhérents() as $adh):?>
                                        <option value="<?=$adh['Id_Adérent']?>"><?=$adh["NomAdhé"]." ".$adh["PrénomAdhé"]?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        <?php endif?>
                         <div class="flt">
                            <label for="etat">ETAT</label>
                            <select name="etat" id="">
                                <option value="all">Tous</option>
                                <option value="rtd">En retard</option>
                                <option value="ecr">encours</option>
                                <option value="rtn">retourner</option>
                            </select>
                         </div>
                       
                    </div>
                    <div>
                        <input type="submit" value="Trier" name="btn-save" class="btn bot">
                    </div>
                </form>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ADHERENT</th>
                    <th>EXEMPLAIRE</th>
                    <th>DATE DE PRET</th>
                    <th>DATE DE RETOUR </th>
                    <th>DATE REEL</th>
                    <th>ETAT</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prets as $pret):  ?>
                    <tr>
                        <?php $ad = find_adhérent_by_id($pret["idAdhérent"]); ?>
                        <?php $exemp = find_exemplair_by_id($pret["Id_Exemplaire"]); ?>
                        <?php $ouv = find_ouvrage_by_id($exemp["id_Ouvrage"])["Titre"]; ?>
                        <td><?=($pret["Id_Pret"]); ?> </td>
                        <td><?php echo($ad["NomAdhé"]." ".$ad["PrénomAdhé"]); ?></td>
                        <td><?=($ouv); ?></td>
                        <td><?=($pret["Date"]); ?></td>
                        <td><?=($pret["DateRetour"]); ?></td>
                        <td><?=$pret["DateRéel"]; ?></td> 
                        <td><span class="status <?=$pret["Etat"];?>"><?php echo($pret["Etat"]); ?></span></td>            
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
        <!-- <div class="recentCustomers">
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
        </div> -->
    </div>
</div>