<?php
require_once 'Utente.php';

if (!utente::autenticato()) {
    header("Location: login.php");
    exit;
}
?>
<h2>Benvenuto, sei autenticato!</h2>
<a href="logout.php">Logout</a>
