<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djur</title>
</head>
<body>
    <form>
<label for="ljud">ljud</label><br>
<input type="text" id="ljud" name="ljud"></input><br>
<label for="djurnamn">djurens namn</label><br>
<input type="text" id="namn" name="djurnamn"></input><br>
<label for="age">age</label><br>
<input type="text" id="age" name="age"></input><br>
<label for="djur">välj djur</lanel><br>
<select name="djur" id="villket djur">
<option value="katt">katt</option>




</form>
    
</body>
</html>


<?php
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