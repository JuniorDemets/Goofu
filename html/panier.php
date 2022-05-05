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
<HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/style_panier.css">
        <title> Panier </title>
    </head>
    <body>
        <!-- Haut de page + logo + recherche  + panier + connexion -->
        <div class="pageup">
            <a href="index.php" class="lien_logo"><img class="logo" src="../images/logo.png" alt="logo"></a>
            <div class="search_total">
                <input class="barre_cherche" placeholder="Recherche..." >
                <input class="bouton_rechercher"  type="submit" value="Rechercher">
            </div> 
            <form action="connexion.php" target="_blank">
                <input class="connexion" type="submit" value="Connexion">
            </form>
            <form action="compte/compte.php" target="_blank">
                <input class="compte" type="submit" value="Compte">
            </form>
        </div>
        <!-- Choix des catégories (nav bar) -->
        <div class="category_total">
            <form action="categories/ordinateurs.php">
                <input class="ordinateur" type="submit" value="Ordinateurs">
            </form>
            <form action="categories/telephones.php">
                <input class="telephone" type="submit" value="Téléphones">
            </form>
            <form action="categories/vr.php">
                <input class="realite_virtuelle" type="submit" value="Réalite Virtuelle">
            </form>
            <form action="categories/console.php">
                <input class="console" type="submit" value="Consoles">
            </form>
            <form action="categories/giftcard.php">
                <input class="cartes_cadeau" type="submit" value="Cartes Cadeau">
            </form>
        </div> 
        <!-- Titre "Votre panier" -->
        <div id="titre">
            <p id="titre1"> Votre panier </p>
        </div>
        <!-- Affichage des articles -->
        <div class="choix_article">
            <img class="photo_produit" src="../images/category/150.png" alt="Image1">
            <p id="affichage_prix_1">$00.00</p>
            <p id="description_produit_1_head">PC Gamer de marque MSI :</p>
            <p id="description_produit_1">Ce pc de marque MSI exellent pour gaming next-gen. </p>
            <form action="produit_1.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
        <div class="choix_article_2">
            <img class="photo_produit" src="../images/category/150.png" alt="Image1">
            <p id="affichage_prix_1">$00.00</p>
            <p id="description_produit_1_head">PC Gamer de marque MSI :</p>
            <p id="description_produit_1">Ce pc de marque MSI exellent pour gaming next-gen. </p>
            <form action="produit_1.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
        <div class="choix_article_3">
            <img class="photo_produit" src="../images/category/150.png" alt="Image1">
            <p id="affichage_prix_1">$00.00</p>
            <p id="description_produit_1_head">PC Gamer de marque MSI :</p>
            <p id="description_produit_1">Ce pc de marque MSI exellent pour gaming next-gen. </p>
            <form action="produit_1.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
        <div class="choix_article_4">
            <img class="photo_produit" src="../images/category/150.png" alt="Image1">
            <p id="affichage_prix_1">$00.00</p>
            <p id="description_produit_1_head">PC Gamer de marque MSI :</p>
            <p id="description_produit_1">Ce pc de marque MSI exellent pour gaming next-gen. </p>
            <form action="produit_1.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
        <div>
            <form action="liste_des_souhaits.php" >
                <input class="ajout_souhait" type="submit" value="Ajouter à la liste des souhaits">
            </form>
        </div>
        <div id="bouton_achat">
            <form action="finaliser_achat.php" >
                <input class="bouton_achat" type="submit" value="Passer votre commande">
            </form>
        </div> 
        <div class="signature">Standaert-De Clercq Simon  et Demets Junior </div>
    </body>
</HTML>