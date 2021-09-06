<?php
include_once 'loginCode.php';

?>

<div class="header">
    <div class="loginForm">
        <form method="post" class="form">
            <label for="login">Login</label>
            <input type="text" name="login">
            <label for="wachtwoord">Wachtwoord</label>
            <input type="password" name="wachtwoord">
            <input type="submit" value="Go!" class="button">
        </form>
    </div>
    <a href="logout.php">logout</a>
</div>

