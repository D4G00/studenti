
<?php
require_once 'header.php'; 
require_once 'db.php';     
?>

<head>
  <link rel="stylesheet" href="stile.css">
</head>

<body>
<?php

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];

echo "<h3>Nuovo studente</h3><br>Nome: $nome <br>Cognome: $cognome <br>Email: $email<br><br><br>";


$db = new ConnessioneDB();
$conn = $db->getConn();


$query = "INSERT INTO studenti (nome, cognome, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query);
if ($stmt) {
    $stmt->bind_param("sss", $nome, $cognome, $email);
    if ($stmt->execute()) {
        echo "<br>Record inserito correttamente.<br><br>";
    } else {
        echo "<br>Errore durante l'inserimento: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "<br>Errore nella preparazione della query: " . $conn->error;
}


echo "<h3>Elenco studenti</h3>";

$result = $conn->query("SELECT nome FROM studenti");
if ($result && $result->num_rows > 0):
?>
    <ul>
    <?php while ($r = $result->fetch_assoc()): ?>
        <li><?= htmlspecialchars($r['nome']) ?></li>
    <?php endwhile; ?>
    </ul>
<?php
else:
    echo "<p>Nessuno studente trovato.</p>";
endif;

$conn->close();
?>
</body>

<?php include 'footer.php'; ?>
