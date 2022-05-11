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
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/category.css">
        <script src="ajouter_panier.js"></script> 
        <title>Console</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../index.php"><img class="logo" src="../../images/logo.png" alt="logo"></a>
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
        <!-- boite XBOX (présentation) +  bouton pour voir le XBOX -->
        <div class="choix_xbox">
            <img class="photo_xbox" src="../../images/category/console_xbox.jpg" alt="Image1">
            <h2 id="affichage_prix_1">799,99€</h2>
            <p id="description_xbox_1_head">Console Microsoft Xbox Series X :</p>
            <p id="description_xbox_1">Plongez dans des univers ultra détaillés avec une résolution native 4K HDR, 
                                       <br>
                                       avec son équipement nouvelle génération, la Xbox Series X vous surprendra.
            </p>
            <form action="../details_objets/consoles/details_xbox.php" >
                <input class="xbox_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite console playstation (présentation) +  bouton pour voir la console playstation -->
        <div class="choix_playstation">
            <img class="photo_playstation" src="../../images/category/console_playstation.jpg" alt="Image2">
            <h2 id="affichage_prix_1">1199,99€</h2>
            <p id="description_playstation_1_head">Console Sony PS5 Edition Digital  :</p>
            <p id="description_playstation_1">La console PS5™ recèle de possibilités de jeu inédites.
                                        <br>
                                        Découvrez un catalogue exceptionnel de jeux next generation. </p>
            <form action="../details_objets/consoles/details_console_playstation.php" >
                <input class="playstation_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite console switch (présentation) +  bouton pour voir le console switch -->
        <div class="choix_switch">
            <img class="photo_switch" src="../../images/category/console_switch.jpg" alt="switch Image">
            <h2 id="affichage_prix_1">299€</h2>
            <p id="description_switch_1_head">Console Nintendo Switch :</p>
            <p id="description_switch_1">Avez-vous déjà abandonné un jeu parce que vous n'aviez pas assez de temps pour y jouer ?
                                        <br>
                                        La console Nintendo Switch peut se transformer pour s'adapter à votre situation, 
                                        <br>
                                        de manière à ce que vous puissiez profiter de vos jeux quel que soit votre rythme de vie.</p>
            <form action="../details_objets/consoles/details_console_switch.php" >
                <input class="switch_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite console ps4 pro (présentation) +  bouton pour voir le console ps4 pro -->
        <div class="choix_playstation_pro">
            <img class="photo_choix_playstation_pro" src="../../images/category/console_playstation_pro.jpg" alt="Image2">
            <h2 id="affichage_prix_1">399€</h2>
            <p id="description_playstation_pro_1_head">Console Sony PS4 Pro :</p>
            <p id="description_playstation_pro_1">Le système PlayStation®4 ouvre la porte à un incroyable voyage à travers de
                                                  <br>
                                                  nouveaux mondes de jeu immersifs et une communauté de joueurs très connectée. 
                                                  </p>
            <form action="../details_objets/consoles/details_playstation_pro.php" >
                <input class="playstation_pro_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite Xbox one x (présentation) +  bouton pour voir la xbox one x -->
        <div class="choix_xbox_x">
            <img class="photo_xbox_x" src="../../images/category/console_xbox_x.jpg" alt="Image2">
            <h2 id="affichage_prix_1">250€</h2>
            <p id="description_xbox_x_1_head">Microsoft Xbox One X :</p>
            <p id="description_xbox_x_1">Au-delà d’un design renouvelé, légèrement plus compact que celui de la Xbox One S 
                                        <br>
                                        elle intègre un nouvel équipement pour faire tourner tout un catalogue de jeux.
                                        </p>
            <form action="../details_objets/consoles/details_xbox_x.php" >
                <input class="xbox_x_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="signature2">Standaert-De Clercq Simon, Demets Junior et Ugo Koch </div>
    </body>
</html>