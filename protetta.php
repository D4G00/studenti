<head>
<link rel="stylesheet" href="stile.css">

<style>

h2{
text-align: center;
}

</style>

</head>

<?php include 'header.php'; ?>

<?php
require_once 'utente.php';

if (!Utente::autenticato()) {
    header("Location: http://localhost/studenti/login.php");
    exit;
}

?>
<h2>Benvenuto, sei autenticato!</h2>

<?php include 'footer.php'; ?>
