<?php
 include_once 'databaseConnect.php';

 if (isset($_POST['naamInput']) && isset($_POST['voornaamInput'])){
     $query = "INSERT INTO jobs (naam, voornaam, functie, motivatie, cv) VALUES (:naam, :voornaam, :functie, :motivatie, :cv);";

     $naamInput = $_POST["naamInput"];
     $voornaamInput = $_POST["voornaamInput"];
     $functieInput = $_POST["functieInput"];
     $motivatieInput = $_POST["motivatieInput"];
     $cvInput = $_POST["cvInput"];



     $prepstatement = $db->prepare($query);
     $prepstatement->bindParam(':naam', $naamInput);
     $prepstatement->bindParam(':voornaam', $voornaamInput);
     $prepstatement->bindParam(':functie', $functieInput);
     $prepstatement->bindParam(':motivatie', $motivatieInput);
     $prepstatement->bindParam(':cv', $cvInput);

     $prepstatement->execute();


     $db->query($query);


 };