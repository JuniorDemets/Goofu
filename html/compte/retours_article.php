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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/style_compte.css">
        <title>Retour d'article</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../index.html" class="lien_logo"><img class="logo" src="https://via.placeholder.com/140x100" alt="logo"></a>
            <div class="search_total">
                <input class="barre_cherche" placeholder="Recherche..." >
                <input class="bouton_rechercher"  type="submit" value="Rechercher">
            </div> 
            <form action="../panier.html">
                <input class="panier" type="submit" value="Panier">
            </form>
            <form action="../connexion.html" target="_blank">
                <input class="connexion" type="submit" value="Connexion">
            </form>
            <form action="compte.html" target="_blank">
                <input class="compte" type="submit" value="Compte">
            </form>
        </div>
        <!--choix des catégories (nav bar)-->
        <div class="category_total">
            <form action="../categories/ordinateurs.html">
                <input class="ordinateur" type="submit" value="Ordinateurs">
            </form>
            <form action="../categories/telephones.html">
                <input class="telephone" type="submit" value="Téléphones">
            </form>
            <form action="../categories/vr.html">
                <input class="realite_virtuelle" type="submit" value="Réalite Virtuelle">
            </form>
            <form action="../categories/console.html">
                <input class="console" type="submit" value="Consoles">
            </form>
            <form action="../categories/giftcard.html">
                <input class="cartes_cadeau" type="submit" value="Cartes Cadeau">
            </form>
        </div>
        <!--Contenu-->
        <div>
            <h1 id="account_title" class="code-title"> Retourner des articles </h1>
        </div>   
        <div>
            <p id="sous-titre-retour">Pour retourner un article, veuillez remplir le document ci-dessous <br /> afin de nous l'envoyer à l'adresse suivante: Goofu2022@gmail.com. </p><br />
            <p id="sous-titre-retour1">
                Lien pour accéder au formulaire:
                <a href="../document/formulaire_retour.pdf"> Formulaire de retour</a>
            </p>
        </div>
        <div class="boutons_ducompte">
            <form action="compte.html">
                <input id="bt_compte" type="submit" value="Compte">
            </form>
            <form action="securite.html">
                <input id="bt_sécurité" type="submit" value="Sécurité">
            </form>
            <form action="retours.html">
                <input id="bt_retours" type="submit" value="Mes retours">
            </form>
            <form action="retours_article.html">
                <input id="bt_retour_article" type="submit" value="Retourner des articles">
            </form>
            <form action="liste_des_souhaits.html">
                <input id="bt_souhaits" type="submit" value="Liste des souhaits">
            </form>
            <form action="code_promo.html">
                <input id="bt_promo" type="submit" value="Code promo">
            </form>
            <form action="../index.html">
                <input id="bt_deconnexion" type="submit" value="Se déconnecter">
            </form>
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo</div>
    </body>
</html>