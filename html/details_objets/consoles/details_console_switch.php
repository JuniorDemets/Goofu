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
        <title>Nintendo Switch</title>
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
                <img src="../../../images/category/console_switch.jpg" class="produit_image" alt="switch console">
            </div>
            <form action="....">
                <input class="ajouter_liste_souhaits" type="submit" value="Ajouter à la Liste des Souhaits">
            </form>
            <div class="titre_description">
                <h2 class="details">Détails du produit :</h2>
                <p class="description_complete">
                    La console de Switch de Nintendo, c’est une petite révolution dans le monde du gaming ! Cette console portable dispose d’un grand écran tactile de 6,2 pouces et de manettes pouvant être scindées afin de pouvoir jouer à deux 
                    <br>
                    à certains jeux comme NBA 2K et Mario Kart. Tu es assis confortablement chez toi ? Pose la Switch sur son dock et continue ta partie sur ta télévision.
                    <br>
                    Les Joy-Con sont amovibles pour te permettre de jouer assis confortablement dans ton fauteuil… Mais si tu préfères les controllers plus classiques, choisis la manette Nintendo Switch Pro. Bien entendu, chaque joueur possédant une manette Switch peut jouer !
                    <br>
                    Les Joy-Con disposent d’un gyroscope et d’un accéléromètre. Grâce à ces ajouts, chaque manette peut être utilisée comme une épée, une raquette de tennis ou autre. Ensuite, la caméra de mouvement infrarouge enregistre chaque mouvement de main.
                </p>
                </div>
            </div>
            <div class="prix_panier">
                <p class="prix">299€</p>
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
            <!--Bouton-->
                <input class="bt_send_com" type="submit" value="Envoyer">
            </form>   
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Ugo Koch </div>         
    </body>
</html>