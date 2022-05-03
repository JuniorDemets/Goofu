<?php>
//  Cookies pour la connexion sur tout le site
    $E_mail = $_POST['E_mail'];
    setcookie("Cookie", $E_mail, time()+3600000000000000000000000000000000000000000000000000000000000000000000000000000000000000);
    if (isset($_COOKIE["Cookie"])){ 
        echo 'Le cookie existe ' . $_COOKIE["Cookie"] . '!<br />';
    }else
        echo 'Le cookie n\'existe pas <br />';
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/achat.css">
        <title>Finaliser l'achat</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="index.php"><img class="logo" src="../images/logo.png" alt="logo"></a>
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
        <!--Boite qui contient tout-->
        <div class="box">
            <img class="image_produit" src="https://via.placeholder.com/140x100" alt="logo">
            <h2 id="nom_article">Votre commande :</h2>
        </div>
        <div id="box-principal">
            <div id="promo">
                <p id="txt">Code promo:</p>
                <input class="input-code" placeholder="Votre code promotionnel...">
            </div>
            <div id="prix">
                <p class="prix">Prix d'achat</p>
            </div>
            <div id="mode-paiement">
                <p id="title"> Choix de la méthode de paiement </p>
                <form action="panier.php">
                    <input class="bancontact" type="submit" value="Bancontact">
                </form>
                <form action="connexion.php" target="_blank">
                    <input class="carte-credit" type="submit" value="Carte de crédit">
                </form>
                <form action="compte/compte.php" target="_blank">
                    <input class="belfius" type="submit" value="Belfius">
                </form> 
                <form action="panier.php">
                    <input class="cbc" type="submit" value="CBC">
                </form>
                <form action="connexion.php" target="_blank">
                    <input class="virement" type="submit" value="Virement banquaire">
                </form>
            </div>
            <form action="connexion.php">
                <input class="valider" type="submit" value="Valider la commande">
            </form>
            <form action="../php/recup_com.php" method="POST">
                <textarea cols="100" rows="10" id="commentaire" name="Commentaire" placeholder="Votre commentaire!!"></textarea>
                <input id="bt-commentaire" type="submit" value="Envoyer">
            </form>
        </div>
    </body>
</HTML>