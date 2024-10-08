<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djur</title>   <!--- sätter titlen till djur-->
    <link rel="stylesheet" href="style.css"> <!-- synkar css med html-->
</head>

<body>

    <form action="index.php" method="post">

        <label for="name">Djurets namn</label><br> 
        <input type="text" id="name" name="name"></input><br> <!-- skriver formel med namn ljud, åldet och villken art-->

        <label for="sound">Ljud</label><br>
        <input type="text" id="sound" name="sound"></input><br>

        <label for="age">Ålder</label><br>
        <input type="text" id="age" name="age"></input><br>

        <label for="species">Välj djur</label><br>
        <select name="species" id="species">
            <option value="Katt">Katt</option>
            <option value="Hund">Hund</option>
            <option value="Fågel">Fågel</option>
        </select>
        <br>
        <input type="submit" id="submit" value="submit"> <!-- gör en knapp till formlen -->

    </form>

    <form method="post" action="logout.php">

        <input type="submit" id="logout" value="logout">

    </form>

</body>

</html>


<?php
require_once("animal.php"); 
require_once("dog.php");
require_once("cat.php");
session_start();

if(isset($_POST["name"])){
    if($_POST["species"] !== "" && $_POST["name"] !== "" && $_POST["sound"] !== "" && $_POST["age"] !== "") {
        if($_POST["species"] == "Hund") {
            $djur = new Dog($_POST['name'], $_POST['sound'], $_POST['age'], $_POST['species']);
        } elseif($_POST["species"]=="Katt") {
            $djur = new Cat($_POST['name'], $_POST['sound'], $_POST['age'], $_POST['species']);
        } else {
            $djur = new Animal($_POST['name'], $_POST['sound'], $_POST['age'], $_POST['species']);

        }
        
        $_SESSION['animal'][] = serialize($djur);
    } else {
        echo "<p>Du måste skriva i alla rutorna</p>";
    }
}

if (isset($_SESSION['animal'])) {
    foreach ($_SESSION['animal'] as $djurdata) {
        $djur = unserialize($djurdata);
        echo $djur->getDetails() . "<br>";
    }
}


?>