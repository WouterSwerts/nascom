<?php
include 'formCode.php';
?>
<div class="container">
    <div class="heading">
        <h2>Solliciteer nu!</h2>
    </div>
    <div class="inputfield">
        <form method="post" class="form">
            <label for="naamInput">Naam</label>
            <input type="text" name="naamInput">
            <label for="voornaamInput">Voornaam</label>
            <input type="text" name="voornaamInput">
            <label for="functieInput">Functie</label>
            <input type="text" name="functieInput">
            <label for="motivatieInput">Motivatiebericht</label>
            <textarea name="motivatieInput">Je motivatie hier</textarea>
            <label for="cvInput">Upload je CV</label>
            <input type="file" name="cvInput">
            <input type="submit" value="solliciteer!" class="button">
        </form>

    </div>

</div>
