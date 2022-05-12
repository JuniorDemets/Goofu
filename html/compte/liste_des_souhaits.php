<?php
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

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/style_compte.css">
        <title> Liste des souhaits. </title>
    </head>
    <body>
    <!-- Haut de page + logo + recherche  + panier + connexion -->
        <div class="pageup">
            <a href="../index.php" class="lien_logo"><img class="logo" src="../../images/index/logo.jpg" alt="logo"></a>
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
            <form action="compte.php" target="_blank">
                <input class="compte" type="submit" value="Compte">
            </form>
        </div>
        <!-- Choix des catégories (nav bar) -->
        <div class="category_total">
            <form action="../categories/ordinateurs.php">
                <input class="ordinateur" type="submit" value="Ordinateurs">
            </form>
            <form action="../categories/telephones.php">
                <input class="telephone" type="submit" value="Téléphones">
            </form>
            <form action="../categories/vr.php">
                <input class="realite_virtuelle" type="submit" value="Réalite Virtuelle">
            </form>
            <form action="../categories/console.php">
                <input class="console" type="submit" value="Consoles">
            </form>
            <form action="../categories/giftcard.php">
                <input class="cartes_cadeau" type="submit" value="Cartes Cadeau">
            </form>
        </div>

        <!-- Titre -->
        <header id="titre"><h1 id="titre1"> Liste des souhaits </h1></header>

        <!-- Article présent dans la liste des souhaits -->
        <div id="ligne1">
            <div id="article_1">
                <img src="https://via.placeholder.com/180x180" alt="Image du produit" title="Produit au prix de 00.00€">
                <p id="prix1"> 00.00$ </p>
            </div>
            <div id="article_2">
                <img src="https://via.placeholder.com/180x180" alt="Image du produit" title="Produit au prix de 00.00€">
                <p id="prix1"> 00.00$ </p>
            </div>
            <div id="article_3">
                <img src="https://via.placeholder.com/180x180" alt="Image du produit" title="Produit au prix de 00.00€">
                <p id="prix1"> 00.00$ </p>
            </div>
        </div>
        <div id="ligne2">
            <div id="article_4">
                <img src="https://via.placeholder.com/180x180" alt="Image du produit" title="Produit au prix de 00.00€">
                <p id="prix1"> 00.00$ </p>
            </div>
            <div id="article_5">
                <img src="https://via.placeholder.com/180x180" alt="Image du produit" title="Produit au prix de 00.00€">
                <p id="prix1"> 00.00$ </p>
            </div>
            <div id="article_6">
                <img src="https://via.placeholder.com/180x180" alt="Image du produit" title="Produit au prix de 00.00€">
                <p id="prix1"> 00.00$ </p>
            </div>
        </div>
        <div class="signature1">Standaert-De Clercq Simon, Demets Junior et Koch Ugo</div>
    </body>
</html>