<?php>
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
            <a href="../index.php"><img class="logo" src="https://via.placeholder.com/140x100" alt="logo"></a>
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
                                         Orienté pour les joueurs nomades, il est équipé d'un SoC Qualcomm Snapdragon 855 
                                         <br>
                                         épaulé par 6 à 12 Go de RAM, 
                                         <br>
                                         d'un écran AMOLED de 6,39 pouces et d'une batterie de 4000 mAh. </p>
            <form action="../details_objets/Telephones/details_xiaomi_shark.php" >
                <input class="xiaomi_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_asuz_phone">
            <img class="photo_asuz_phone" src="../../images/category/tel_asuz.jpg" alt="Image2">
            <h2 id="affichage_prix_1">999€</h2>
            <p id="description_asuz_phone_1_head">Asus ROG Phone 5s</p>
            <p id="description_asuz_phone_1">Équipé du dernier processeur Qualcomm® Snapdragon® 888+ 5G, 
                                             <br>
                                             le ROG Phone 5s propulse votre expérience gaming sur mobile dans une nouvelle dimension. 
                                             <br>
                                             Avec son taux d'échantillonnage tactile natif de 360 Hz, 
                                             <br>
                                             la dalle 144 Hz/ 1 ms du ROG Phone 5s met à votre portée une expérience visuelle ultra-fluide.</p>
            <form action="../details_objets/Telephones/details_asuz_rog_phone.php" >
                <input class="asuz_phone_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_oneplus">
            <img class="photo_oneplus" src="../../images/category/tel_oneplus.jpg" alt="Image2">
            <h2 id="affichage_prix_1">349€</h2>
            <p id="description_oneplus_1_head">OnePlus 7 Pro :</p>
            <p id="description_oneplus_1">Le OnePlus 7 Pro est un smartphone haut de gamme annoncé le 14 mai 2019, version améliorée du OnePlus 7. 
                                          <br>
                                          Il est équipé d'un écran AMOLED QHD+ de 6,67 pouces sans encoche, 
                                          <br>
                                          d'un SoC Qualcomm Snapdragon 855 et d'un triple capteur photo de 48+8+16 mégapixels .</p>
            <form action="../details_objets/Telephones/details_oneplus_pro.php" >
                <input class="oneplus_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <!-- <div class="choix_asuz">
            <img class="photo_asuz" src="../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_asuz_1_head">PC Gamer de marque Asuz :</p>
            <p id="description_asuz_1">Ce pc de marque Asuz exellent pour gaming next-gen. </p>
            <form action="asuz.php" >
                <input class="asuz_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form> -->
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <!-- <div class="choix_asuz">
            <img class="photo_asuz" src="../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_asuz_1_head">PC Gamer de marque Asuz :</p>
            <p id="description_asuz_1">Ce pc de marque Asuz exellent pour gaming next-gen. </p>
            <form action="asuz.php" >
                <input class="asuz_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form> -->
        <!-- Fin boite un -->
        <div class="signature">Standaert-De Clercq Simon  et Demets Junior </div>
    </body>
</HTML>