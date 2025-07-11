<?php
require_once 'utente.php';
if (!Utente::autenticato()) {
    header("Location: login.php");
    exit;
}
?>

<header class="header-container">
    <h2>Servizio Registrazioni Scolastiche</h2>
    <nav>
      <ul>
        <li><a href="http://localhost/studenti/homeex1.php">Home</a></li>
        <li><a href="http://localhost/studenti/inserimentomaterie.php">Registra materia</a></li>
        <li><a href="http://localhost/studenti/inserimentostudenti.php">Registra studente</a></li>
        <li><a href="http://localhost/studenti/iscrizioni.php">Iscrivi studente</a></li>
        <li><a href="https://www.mim.gov.it/">MIUR</a></li>
        <li><a href="http://localhost/studenti/logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>