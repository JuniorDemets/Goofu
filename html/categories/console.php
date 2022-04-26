<?php>
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
        <div class="choix_oculus">
            <img class="photo_oculus" src="../images/category/150.png" alt="Image1">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_oculus_1_head">PC Gamer de marque oculus :</p>
            <p id="description_oculus_1">Ce pc de marque oculus exellent pour gaming next-gen. </p>
            <form action="oculus.php" >
                <input class="oculus_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_htc">
            <img class="photo_htc" src="../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_htc_1_head">PC Gamer de marque htc :</p>
            <p id="description_htc_1">Ce pc de marque htc exellent pour gaming next-gen. </p>
            <form action="htc.php" >
                <input class="htc_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_oneplus">
            <img class="photo_oneplus" src="../../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_oneplus_1_head">Téléphone gaming de marque OnePlus :</p>
            <p id="description_oneplus_1">Téléphone gaming de marque OnePlus exellent pour gaming next-gen. </p>
            <form action="oneplus.php" >
                <input class="oneplus_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_asuz">
            <img class="photo_asuz" src="../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_asuz_1_head">PC Gamer de marque Asuz :</p>
            <p id="description_asuz_1">Ce pc de marque Asuz exellent pour gaming next-gen. </p>
            <form action="asuz.php" >
                <input class="asuz_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_asuz">
            <img class="photo_asuz" src="../images/category/150.png" alt="Image2">
            <h2 id="affichage_prix_1">$00.00</h2>
            <p id="description_asuz_1_head">PC Gamer de marque Asuz :</p>
            <p id="description_asuz_1">Ce pc de marque Asuz exellent pour gaming next-gen. </p>
            <form action="asuz.php" >
                <input class="asuz_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <div class="signature2">Standaert-De Clercq Simon  et Demets Junior </div>
    </body>
</html>