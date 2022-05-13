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
        <link rel="stylesheet" type="text/css" href="../../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../../css/details.css">
        <script src="ajouter_panier.js"></script> 
        <title>Oculus Quest</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../../index.php"><img class="logo" src="../../../images/index/logo.jpg" alt="logo"></a>
            <div class="search_total">
                <input class="barre_cherche" placeholder="Recherche..." >
                <input class="bouton_rechercher"  type="submit" value="Rechercher">
            </div> 
            <form action="../../panier.php">
                <input class="panier" type="submit" value="Panier">
            </form>
            <form action="../../connexion.php" target="_blank">
                <input class="connexion" type="submit" value="Connexion">
            </form>
            <form action="../../compte/compte.php" target="_blank">
                <input class="compte" type="submit" value="Compte">
            </form>
        </div>
         <!--choix des catégories (nav bar)-->
        <div class="category_total">
            <form action="../../categories/ordinateurs.php">
                <input class="ordinateur" type="submit" value="Ordinateurs">
            </form>
            <form action="../../categories/telephones.php">
                <input class="telephone" type="submit" value="Téléphones">
            </form>
            <form action="../../categories/vr.php">
                <input class="realite_virtuelle" type="submit" value="Réalite Virtuelle">
            </form>
            <form action="../../categories/console.php">
                <input class="console" type="submit" value="Consoles">
            </form>
            <form action="../../categories/giftcard.php">
                <input class="cartes_cadeau" type="submit" value="Cartes Cadeau">
            </form>
        </div>
        <!--Boite qui prends tout-->
        <div class="all_items">
            <div id="img_wishlist">
                <img src="../../../images/category/oculus-quest.png" class="produit_image" alt="oculus quest">
            </div>
            <div class="titre_description">
                <h2 class="details">Détails du produit :</h2>
                <p class="description_complete">
                    Oculus Quest 2 est notre système de VR tout-en-un le plus abouti. Chaque détail a été conçu pour retranscrire au mieux vos mouvements dans l’univers virtuel. Vous profitez ainsi de jeux et d’expériences à couper le souffle avec une liberté inégalée. Aucun PC ni console requis. Vivez intensément chaque instant grâce à des performances ultra-rapides et à des graphismes nouvelle génération.
                    L’écran affiche 50 % de pixels en plus que le Quest original. De plus, vous bénéficiez d’un accès privilégié à des concerts en direct et à des évènements exclusifs. 
                    Les nouvelles manettes Touch présentent une ergonomie améliorée et des commandes intuitives qui transposent vos gestes, mouvements et actions en VR. Connectez votre casque VR à un ordinateur compatible à l’aide d’un câble Oculus Link et accédez à des centaines de jeux et d’expériences en VR sur PC. Avec le Quest 2, vous pouvez aussi jouer entre amis. 
                    Partagez votre expérience en VR avec les personnes autour de vous grâce à la mise en miroir, retrouvez vos amis virtuellement pour vous affronter dans des compétitions multijoueurs ou passez tout simplement du temps ensemble. Oculus Quest 2 : jouez, créez et explorez des mondes virtuels sans limites. Câble Oculus Link vendu séparément.
                </p>
                </div>
            </div>
            <div class="prix_panier">
                <p class="prix">449€</p>
                <form action="add_cart">
                    <input class="ajouter_panier" type="submit" value="Ajouter au panier">
                </form>
                <select name="Nombre d'ajouts" id="nbre_panier">
                    <option value="">--Quantité--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="0">6</option>
                    <option value="1">7</option>
                    <option value="2">8</option>
                    <option value="3">9</option>
                    <option value="4">10</option>
                </select>
            </div>
            <!--Commentaires sur l'article-->
            <form action="../../php/recup_com.php" method="POST">
                <textarea class="ajouter_commentaire" name="Commentaire"
                rows="5" cols="33" placeholder="Ajoutez un commentaire..."></textarea>
            <form action="....">
                <input class="ajouter_liste_souhaits" type="submit" value="Ajouter à la Liste des Souhaits">
            </form>
            <!--Bouton-->
                <input class="bt_send_com" type="submit" value="Envoyer">
            </form>   
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo</div>         
    </body>
</html>