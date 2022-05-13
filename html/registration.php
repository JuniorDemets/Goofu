<!DOCTYPE HTML>
<HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Registration </title>
        <link rel="stylesheet" type="text/css" href="../css/style_registre.css">
        <link type="text/javascript" href="../javascript/vérif_mdp_mail.js">
    </head>
    <body>
        <form action="../php/inscription.php" name="login" method="POST">
            <div id="form">
        
                <img src="../images/image_connexion.jpg" class="img_co" alt="Icône de connexion." title="Icone de connnexion">

                <h1> Inscription </h1>
                <label><br /> Nom </label>

                <input class="Nom" type="text" name="Nom" placeholder="Votre prénom" autocomplete="off">

                <label> Prénom </label>

                <input class="Prenom" type="text" name="Prenom" placeholder="Votre prénom" autocomplete="off">

                <select name="Genre" class="gender">
                    <option value=""> Votre genre </option>
                    <option value="Femme"> Femme </option>
                    <option value="Homme"> Homme </option>
                    <option value="Non-binaire"> Non-binaire </option>
                </select>

                <label><br /><br /> E-mail </label>

                <input class="mail" type="text" name="E_mail" placeholder="Your E-mail" autocomplete="off">

                <label> Mot de passe </label>

                <input class="mdp" type="password" name="Mot_de_passe" placeholder="Votre mot de passe" autocomplete="off">

                <input class="button" type=submit value="Inscription">

                <a href="connexion.php"><p class="connexion">Connexion</p></a>
            </div>
        </form>
    </body>
</HTML>