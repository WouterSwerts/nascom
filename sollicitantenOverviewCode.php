<?php
include_once 'databaseConnect.php';




function getSollicitanten() {
    global $db;
    $query = "SELECT * FROM nascom.jobs;";

    $sollicitanten =$db->query($query);

    while ($sollicitant = $sollicitanten->fetch()) {
        echo "    <tr>
                    <th>".$sollicitant["id"]."</th>
                    <th>".$sollicitant["naam"]."</th>
                    <th>".$sollicitant["voornaam"]."</th>
                    <th>".$sollicitant["functie"]."</th>
                    <th>".$sollicitant["motivatie"]."</th>
                    <th>".$sollicitant["cv"]."</th>
                   </tr>";
    }




}


