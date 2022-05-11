<?php
//  Cookies pour la connexion sur tout le site
    $E_mail = $_POST['E_mail'];
    setcookie("Cookie", $E_mail, time()+3600000000000000000000000000000000000000000000000000000000000000000000000000000000000000);
    if (isset($_COOKIE["Cookie"])){ 
        echo 'Le cookie existe ' . $_COOKIE["Cookie"] . '!<br />';
    }else
        echo 'Le cookie n\'existe pas <br />';
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
        <title>Xbox Series X</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../../index.php" class="lien_logo"><img class="logo" src="../../../images/logo.png" alt="logo"></a>
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
                <img src="../../../images/category/console_xbox.jpg" class="produit_image" alt="Console xbox">
            </div>
            <div class="titre_description">
                <h2 class="details">Console Microsoft Xbox Series X :</h2>
                <p class="description_complete">
                    Plongez dans des univers ultra détaillés avec une résolution native 4K HDR . Compatible avec la technologie 8K HDR en connectant votre Xbox Series X à votre téléviseur 8K 
                    <br>
                    pour jouer dans les meilleures conditions grâce à la mise à l'échelle (4320p)
                    <br>
                    La Xbox Series S permet un rendu encore plus fluide et dynamique allant jusqu’à 120 images par seconde (compatible Fortnite, Call of Duty : Warzone , Rocket League etc)
                    <br>
                    Disque SSD 1To - Profitez d’un espace de stockage important pour tous vos jeux avec le disque SSD de 1 To pour des chargements rapides et des reprises de jeux instantanées
                    <br>
                    100% Rétrocompatible - Profitez d'une large sélection de vos anciens jeux Xbox (100% des jeux Xbox One, des centaines de jeux Xbox 360 & Xbox originale) directement sur votre Xbox Series X
                    <br>
                    Raytracing - Encore plus d’immersion avec le Raytracing qui permet d’afficher des lumières et reflets réalistes, pour des environnements plus vrais que nature sur les jeux Xbox Series X compatibles
                    <br>
                    Smart Delivery 
                </p>
                </div>
            </div>
            <div class="prix_panier">
                <p class="prix">799,99€</p>
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
          <!--Commentaires sur l'article-->
            <form action="../../../php/recup_com.php" method="POST">
                <textarea class="ajouter_commentaire" name="Commentaire"
                rows="5" cols="33" placeholder="Ajoutez un commentaire..."></textarea>
                <form action="....">
                <input class="ajouter_liste_souhaits" type="submit" value="Ajouter à la Liste des Souhaits">
            </form>
            <!--Bouton-->
                <input class="bt_send_com" type="submit" value="Envoyer">
            </form>   
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Ugo Koch </div>         
    </body>
</html>