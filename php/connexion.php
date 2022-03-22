<?php

session_start();

if (isset($_POST['E_mail'], $_POST['Mot_de_passe'])) {
    $E_mail = $_POST['E_mail'];
    $Mot_de_passe = $_POST['Mot_de_passe'];

    $db = new PDO('mysql:host=localhost;dbname=4tt_junior', 'junior', 'junior5');

    // $sql = "SELECT 'E_mail' && 'Mot_de_passe' FROM goofu where E_mail = ?";
    $sql = "SELECT * FROM goofu where E_mail = ?";
    $result = $db->prepare($sql);
    $result->execute($E_mail);

    if ($result->rowCount() > 0) {
        $data = $result->fetch();

        if (password_verify($Mot_de_passe, $data['Mot_de_passe'])) {
            $_SESSION['E_mail'] = $E_mail;
            echo "Connexion effectuée";
        }
    } else {
        echo "Connexion impossible...";
    }
}
?>