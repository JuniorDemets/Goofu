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
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/category.css">
        <script src="ajouter_panier.js"></script> 
        <title>Ordinateurs</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../index.php"><img class="logo" src="../../images/logo.png" alt="logo"></a>
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
        <div class="choix_msi">
            <img class="photo_msi" src="../../images/category/pc_msi.jpg" alt="Image1">
            <h2 id="affichage_prix_1">4999€</h2>
            <p id="description_msi_1_head">MSI MAG Codex X5</p>
            <p id="description_msi_1">Le MSI MAG Codex X5 11-463MYS est un PC gamer puissant qui vous permet de jouer aux jeux actuels et futurs avec des paramètres ultra. 
            Grâce à la carte graphique NVIDIA GeForce RTX 3090, vous pourrez atteindre des fréquences d'images élevées dans des jeux exigeants tels que Cyberpunk 2077 et Elden Ring. </p>
            <form action="../details_objets/ordinateurs/details_msi_codex.php" >
                <input class="msi_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_acer">
            <img class="photo_acer" src="../../images/category/pc_acer.jpg" alt="pc acer">
            <h2 id="affichage_prix_1">1129€</h2>
            <p id="description_acer_1_head">Acer Predator Orion 3000 </p>
            <p id="description_acer_1">L'Acer Predator Orion 3000 630 I511-02GA vous permet de jouer à des jeux 
                                      comme Call of Duty avec les paramètres les plus 
                                      élevés et à 60 images par seconde. 
                                      La carte graphique NVIDIA GeForce GTX 1660 Super est assez puissante pour ce type d'activité. 
                                      Pendant ce temps, chattez avec vos amis via Discord. 
                                      La mémoire vive de 16 Go vous permet de le faire sans problème. 
                                      Sauvegardez vos jeux préférés sur le SSD de 512 Go ;
                                      ils démarrent ainsi en quelques secondes et vous rejoignez la partie en un rien de temps. </p>
            <form action="../details_objets/ordinateurs/details_acer_pred.php" >
                <input class="acer_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_legion">
            <img class="photo_oneplus" src="../../images/category/pc_legion.avif" alt="Image2">
            <h2 id="affichage_prix_1">1299€</h2>
            <p id="description_legion_1_head">Lenovo Legion T5 26AMR5 </p>
            <p id="description_legion_1">Jouez aux derniers jeux vidéos à des paramètres élevés avec le Lenovo Legion T5 26AMR5 90RC00LTMH. 
                                    La carte graphique NVIDIA GeForce RTX 3060 est suffisamment puissante pour ça. 
                                    La carte graphique convient aussi à la VR, branchez donc un casque VR et jouez à votre jeu vidéo favori en réalité virtuelle. 
                                    Jouez pendant que vous discutez avec vos amis sur Discord grâce aux 16 Go de mémoire vive.
                                    Installez vos jeux préférés sur le SSD de 512 Go pour qu'ils démarrent rapidement.  </p>
            <form action="../details_objets/ordinateurs/details_lenovo_legion.php" >
                <input class="legion_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_rog">
            <img class="photo_rog" src="../../images/category/pc_asuz.jpg" alt="rog">
            <h2 id="affichage_prix_1">1499€</h2>
            <p id="description_rog_1_head">ASUS ROG STRIX G17</p>
            <p id="description_rog_1">Le PC Portable Gaming ASUS ROG STRIX G17 vous permettra de jouer dans les meilleures conditions à vos jeux PC favoris grâce à des composants ultra-performants,
                                    <br> 
                                    un écran 144 Hz et une conception haut de gamme qui ne laisse rien au hasard.</p>
            <form action="../details_objets/ordinateurs/details_asuz_rog.php" >
                <input class="rog_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <!-- boite pc asuz (présentation) +  bouton pour voir le pc asuz -->
        <div class="choix_hp">
            <img class="photo_hp" src="../../images/category/pc_hp.jpg" alt="HP">
            <h2 id="affichage_prix_1">1299€</h2>
            <p id="description_hp_1_head">HP Pavilion Gaming TG01-2960nd</p>
            <p id="description_hp_1">Jouez aux jeux vidéo les plus récents comme Cyberpunk 2077 aux paramètres 
                                       les plus élevés sur le HP Pavillon Gaming TG01-2960nd. 
                                       La carte graphique NVIDIA RTX 3060Ti est suffisamment puissante pour ça. 
                                       Grâce à cette nouvelle génération de carte graphique, 
                                       vous pourrez même jouer en 4K avec un nombre élevé d'images par seconde.</p>
            <form action="../details_objets/ordinateurs/details_hp_pavilion.php" >
                <input class="hp_1" type="submit" value="Détails">
            </form>
            <form action="ajouter_panier2.php" >
                <input class="bouton__panier_1" type="submit" value="+">
            </form>
        </div>
        <!-- Fin boite un -->
        <div class="signature">Standaert-De Clercq Simon  et Demets Junior </div>
    </body>
</html>

