<?php
//Démarrage de la session 
session_start();

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
            <a href="../index.php"><img class="logo" src="../../images/index/logo.jpg" alt="logo" title="logo"></a>
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
        </div>
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
        </div>
        <!-- boite giftcard xbox  (présentation) +  bouton pour voir le giftcard xbox -->
        <div class="choix_xbox_gift">
            <img class="photo_category" src="../../images/category/xbox.png" alt="xbox logo" title="Xbox">
            <h2 id="affichage_prix_1">25€</h2>
            <p id="description_category_1_head">Carte cadeau xbox 25€ :</p>
            <p id="description_category_1">A dépenser sur le microsoft store ! </p>
            <form action="../details_objets/giftcard/details_xbox_giftcard.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="../compte/liste_des_souhaits.php">
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite giftcard ps (présentation) +  bouton pour voir le giftcard ps -->
        <div class="choix_playstation_gift">
            <img class="photo_category" src="../../images/category/playstation.jpg" alt="Image1" title="images1">
            <h2 id="affichage_prix_1">25€</h2>
            <p id="description_category_1_head">Carte cadeau playstation 25€ :</p>
            <p id="description_category_1">A dépenser sur le playstation store ! </p>
            <form action="../details_objets/giftcard/details_playstation_giftcard.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="../compte/liste_des_souhaits.php">
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite nintendo (présentation) +  bouton pour voir le nintendo -->
        <div class="choix_nintendo_gift">
            <img class="photo_category" src="../../images/category/nintendo.png" alt="Image1" title="images1">
            <h2 id="affichage_prix_1">25€</h2>
            <p id="description_category_1_head">Carte cadeau nintendo 25€ :</p>
            <p id="description_category_1">A dépenser sur le nintendo e-shop ! </p>
            <form action="../details_objets/giftcard/details_nintendo_giftcard.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="../compte/liste_des_souhaits.php">
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite steam (présentation) +  bouton pour voir le steam -->
        <div class="choix_steam_gift">
            <img class="photo_category" src="../../images/category/steam.png" alt="steam gift" title="Steam Gift">
            <h2 id="affichage_prix_1">25€</h2>
            <p id="description_category_1_head">Carte cadeau steam de 25€ :</p>
            <p id="description_category_1">A dépenser sur Steam ! </p>
            <form action="../details_objets/giftcard/details_steam_giftcard.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="../compte/liste_des_souhaits.php">
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite paysafe (présentation) +  bouton pour voir le paysafe -->
        <div class="choix_paysafe_gift">
            <img class="photo_category" src="../../images/category/paysafe.png" alt="paysafe logo" title="PaysafeCard">
            <h2 id="affichage_prix_1">25€</h2>
            <p id="description_category_1_head">Carte paysafe de 25€ :</p>
            <p id="description_category_1">A dépenser partout  ! </p>
            <form action="../details_objets/giftcard/details_paysafe_giftcard.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="../compte/liste_des_souhaits.php">
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div> 
        <!-- Fin boite un -->
        <div class="signature">Standaert-De Clercq Simon  et Demets Junior </div>
    </body>
</HTML>