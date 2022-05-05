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
        <link rel="stylesheet" type="text/css" href="../../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../../css/details.css">
        <script src="ajouter_panier.js"></script> 
        <title>Xiaomi</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../../index.php"><img class="logo" src="../../../images/logo.png" alt="logo"></a>
        </div>
        <div class="search_total">
            <input class="barre_cherche" placeholder="Recherche..." >
            <input class="bouton_rechercher"  type="submit" value="Rechercher"> 
                <form action="../../panier.php">
                    <input class="panier" type="submit" value="Panier">
                </form>
                <form action="../../connexion.php" target="_blank">
                    <input class="connexion" type="submit" value="Connexion">
                </form>
                <form action="../../compte.php" target="_blank">
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
                <img src="../../../images/category/tel_oneplus.jpg" class="msi_image" alt="pc msi">
            </div>
            <form action="....">
                <input class="ajouter_liste_souhaits" type="submit" value="Ajouter à la Liste des Souhaits">
            </form>
            <div class="titre_description">
                <h2 class="details">Détails du produit :</h2>
                <p class="description_complete">
                    L’écran Fluid AMOLED de 6,67 pouces du OnePlus 7 Pro est notre écran le plus évolué de tous les temps. 
                    <br>
                    Il vous permet de bénéficier d’une fluidité et d’une clarté inégalées avec une fréquence de rafraîchissement de 90 Hz et une résolution QHD+.
                    <br>
                    Chaque contact, balayage et pression sur les touches sont instantanés et sans effort grâce au premier écran AMOLED au monde à afficher un taux de rafraîchissement de 90 Hz.
                    <br>
                    Accélérez votre charge grâce à la fonction Warp Charge 30 et préparez votre OnePlus 7 Pro à l’action en seulement 20 minutes.
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
            <form action="commentaire.php">
                <textarea class="ajouter_commentaire" name="commentaires"
                rows="5" cols="33" placeholder="Ajoutez un commentaire..."></textarea>
            <!--Bouton-->
                <input class="bt_send_com" type="submit" value="Envoyer">
            </form>   
        </div>
        <div class="signature">Standaert-De Clercq Simon  et Demets Junior </div>         
    </body>
</html>