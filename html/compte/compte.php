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
        <title> Compte </title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/style_compte.css">
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
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
        <!--choix des catégories (nav bar)-->
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
        <!--Contenu-->
        <div id="contenu">
            <div>
                <h1 id="account_title"> Bienvenue "utilisateur" ! </h1>
            </div>        
            <div id="commande">
                <div id="category-name">
                    <div id="num-com"><p>N° de commande</p></div>
                    <div id="date"><p>Date</p></div>
                    <div id="montant"><p>Montant</p></div>
                    <div id="mode-paiement"><p>Mode de paiement</p></div>
                    <div id="etat"><p>Etat de livraison</p></div>
                    <div id="details"><p>Détails</p></div>
                </div>
                <table id="tableau-com">
                    <tr id="tr1">
                        <td id="t-num-com">0000001</td>
                        <td id="t-date">10/10/2021</td>
                        <td id="t-montant">159,99$</td>
                        <td id="t-mode-paiement">Maestro</td>
                        <td id="t-etat">Livré</td>
                        <td id="t-details"><input class="" type="button" value="+"></td>
                    </tr>
                    <tr id="tr2">
                        <td id="t-num-com">0000002</td>
                        <td id="t-date">10/10/2021</td>
                        <td id="t-montant">159,99$</td>
                        <td id="t-mode-paiement">Maestro</td>
                        <td id="t-etat">Livré</td>
                        <td id="t-details"><input class="" type="button" value="+"></td>
                    </tr>
                    <tr id="tr3">
                        <td id="t-num-com">0000003</td>
                        <td id="t-date">10/10/2021</td>
                        <td id="t-montant">159,99$</td>
                        <td id="t-mode-paiement">Maestro</td>
                        <td id="t-etat">Livré</td>
                        <td id="t-details"><input class="" type="button" value="+"></td>
                    </tr>
                </table>
                <div id="bt-tt-afficher">
                    <form action="commande.html">
                        <input id="tt_afficher" type="submit" value="Tout afficher">
                    </form>
                </div>
            </div>
            <div class="boutons_ducompte">
                <form action="compte.php">
                    <input id="bt_compte" type="submit" value="Compte">
                </form>
                <form action="securite.php">
                    <input id="bt_sécurité" type="submit" value="Sécurité">
                </form>
                <form action="retours.php">
                    <input id="bt_retours" type="submit" value="Mes retours">
                </form>
                <form action="retours_article.php">
                    <input id="bt_retour_article" type="submit" value="Retourner des articles">
                </form>
                <form action="liste_des_souhaits.php">
                    <input id="bt_souhaits" type="submit" value="Liste des souhaits">
                </form>
                <form action="code_promo.php">
                    <input id="bt_promo" type="submit" value="Code promo">
                </form>
                <form action="../index.php">
                    <input id="bt_deconnexion" type="submit" value="Se déconnecter">
                </form>
            </div>
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo</div>
    </body>
</html>