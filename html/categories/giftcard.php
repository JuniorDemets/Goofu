<?php
//Démarrage de la session 
session_start()

//Connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=4tt_junior', 'junior', 'junior5');

$email = $E_mail;
$expire = time() + 60*60*24*3; // 3 days from now

//Mis en route des cookies
setcookie("utilisateur", $email, $expire); 


//Test de la présence de cookies
if(!isset($_COOKIE["utilisateur"])) {
    echo "pas de cookie ! ";
  } else {
    echo  $_COOKIE[$email];
  }

?>
<!DOCTYPE HTML>
<HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/category.css">
        <script src="ajouter_panier.js"></script> 
        <title>Carte cadeau</title>
    </head>
    <body>
        <div class="pageup">
            <a href="../index.php"><img class="logo" src="../../images/index/logo.jpg" alt="logo"></a>
            <div class="search_total">
                <input class="barre_cherche" placeholder="Recherche..." >
                <input class="bouton_rechercher"  type="submit" value="Rechercher">
            </div> 
            <form action="../panier.php">
                <input class="panier" type="submit" value="Panier">
            </form>
            <form action="../connexion.php" target="_blank">
                <input class="connexion" type="submit" value="Connexion">
            </form>
            <form action="../compte/compte.php" target="_blank">
                <input class="compte" type="submit" value="Compte">
            </form>
        <!--choix des catégories (nav bar)-->
        <div class="category_total">
            <form action="ordinateurs.php">
                <input class="ordinateur" type="submit" value="Ordinateurs">
            </form>
            <form action="telephones.php">
                <input class="telephone" type="submit" value="Téléphones">
            </form>
            <form action="vr.php">
                <input class="realite_virtuelle" type="submit" value="Réalite Virtuelle">
            </form>
            <form action="console.php">
                <input class="console" type="submit" value="Consoles">
            </form>
            <form action="giftcard.php">
                <input class="cartes_cadeau" type="submit" value="Cartes Cadeau">
            </form>
        <!-- boite pc msi (présentation) +  bouton pour voir le pc msi -->
        <div class="choix_oculus">
            <img class="photo_oculus" src="../images/category/150.png" alt="Image1">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_oculus_1_head">PC Gamer de marque oculus :</p>
            <p id="description_oculus_1">Ce pc de marque oculus exellent pour gaming next-gen. </p>
            <form action="oculus.php" >
                <input class="oculus_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_htc">
            <img class="photo_htc" src="../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_htc_1_head">PC Gamer de marque htc :</p>
            <p id="description_htc_1">Ce pc de marque htc exellent pour gaming next-gen. </p>
            <form action="htc.php" >
                <input class="htc_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_oneplus">
            <img class="photo_oneplus" src="../../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_oneplus_1_head">Téléphone gaming de marque OnePlus :</p>
            <p id="description_oneplus_1">Téléphone gaming de marque OnePlus exellent pour gaming next-gen. </p>
            <form action="oneplus.php" >
                <input class="oneplus_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_asuz">
            <img class="photo_asuz" src="../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_asuz_1_head">PC Gamer de marque Asuz :</p>
            <p id="description_asuz_1">Ce pc de marque Asuz exellent pour gaming next-gen. </p>
            <form action="asuz.php" >
                <input class="asuz_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div> 
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_asuz">
            <img class="photo_asuz" src="../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_asuz_1_head">PC Gamer de marque Asuz :</p>
            <p id="description_asuz_1">Ce pc de marque Asuz exellent pour gaming next-gen. </p>
            <form action="asuz.php" >
                <input class="asuz_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <div class="signature">Standaert-De Clercq Simon  et Demets Junior </div>
    </body>
</HTML>