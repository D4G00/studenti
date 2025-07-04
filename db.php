<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'studenti_db';

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connessione fallita: " . $mysqli->connect_error);
}
?>
