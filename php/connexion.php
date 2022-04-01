<?php

session_start();

if (isset($_POST['E_mail'], $_POST['Mot_de_passe'])) {
    $E_mail = $_POST['E_mail'];
    $Mot_de_passe = $_POST['Mot_de_passe'];
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=4tt_junior', 'junior', 'junior5');
        foreach($dbh->query("SELECT * from goofu where E_mail='$E_mail'") as $row) {
            header("Location:../html/index.html");
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
?>