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
        <title>Réalité Virtuelle</title>
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
        <div class="choix_quest">
            <img class="photo_quest" src="../../images/category/oculus-quest.png" alt="Image1">
            <h2 id="affichage_prix_1">449€</h2>
            <p id="description_quest_1_head">Oculus Quest 2 :</p>
            <p id="description_quest_1">
                Oculus Quest 2 est notre système de VR tout-en-un le plus abouti.
                Chaque détail a été conçu pour retranscrire au mieux vos mouvements dans l’univers virtuel. 
                Vous profitez ainsi de jeux et d’expériences à couper le souffle avec une liberté inégalée. </p>
            <form action="../details_objets/vr/details_oculus_quest.php" >
                <input class="quest_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_htc">
            <img class="photo_htc" src="../../images/category/vr-htc-vive-pro2.jpg" alt="Image2">
            <h2 id="affichage_prix_1">1 399€</h2>
            <p id="description_htc_1_head">HTC VIVE pro 2</p>
            <p id="description_htc_1">Conçu pour répondre aux besoins des utilisateurs de RV les plus exigeants, 
                HTC VIVE Pro 2 est un système de Réalité Virtuelle qui offre des graphismes et un son de niveau supérieur. </p>
            <form action="../details_objets/vr/details_htc_vive_pro2.php" >
                <input class="htc_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_hp_reverb_G2">
            <img class="photo_hp_reverb_G2" src="../../images/category/HP-reverb-g2.jpg" alt="Image2">
            <h2 id="affichage_prix_1">659 €</h2>
            <p id="description_hp_reverb_G2_1_head">HP Reverb G2 :</p>
            <p id="description_hp_reverb_G2_1">Optez pour une expérience de réalité virtuelle réaliste avec le HP Reverb G2. 
                Vous disposez d'un écran LCD par œil, avec une résolution de 2160 x 2160. Vous avez donc plus de pixels que sur un écran 4K.</p>
            <form action="../details_objets/vr/details_hp_reverb_G2.php" >
                <input class="hp_reverb_G2_1" type="submit" value="Détails">
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
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Ugo Koch </div>
    </body>
</html>