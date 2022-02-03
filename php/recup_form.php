<?php
    $serveur = "localhost";
    $dbname = "4tt_junior";
    $user = "junior";
    $pass = "junior5";
    
    $Nom = $_POST["Nom"];
    $Prenom = $_POST["Prenom"];
    $Genre = $_POST["Genre"];
    $E_mail = $_POST["E_mail"];
    $Mot_de_passe = md5($_POST["Mot_de_passe"]);

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco -> prepare("INSERT INTO goofu(Nom, Prenom, Genre, E_mail, Mot_de_passe)
        VALUES ('$Nom', '$Prenom', '$Genre', '$E_mail', '$Mot_de_passe')");
        $sth->bindParam(':Nom',$Nom);
        $sth->bindParam(':Prenom',$Prenom);
        $sth->bindParam(':Genre',$Genre);
        $sth->bindParam(':E_mail',$E_mail);
        $sth->bindParam(':Mot_de_passe',$Mot_de_passe);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header('Location: ../html/merci.html');
		die;
    }
    catch(PDOException $e){
        echo 'Unable to process the data. Error : '.$e->getMessage();
    }
?>