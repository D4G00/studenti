<?php
require_once 'utente.php';
$connessione = new ConnessioneDB();
$utente = new Utente($connessione);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($utente->registra($_POST['username'], $_POST['password'])) {
        echo "Registrazione completata. <a href='login.php'>Accedi</a>";
    } else {
        echo "Errore nella registrazione.";
    }
}
?>

<form method="POST">

<h1>REGISTRAZIONE UTENTE</h1>

    Nome Utente:<input type="name" name="username">
    Password:<input type="password" name="password" required placeholder="Password">
    <input type="submit" name="Invia">
    <input type="reset" name="Reset">


</form>
