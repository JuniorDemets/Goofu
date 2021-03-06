<?php
//Démarrage de la session 
session_start();

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
<!DOCTYPE HTML>
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
            <a href="index.php" class="lien_logo"><img class="logo" src="../images/index/logo.jpg" alt="logo" title="logo"></a>
            <div class="search_total">
                <input class="barre_cherche" placeholder="Recherche..." >
                <input class="bouton_rechercher"  type="submit" value="Rechercher">
            </div> 
            <form action="panier.php">
                <input class="panier" type="submit" value="Panier">
            </form>
            <form action="connexion.php" target="_blank">
                <input class="connexion" type="submit" value="Connexion">
            </form>
            <form action="compte/compte.php" target="_blank">
                <input class="compte" type="submit" value="Compte">
            </form>
        </div>
        <!--choix des catégories (nav bar)-->
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
        <!--choix des catégories-->
        <form action="../html/categories/ordinateurs.php">
            <input class="ordinateur_2" type="submit" value="Ordinateurs">
        </form>
        <form action="../html/categories/telephones.php">
            <input class="telephone_2" type="submit" value="Téléphones">
        </form>
        <form action="../html/categories/vr.php">
            <input class="realite_virtuelle_2" type="submit" value="Réalité Virtuelle">
        </form>
        <form action="../html/categories/console.php">
            <input class="console_2" type="submit" value="Consoles">
        </form>
        <form action="../html/categories/giftcard.php">
            <input class="cartes_cadeau_2" type="submit" value="Cartes Cadeau">
        </form>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo </div>  
    </body>
</html>