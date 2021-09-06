<?php
session_start();
include_once 'databaseConnect.php';

function loopUsers ($login, $wachtwoord) {

    global $opvragenUsers;
    global $db;
    $query = "SELECT * FROM users WHERE login=:login AND wachtwoord=:wachtwoord";

    $prepstatement = $db->prepare($query);
    $prepstatement->bindParam(':login', $login);
    $prepstatement->bindParam(':wachtwoord', $wachtwoord);
    $prepstatement->execute();

    while ($opvragenUsers = $prepstatement->fetch()) {
        if ($opvragenUsers["login"] == $login && $opvragenUsers["wachtwoord"]== $wachtwoord) {
            $_SESSION["id"] = $_POST["login"];
            header("location: sollicitantenOverview.php");
            exit();
        } else {
            echo "fout";
        }

    }
}


if (isset($_POST["login"]) && (isset($_POST["wachtwoord"]))) {
    $_SESSION["login"]= $_POST["login"];
    $login = $_POST["login"];
    $wachtwoord = $_POST["wachtwoord"];
    loopUsers($login, $wachtwoord);
}