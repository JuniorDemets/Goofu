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
        <title>PS5</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../../index.php" class="lien_logo"><img class="logo" src="../../../images/index/logo.jpg" alt="logo"></a>
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
                <img src="data:image/jpeg;base64,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" class="produit_image" alt="playstation">
            </div>
            <div class="titre_description">
                <h2 class="details">Console Console Sony PS5 Edition Digital :</h2>
                <p class="description_complete">
                    Découvrez des temps de chargement accélérés grâce au disque SSD ultra rapide, une immersion plus poussée grâce au retour haptique, aux gâchettes adaptatives et au son 3D, sans oublier un catalogue exceptionnel de jeux PlayStation® nouvelle génération.
                    <br>
                    Profitez de toute la puissance d'un CPU, d'un GPU et d'un disque SSD personnalisés intégrant des opérations d'entrées/sorties redéfinissant ce dont une console PlayStation est capable.
                    <br>
                    Émerveillez-vous devant des graphismes incroyables et découvrez les nouvelles fonctionnalités de la PS5™.
                    <br>
                    Découvrez une expérience de jeu encore plus immersive grâce au retour haptique, aux gâchettes adaptatives et à la technologie audio 3D.
                    <br>
                    Maximisez vos sessions de jeu avec des temps de chargement quasi instantanés pour les jeux PS5™ installés.
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
                <textarea class="ajouter_commentaire" name="commentaire"
                rows="5" cols="33" placeholder="Ajoutez un commentaire..."></textarea>
            <form action="....">
                <input class="ajouter_liste_souhaits" type="submit" value="Ajouter à la Liste des Souhaits">
            </form>
            <!--Bouton-->
                <input class="bt_send_com" type="submit" value="Envoyer">
            </form>   
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo </div>         
    </body>
</html>