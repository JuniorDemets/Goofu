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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/category.css">
        <script src="ajouter_panier.js"></script> 
        <title>Réalité Virtuelle</title>
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
        <!-- boite pc msi (présentation) +  bouton pour voir le pc msi -->
        <div class="choix_quest">
            <img class="photo_category" src="../../images/category/oculus-quest.png" alt="Image1">
            <h2 id="affichage_prix_1">449€</h2>
            <p id="description_category_1_head">Oculus Quest 2 :</p>
            <p id="description_category_1">
                Oculus Quest 2 est notre système de VR tout-en-un le plus abouti.
                Chaque détail a été conçu pour retranscrire au mieux vos mouvements dans l’univers virtuel. 
                Vous profitez ainsi de jeux et d’expériences à couper le souffle avec une liberté inégalée. </p>
            <form action="../details_objets/vr/details_oculus_quest.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_htc">
            <img class="photo_category" src="../../images/category/vr-htc-vive-pro2.jpg" alt="Image2">
            <h2 id="affichage_prix_1">1 399€</h2>
            <p id="description_category_1_head">HTC VIVE pro 2</p>
            <p id="description_category_1">Conçu pour répondre aux besoins des utilisateurs de RV les plus exigeants, 
                HTC VIVE Pro 2 est un système de Réalité Virtuelle qui offre des graphismes et un son de niveau supérieur. </p>
            <form action="../details_objets/vr/details_htc_vive_pro2.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_hp_reverb_G2">
            <img class="photo_category" src="../../images/category/HP-reverb-g2.jpg" alt="Image2">
            <h2 id="affichage_prix_1">659 €</h2>
            <p id="description_category_1_head">HP Reverb G2 :</p>
            <p id="description_category_1">
                Optez pour une expérience de réalité virtuelle réaliste avec le HP Reverb G2. 
                Vous disposez d'un écran LCD par œil, avec une résolution de 2160 x 2160. 
                Vous avez donc plus de pixels que sur un écran 4K.</p>
            <form action="../details_objets/vr/details_hp_reverb_G2.php" >
                <input class="produit_1" type="submit" value="Détails">
                </form>
                <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- valve_index (présentation) +  bouton pour voir le valve_index -->
        <div class="choix_valve_index">
            <img class="photo_category" src="../../images/category/valve-index.jpg" alt="Image2">
            <h2 id="affichage_prix_1">580 €</h2>
            <p id="description_category_1_head">Valve index :</p>
            <p id="description_category_1">Quoi de mieux pour jouer au nouveau jeu de Valve que le casque de VR de Valve ? 
                Il s’appelle Valve Index, et fonctionnera bien évidemment avec Half-Life : Alyx.  </p>
            <form action="../details_objets/vr/details_valve_index.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_playstation_vr">
            <img class="photo_category" src="../../images/category/playstation-vr.jpg" alt="Image2">
            <h2 id="affichage_prix_1">330 €</h2>
            <p id="description_category_1_head">Playstation VR :</p>
            <p id="description_category_1">Avec le PlayStation VR, vous ferez une expérience de jeu totalement inédite. 
                Vous serez au cœur de l'action, découvrant chaque détail de nouveaux mondes extraordinaires et vous aurez la sensation d’être réellement dans le jeu. </p>
            <form action="../details_objets/vr/details_playstation_vr.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo</div>
    </body>
</html>