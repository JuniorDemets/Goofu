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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/category.css">
        <script src="ajouter_panier.js"></script> 
        <title>Téléphone</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
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
        <!-- boite tel xiaomi (présentation) +  bouton pour voir le tel xiaomi -->
        <div class="choix_xiaomi">
            <img class="photo_category" src="../../images/category/tel_xiaomi.jpg" alt="tel xiaomi">
            <h2 id="affichage_prix_1">449€</h2>
            <p id="description_category_1_head">Xiaomi Black Shark 2 :</p>
            <p id="description_category_1">Le Black Shark 2 est un smartphone haut de gamme annoncé le 18 mars 2019. </p>
            <form action="../details_objets/Telephones/details_xiaomi_shark.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite tel asuz (présentation) +  bouton pour voir le tel asuz -->
        <div class="choix_asuz_phone">
            <img class="photo_category" src="../../images/category/tel_asuz.jpg" alt="tel asuz">
            <h2 id="affichage_prix_1">999€</h2>
            <p id="description_category_1_head">Asus ROG Phone 5s</p>
            <p id="description_category_1">Équipé du dernier processeur Qualcomm® Snapdragon® 888+ 5G, 
                                             <br>
                                             le ROG Phone 5s propulse votre expérience gaming sur mobile dans une nouvelle dimension. 
                                             <br>
                                             Avec son taux d'échantillonnage tactile natif de 360 Hz, 
                                             <br>
                                             la dalle 144 Hz/ 1 ms du ROG Phone 5s met à votre portée une expérience visuelle ultra-fluide.</p>
            <form action="../details_objets/Telephones/details_asuz_rog_phone.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite tel oneplus (présentation) +  bouton pour voir le tel oneplus -->
        <div class="choix_oneplus">
            <img class="photo_category" src="../../images/category/tel_oneplus.jpg" alt="oneplus phone">
            <h2 id="affichage_prix_1">349€</h2>
            <p id="description_category_1_head">OnePlus 7 Pro :</p>
            <p id="description_category_1">Le OnePlus 7 Pro est un smartphone haut de gamme annoncé le 14 mai 2019, version améliorée du OnePlus 7. 
                                          <br>
                                          Il est équipé d'un écran AMOLED QHD+ de 6,67 pouces sans encoche, 
                                          <br>
                                          d'un SoC Qualcomm Snapdragon 855 et d'un triple capteur photo de 48+8+16 mégapixels .</p>
            <form action="../details_objets/Telephones/details_oneplus_pro.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite tel lenovo (présentation) +  bouton pour voir le tel lenovo -->
        <div class="choix_lenovo_phone">
            <img class="photo_category" src="../../images/category/tel_lenovo.jpg" alt="lenovo phone">
            <h2 id="affichage_prix_1">819€</h2>
            <p id="description_category_1_head">Lenovo Legion Duel Dual Sim  :</p>
            <p id="description_category_1">Conçu pour êre fluide lors de vos parties, le Lenovo Legion Duel Dual Sim vous surprendra. </p>
            <form action="../details_objets/Telephones/details_lenovo_phone.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite tel redmagic (présentation) +  bouton pour voir le tel redmagic -->
        <div class="choix_redmagic">
            <img class="photo_category" src="../../images/category/tel_redmagic.jpg" alt="Redmagic phone">
            <h2 id="affichage_prix_1">400€</h2>
            <p id="description_category_1_head">Nubia Red Magic 2 :</p>
            <p id="description_category_1">Le Nubia Red Magic est un smartphone haut de gamme destiné aux gamers.
Il embarque un Snapdragon 835, 6 ou 8 Go de mémoire vive, un écran de 5.99 pouces et une batterie de 3800 mAh.</p>
            <form action="../details_objets/Telephones/details_redmagic.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <div class="signature">Standaert-De Clercq Simon  et Demets Junior </div>
    </body>
</HTML>