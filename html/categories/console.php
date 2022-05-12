<?php
<<<<<<< HEAD
//  Cookies pour la connexion sur tout le site
    $E_mail = $_POST['E_mail'];
    setcookie("Cookie", $E_mail, time()+3600000000000000000000000000000000000000000000000000000000000000000000000000000000000000);
    if (isset($_COOKIE["Cookie"])){ 
        echo 'Le cookie existe ' . $_COOKIE["Cookie"] . '!<br />';
    }else
        echo 'Le cookie n\'existe pas <br />';
=======
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

>>>>>>> 89e3a56033519cce6e07afdf9412c9452c1052dc
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
        <title>Consoles</title>
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
        <!-- boite XBOX (présentation) +  bouton pour voir le XBOX -->
        <div class="choix_xbox">
            <img class="photo_category" src="data:image/jpeg;base64,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" alt="xbox series X">
            <h2 id="affichage_prix_1">799,99€</h2>
            <p id="description_category_1_head">Console Microsoft Xbox Series X :</p>
            <p id="description_category_1">Plongez dans des univers ultra détaillés avec une résolution native 4K HDR . Compatible avec la technologie 
                                       <br>
                                       8K HDR en connectant votre Xbox Series X à votre téléviseur 8K pour jouer dans les meilleures conditions
                                       <br>
                                       grâce à la mise à l'échelle (4320p)
            </p>
            <form action="../details_objets/consoles/details_xbox.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite console playstation (présentation) +  bouton pour voir la console playstation -->
        <div class="choix_playstation">
            <img class="photo_category" src="data:image/jpeg;base64,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" alt="Image2">
            <h2 id="affichage_prix_1">1199,99€</h2>
            <p id="description_category_1_head">Console Sony PS5 Edition Digital  :</p>
            <p id="description_category_1">La console PS5™ recèle de possibilités de jeu inédites.
                                        <br>
                                        Découvrez des temps de chargement accélérés grâce au disque SSD ultra rapide, une immersion plus 
                                        <br>
                                        poussée grâce au retour haptique, aux gâchettes adaptatives et au son 3D, 
                                        <br>
                                        sans oublier un catalogue exceptionnel de jeux PlayStation® nouvelle génération. </p>
            <form action="../details_objets/consoles/details_playstation.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite console switch (présentation) +  bouton pour voir le console switch -->
        <div class="choix_switch">
            <img class="photo_category" src="data:image/jpeg;base64,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" alt="switch Image">
            <h2 id="affichage_prix_1">299€</h2>
            <p id="description_category_1_head">Console Nintendo Switch :</p>
            <p id="description_category_1">Avez-vous déjà abandonné un jeu parce que vous n'aviez pas assez de temps pour y jouer ?
                                        <br>
                                        La console Nintendo Switch peut se transformer pour s'adapter à votre situation, 
                                        <br>
                                        de manière à ce que vous puissiez profiter de vos jeux
                                        <br>
                                        quel que soit votre rythme de vie.</p>
            <form action="../details_objets/consoles/details_switch.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite console ps4 pro (présentation) +  bouton pour voir le console ps4 pro -->
        <div class="choix_playstation_pro">
            <img class="photo_category" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSIFcnSge0M8ZKLP10hEM1J5w-gvi2h73ITw&usqp=CAU" alt="ps4 pro">
            <h2 id="affichage_prix_1">399€</h2>
            <p id="description_category_1_head">Console Sony PS4 Pro :</p>
            <p id="description_category_1">Le système PlayStation®4 ouvre la porte à un incroyable voyage à travers de
                                                  <br>
                                                  nouveaux mondes de jeu immersifs et une communauté de joueurs très connectée. 
                                                  <br>
                                                  PS4 Pro donne la priorité aux joueurs. Par les développeurs, pour les joueurs. </p>
            <form action="../details_objets/consoles/details_playstation_pro.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite Xbox one x (présentation) +  bouton pour voir la xbox one x -->
        <div class="choix_xbox_x">
            <img class="photo_category" src="https://www.backmarket.be/cdn-cgi/image/format=auto,quality=75,width=640/https://d1eh9yux7w8iql.cloudfront.net/product_images/241391_af1d8942-f606-4f90-b2fe-2a1a760593c9.jpg" alt="xbox one x">
            <h2 id="affichage_prix_1">250€</h2>
            <p id="description_category_1_head">Microsoft Xbox One X :</p>
            <p id="description_category_1">Au-delà d’un design renouvelé, légèrement plus compact que celui de la One S 
                                        la xbox one x possède des performences améliorées pour jouer a tout un panel de jeux</p>
            <form action="../details_objets/consoles/details_xbox_x.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- <div class="signature2">Standaert-De Clercq Simon, Demets Junior et Koch Ugo </div> -->
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
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo </div>  
    </body>
</html>