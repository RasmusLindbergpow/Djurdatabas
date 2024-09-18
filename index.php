<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djur</title>
</head>

<body>
    <form action="index.php" method="post">

        <label for="name">Djurets namn</label><br>
        <input type="text" id="name" name="name"></input><br>

        <label for="sound">Ljud</label><br>
        <input type="text" id="sound" name="sound"></input><br>

        <label for="age">Ålder</label><br>
        <input type="text" id="age" name="age"></input><br>

        <label for="species">Välj djur</label><br>
        <select name="species" id="species">
            <option value="cat">Katt</option>
            <option value="dog">Hund</option>
            <option value="bird">Fågel</option>
        </select>
        <br>
        <input type="submit" value="submit">

    </form>

    <form method="post" action="logout.php">

        <input type="submit" value="logout">

    </form>

</body>

</html>


<?php
require_once("animal.php");
session_start();

$djur = new Animal($_POST['name'], $_POST['sound'], $_POST['age'], $_POST['species']);
$_SESSION['animal'][] = serialize($djur);

if (isset($_SESSION['animal'])) {
    foreach ($_SESSION['animal'] as $djurdata) {
        $djur = unserialize($djurdata);
        echo $djur->getDetails() . "<br>";
    }
}


?>