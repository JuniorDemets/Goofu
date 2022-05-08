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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/style_compte.css">
        <title>Commandes</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../index.php" class="lien_logo"><img class="logo" src="../../images/logo.png" alt="logo"></a>
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
        <!--Titre-->
        <div>
            <p id="titre-com">Historique des commandes:</p>
        </div>
        <!--Tableau des commandes-->
        <div>
            <table id="tableau-com1">
                <tr id="titre-t">
                    <td id="titre-t1">N° de commande</td>
                    <td id="titre-t1">Date</td>
                    <td id="titre-t1">Montant</td>
                    <td id="titre-t1">Mode de paiement</td>
                    <td id="titre-t1">Etat de livraison</td>
                    <td id="titre-t1">Détails</td>
                </tr>
                <tr id="tr1">
                    <td id="t-num-com1">0000001</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr2">
                    <td id="t-num-com1">0000002</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000003</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000004</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000005</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000006</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000007</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000008</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000009</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000010</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000011</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000012</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000013</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000014</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000015</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000016</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000017</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000018</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000019</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
                <tr id="tr3">
                    <td id="t-num-com1">0000020</td>
                    <td id="t-date1">10/10/2021</td>
                    <td id="t-montant1">159,99$</td>
                    <td id="t-mode-paiement1">Maestro</td>
                    <td id="t-etat1">Livré</td>
                    <td id="t-details1"><input class="" type="button" value="+"></td>
                </tr>
            </table>
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Ugo Koch </div>
    </body>
</html>