<?php
include 'sollicitantenOverviewCode.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sollicitanten overzicht</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include 'header.php';
if (!isset($_SESSION["id"])) {
    header("location: index.php");
}
?>

<h1>Sollicitanten overzicht</h1>


<table>
    <tr>
        <th>#</th>
        <th>Naam</th>
        <th>Voornaam</th>
        <th>Functie</th>
        <th>Motivatie</th>
        <th>CV</th>
    </tr>

    <?php getSollicitanten(); ?>

</table>



</body>
</html>


