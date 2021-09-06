<?php
include_once 'loginCode.php';

?>

<div class="header">
    <?php
    if (isset($_SESSION["id"])) {
        echo '<a href="logout.php">logout</a>';
    } else {
        echo '<div class="loginForm">
        <form method="post" class="form">
            <label for="login">Login:</label>
            <input type="text" name="login">
            <label for="wachtwoord">Wachtwoord:</label>
            <input type="password" name="wachtwoord">
            <input type="submit" value="Go!" class="button">
        </form>
    </div>';
    }

    ?>
</div>

