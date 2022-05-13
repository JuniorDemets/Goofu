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
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/category.css">
        <script src="ajouter_panier.js"></script> 
        <title>Ordinateurs</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../index.php"><img class="logo" src="../../images/index/logo.jpg" alt="logo" title="logo"></a>
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
            <form action="ordinateurs.php">
                <input class="ordinateur" type="submit" value="Ordinateurs">
            </form>
            <form action="telephones.php">
                <input class="telephone" type="submit" value="Téléphones">
            </form>
            <form action="vr.php">
                <input class="realite_virtuelle" type="submit" value="Réalite Virtuelle">
            </form>
            <form action="console.php">
                <input class="console" type="submit" value="Consoles">
            </form>
            <form action="giftcard.php">
                <input class="cartes_cadeau" type="submit" value="Cartes Cadeau">
            </form>
        </div>
        <!-- boite pc msi (présentation) +  bouton pour voir le pc msi -->
        <div class="choix_msi_codex">
            <img class="photo_category" src="../../images/category/pc_msi.jpg" alt="Image1" title="images1">
            <h2 id="affichage_prix_1">4999€</h2>
            <p id="description_category_1_head">MSI MAG Codex X5</p>
            <p id="description_category_1">Le MSI MAG Codex X5 11-463MYS est un PC gamer puissant qui vous permet de jouer aux jeux actuels et futurs avec des paramètres ultra. </p>
            <form action="../details_objets/ordinateurs/details_msi_codex.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc acer (présentation) +  bouton pour voir le pc acer -->
        <div class="choix_acer_pred">
            <img class="photo_category" src="../../images/category/pc_acer.jpg" alt="pc acer" title="PC Acer">
            <h2 id="affichage_prix_1">1129€</h2>
            <p id="description_category_1_head">Acer Predator Orion 3000 </p>
            <p id="description_category_1">L'Acer Predator Orion 3000 630 I511-02GA vous permet de jouer à des jeux 
                                      comme Call of Duty avec les paramètres les plus 
                                      élevés et à 60 images par seconde.  </p>
            <form action="../details_objets/ordinateurs/details_acer_pred.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc lenovo (présentation) +  bouton pour voir le pc lenovo-->
        <div class="choix_lenovo_legion">
            <img class="photo_category" src="../../images/category/pc_legion.avif" alt="Image2" title="Image 2">
            <h2 id="affichage_prix_1">1299€</h2>
            <p id="description_category_1_head">Lenovo Legion T5 26AMR5 </p>
            <p id="description_category_1">Jouez aux derniers jeux vidéos à des paramètres élevés avec le Lenovo Legion T5 26AMR5 90RC00LTMH.  </p>
            <form action="../details_objets/ordinateurs/details_lenovo_legion.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_asus_rog">
            <img class="photo_category" src="../../images/category/pc_asuz.jpg" alt="rog" title="Rog">
            <h2 id="affichage_prix_1">1499€</h2>
            <p id="description_category_1_head">ASUS ROG STRIX G17</p>
            <p id="description_category_1">Le PC Portable Gaming ASUS ROG STRIX G17 vous permettra de jouer dans les meilleures conditions à vos jeux PC favoris grâce à des composants ultra-performants ! </p>
            <form action="../details_objets/ordinateurs/details_asuz_rog.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc hp (présentation) +  bouton pour voir le pc hp -->
        <div class="choix_hp_pavillion">
            <img class="photo_category" src="../../images/category/pc_hp.jpg" alt="HP" title="HP">
            <h2 id="affichage_prix_1">1299€</h2>
            <p id="description_category_1_head">HP Pavilion Gaming TG01-2960nd</p>
            <p id="description_category_1">Jouez aux jeux vidéo les plus récents comme Cyberpunk 2077 aux paramètres 
                                       les plus élevés sur le HP Pavillon Gaming TG01-2960nd. </p>
            <form action="../details_objets/ordinateurs/details_hp_pavilion.php" >
                <input class="produit_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo</div>
    </body>
</html>

