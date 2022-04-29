<?php
 setcookie('user_pref', 'dark_theme', time()+3600*24, '/', '', true, true);

 ?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Goofu</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="index.html" class="lien_logo"><img class="logo" src="https://via.placeholder.com/140x100" alt="logo"></a>
            <div class="search_total">
                <input class="barre_cherche" placeholder="Recherche..." >
                <input class="bouton_rechercher"  type="submit" value="Rechercher">
            </div> 
            <form action="panier.html">
                <input class="panier" type="submit" value="Panier">
            </form>
            <form action="connexion.html" target="_blank">
                <input class="connexion" type="submit" value="Connexion">
            </form>
            <form action="compte/compte.html" target="_blank">
                <input class="compte" type="submit" value="Compte">
            </form>
        </div>
        <!--choix des catégories (nav bar)-->
        <div class="category_total">
            <form action="categories/ordinateurs.html">
                <input class="ordinateur" type="submit" value="Ordinateurs">
            </form>
            <form action="categories/telephones.html">
                <input class="telephone" type="submit" value="Téléphones">
            </form>
            <form action="categories/vr.html">
                <input class="realite_virtuelle" type="submit" value="Réalite Virtuelle">
            </form>
            <form action="categories/console.html">
                <input class="console" type="submit" value="Consoles">
            </form>
            <form action="categories/giftcard.html">
                <input class="cartes_cadeau" type="submit" value="Cartes Cadeau">
            </form>
        </div>
        <!--choix des catégories-->
        <form action="../html/categories/ordinateurs.html">
            <input class="ordinateur_2" type="submit" value="Ordinateurs">
        </form>
        <form action="../html/categories/telephones.html">
            <input class="telephone_2" type="submit" value="Téléphones">
        </form>
        <form action="../html/categories/vr.html">
            <input class="realite_virtuelle_2" type="submit" value="Réalité Virtuelle">
        </form>
        <form action="../html/categories/console.html">
            <input class="console_2" type="submit" value="Consoles">
        </form>
        <form action="../html/categories/giftcard.html">
            <input class="cartes_cadeau_2" type="submit" value="Cartes Cadeau">
        </form>
        <div class="signature">Standaert-De Clercq Simon  et Demets Junior </div>  
    </body>
</html>
 <?php
//  Cookies pour la connexion sur tout le site
    $E_mail = $_POST['E_mail'];
    // setcookie("Cookie", $E_mail, time()+360000000000000000000000000000000000000000);

    // setcookie('oulala', 'test',  time()+3600*24);

    // setcookie('user_id', '1234');
   
    // if (isset($_COOKIE["Cookie"])){ 
    //     echo 'Le cookie existe ' . $_COOKIE["Cookie"] . '!<br />';
    // }

    // setcookie('user_pref', 'dark_theme', time()+3600*24, '/', '', true, true);
?>