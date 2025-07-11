<head>
  <link rel="stylesheet" href="stile.css">
</head>

<?php include 'header2.php'; ?>

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

<?php include 'footer.php'; ?>
