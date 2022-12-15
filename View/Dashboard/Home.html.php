<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers"><?=count(find_all_auteurs())?></div>
            <div class="cardName">Auteurs</div>
        </div>
        <div class="iconBx">
            <ion-icon name="people-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers"><?=count(find_all_rayons())?></div>
            <div class="cardName">Rayons</div>
        </div>
        <div class="iconBx">
            <ion-icon name="layers-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers"><?=count(find_all_ouvrages())?></div>
            <div class="cardName">Ouvrages</div>
        </div>
        <div class="iconBx">
            <ion-icon name="book-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers">257</div>
            <div class="cardName">exemplaires</div>
        </div>
        <div class="iconBx">
            <ion-icon name="library-outline"></ion-icon>
        </div>
    </div>
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