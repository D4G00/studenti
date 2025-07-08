<?php
require_once 'utente.php';
$connessione = new ConnessioneDB();
$utente = new utente($connessione);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($utente->login($_POST['username'], $_POST['password'])) {
        header("Location: protetta.php");
        exit;
    } else {
        echo "Login fallito.";
    }
}
?>

<form method="POST" action="utente.php">

    Username:<input type="name" name="username">
    password:<input type="password" name="password">

    <input type="submit" name="login">
    <input type="reset" name="Reset">

</form>
