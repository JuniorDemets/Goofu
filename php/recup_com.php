<?php
    $serveur = "localhost";
    $dbname = "4tt_junior";
    $user = "junior";
    $pass = "junior5";
    
    $Commentaire = $_POST["Commentaire"];

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco -> prepare("INSERT INTO Commentaire(Commentaire)
        VALUES ('$Commentaire')");
        $sth->bindParam(':Commentaire',$Commentaire);
        $sth->execute();
    }
    catch(PDOException $e){
        echo 'Unable to process the data. Error : '.$e->getMessage();
    }
?>