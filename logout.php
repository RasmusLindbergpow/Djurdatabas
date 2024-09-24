<?php
session_start();  /* Startar en session.*/


session_destroy();   /* förstör alla session data- (loggar ut användaren)*/
header("Location: index.php"); /* omleder användaren till index.php sidan*/

exit(); /*stoppar ytterligare körning av skriptet*/
?>