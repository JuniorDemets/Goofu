<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style_registre.css" type="text/css">
        <title> Connexion </title>
    </head>
    <body>
        <form action="../php/connexion.php" name="login" method="POST">
            <div id="form_connexion">
        
                <img src="../images/image_connexion.jpg" class="img_co" alt="Icône de connexion." title="Icône de connexion">

                <h1> Connexion </h1>

                <label><br /><br /> E-mail </label>

                <input class="mail" type="text" name="E_mail" placeholder="Your E-mail" autocomplete="off">

                <label> Mot de passe </label>

                <input class="mdp" type="password" name="Mot_de_passe" placeholder="Votre mot de passe" autocomplete="off">

                <input class="button" type=submit name="envoi" value="Connexion">

                <a class="link_co" href="mdp_oublie.php" id="mdp_oublier"><p>Mot de passe oublié</p></a>

                <a class="link_co" href="registration.php"><p  id="lien_inscription"> Inscription </p></a>
            </div>
        </form>
    </body>
</html>
