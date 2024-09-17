<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djur</title>
</head>
<body>
    <form action="index.php" method="post">
<label for="ljud">ljud</label><br>
<input type="text" id="ljud" name="ljud"></input><br>
<label for="namn">djurets namn</label><br>
<input type="text" id="namn" name="namn"></input><br>
<label for="ålder">ålder</label><br>
<input type="text" id="ålder" name="ålder"></input><br>
<label for="djur">välj djur</lanel><br>
<select name="djur" id="villketDjur">
<option value="katt">katt</option>
<option value="hund">hund</option>
<option value="fågel">fågel</option>
</select>
<br>
<input type="submit" value="submit">



</form>
    
</body>
</html>


<?php
require_once("djur.php");
session_start();

if (isset($_SESSION['djur'])) {
    foreach ($_SESSION['djur'] as $djurdata) {
        $djur = unserialize($djurdata);
        echo $djur->getDetails() . "<br>";
    }
}


$djur = new Djur($_POST['namn'], $_POST['ljud'], $_POST['ålder']);
$_SESSION['djur'][] = serialize($djur);
?>