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
        <title>PS4 Pro</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../../index.php" class="lien_logo"><img class="logo" src="../../../images/index/logo.jpg" alt="logo"></a>
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
            <form action="../compte/compte.php" target="_blank">
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSIFcnSge0M8ZKLP10hEM1J5w-gvi2h73ITw&usqp=CAU" class="produit_image" alt="console ps4 ">
            </div>
            <div class="titre_description">
                <h2 class="details">Sony PlayStation 4 Pro :</h2>
                <p class="description_complete">
                    Le système PlayStation®4 ouvre la porte à un incroyable voyage à travers de nouveaux mondes de jeu immersifs et une communauté de joueurs très connectée. PS4 Pro donne la priorité aux joueurs. Par les développeurs, pour les joueurs.
                    <br>
                    Utilisez les capacités interactives des jeux de toutes les manières dont vous êtes habitué, ainsi que de manières que vous n'auriez jamais cru possible. Des joysticks plus précis, des capteurs de mouvement intégrés, 
                    <br>
                    un haut-parleur intégré et des commandes tactiles ne sont que quelques-unes des raisons pour lesquelles la manette sans fil DUALSHOCK 4 offre une expérience de jeu intuitive et renouvelée entre vos mains. 
                    <br>
                    Mises à jour automatiques en arrière-plan: le logiciel système et les mises à jour du jeu sont téléchargés en arrière-plan pour que votre PS4 soit toujours prête. 
                </p>
                </div>
            </div>
            <div class="prix_panier">
                <p class="prix">399€</p>
                <form action="../../panier.php">
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
           <!--Commentaires sur l'article + wishlist-->
           <form>
                <textarea class="ajouter_commentaire" name="Commentaire" placeholder="Ajoutez un commentaire..."></textarea>
            </form>
            <form action="../../compte/liste_des_souhaits.php">
                <input class="ajouter_liste_souhaits" type="submit" value="Ajouter à la Liste des Souhaits">
            </form>
            <!--Bouton-->
            <form action="../../php/recup_com.php" method="POST">
                <input class="bt_send_com" type="submit" value="Envoyer">
            </form>   
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo</div>         
    </body>
</html>