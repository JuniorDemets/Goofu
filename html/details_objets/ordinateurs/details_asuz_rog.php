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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../../css/details.css">
        <script src="ajouter_panier.js"></script> 
        <title>Asuz Rog</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../index.php"><img class="logo" src="../../../images/index/logo.jpg" alt="logo"></a>
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
                <img src="../../../images/category/pc_asuz.jpg" class="produit_image" alt="pc asuz">
            </div>
            <div class="titre_description">
                <h2 class="details">ASUS ROG STRIX G17 :</h2>
                <p class="description_complete">
                    Le PC Portable Gaming ASUS ROG STRIX G17 vous permettra de jouer dans les meilleures conditions à vos jeux PC favoris grâce à des composants ultra-performants, 
                    <br>
                    un écran 144 Hz et une conception haut de gamme qui ne laisse rien au hasard. Le PC portable Gamer ASUS ROG STRIX G17 G713IM-HX055 offre de hautes performances grâce à son processeur AMD Ryzen 7 4800H, 
                    <br>
                    ses 16 Go de mémoire DDR4, son SSD M.2 PCIe de 512 Go et sa puce graphique NVIDIA GeForce RTX 3060.
                    <br>
                    En plus de ses composants ultra-performants nouvelle génération, le ROG Strix G17 bénéficie d'un superbe design. 
                    <br>
                    Avec son processeur AMD Ryzen 7 4800H et sa puce graphique GeForce RTX série 3000, 
                    <br>
                    ce PC portable ASUS se montrera capable de vous hisser au plus près des joueurs professionnels.
                    <br>
                    Avec cet ordinateur portable de jeu aux vitesses d'affichage ultrarapides, mettez vous dans la peau d'un professionnel de l'eSport ! 
                    <br>
                    La dalle de 144 Hz / 3 ms permet de jouer aux meilleurs jeux FPS du moment afin que vous soyez toujours au meilleur niveau, prêt à côtoyer l'élite.
                
                
                </p>
                </div>
            </div>
            <div class="prix_panier">
                <p class="prix">1499€</p>
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
            <!--Commentaires sur l'article + wishlist-->
            <form action="../../php/recup_com.php" method="POST">
                <textarea class="ajouter_commentaire" name="Commentaire"
                rows="5" cols="33" placeholder="Ajoutez un commentaire..."></textarea>
            <form action="....">
                <input class="ajouter_liste_souhaits" type="submit" value="Ajouter à la Liste des Souhaits">
            </form>
            <!--Bouton-->
                <input class="bt_send_com" type="submit" value="Envoyer">
            </form>   
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo</div>         
    </body>
</html>