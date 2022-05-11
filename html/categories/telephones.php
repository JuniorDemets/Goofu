<?php
//  Cookies pour la connexion sur tout le site
    $E_mail = $_POST['E_mail'];
    setcookie("Cookie", $E_mail, time()+3600000000000000000000000000000000000000000000000000000000000000000000000000000000000000);
    if (isset($_COOKIE["Cookie"])){ 
        echo 'Le cookie existe ' . $_COOKIE["Cookie"] . '!<br />';
    }else
        echo 'Le cookie n\'existe pas <br />';
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
        <!-- boite pc msi (présentation) +  bouton pour voir le pc msi -->
        <div class="choix_xiaomi">
            <img class="photo_xiaomi" src="../../images/category/tel_xiaomi.jpg" alt="Image1">
            <h2 id="affichage_prix_1">449€</h2>
            <p id="description_xiaomi_1_head">Xiaomi Black Shark 2 :</p>
            <p id="description_xiaomi_1">Le Black Shark 2 est un smartphone haut de gamme annoncé le 18 mars 2019. 
                                         <br>
                                         Orienté pour les joueurs nomades, il est capable de faire tourner 
                                         <br>
                                         des jeux comme PUBG : Mobile, ou Call Of Duty : Mobile avec une fluidité exemplaire </p>
            <form action="../details_objets/Telephones/details_xiaomi_shark.php" >
                <input class="xiaomi_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_asuz_phone">
            <img class="photo_asuz_phone" src="../../images/category/tel_asuz.jpg" alt="Image2">
            <h2 id="affichage_prix_1">999€</h2>
            <p id="description_asuz_phone_1_head">Asus ROG Phone 5s</p>
            <p id="description_asuz_phone_1">Équipé du dernier processeur Qualcomm® Snapdragon® 888, 
                                             <br>
                                             le ROG Phone 5s propulse votre expérience gaming sur mobile dans une nouvelle dimension. 
                                             </p>
            <form action="../details_objets/Telephones/details_asuz_rog_phone.php" >
                <input class="asuz_phone_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_oneplus">
            <img class="photo_oneplus" src="../../images/category/tel_oneplus.jpg" alt="Image2">
            <h2 id="affichage_prix_1">349€</h2>
            <p id="description_oneplus_1_head">OnePlus 7 Pro :</p>
            <p id="description_oneplus_1">Le OnePlus 7 Pro est un smartphone haut de gamme annoncé le 14 mai 2019, version améliorée du OnePlus 7. 
                                          <br>
                                          Il est multitâches, prendre des photos, jouer, ou regarder des films, rien de lui fait peur.</p>
            <form action="../details_objets/Telephones/details_oneplus_pro.php" >
                <input class="oneplus_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_lenovo_legion">
            <img class="photo_lenovo_legion" src="../../images/category/tel_lenovo.png" alt="Image2">
            <h2 id="affichage_prix_1">819€</h2>
            <p id="description_lenovo_legion_1_head">Lenovo Legion Duel Dual Sim :</p>
            <p id="description_lenovo_legion_1">Découvrez une expérience de gaming mobile, évoluée. 
                                                <br>
                                                Avec sa double architecture sous-jacente et la première interface utilisateur horizontale profondément personnalisée au monde, 
                                                le Lenovo Legion bats tout les records !    
                                                </p>
            <form action="../details_objets/Telephones/details_lenovo_legion_phone.php" >
                <input class="lenovo_legion_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_redmagic">
            <img class="photo_redmagic" src="../../images/category/tel_redmagic.jpg" alt="Image2">
            <h2 id="affichage_prix_1">799€</h2>
            <p id="description_redmagic_1_head">Redmagic 7 :</p>
            <p id="description_redmagic_1">Pour des fréquences d'images optimales dans n'importe quel jeu, REDMAGIC utilise la dernière technologie de fréquence d'images adaptative 
                                       <br>
                                       avec Touch Choreographer 4.0.</p>
            <form action="../details_objets/Telephones/details_redmagic_7.php" >
                <input class="redmagic_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
            </div>
        <!-- Fin boite un -->
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Ugo Koch </div>
    </body>
</HTML>