<?php

session_start();

if (isset($_POST['E_mail'], $_POST['Mot_de_passe'])) {
    $E_mail = $_POST['E_mail'];
    $Mot_de_passe = $_POST['Mot_de_passe'];

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=4tt_junior', 'junior', 'junior5');
        foreach($dbh->query("SELECT * from goofu where E_mail='$E_mail'") as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    if ($row->rowCount() > 0) {
        $data = $result->fetch();

        if (password_verify($Mot_de_passe, $data['Mot_de_passe'])) {
            $_SESSION['E_mail'] = $E_mail;
            echo "Connexion effectuée";
        }
    } else {
        echo "Connexion impossible...";
    }
} else {
    echo "données non complétées !";
}
?>