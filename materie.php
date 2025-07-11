<?php
require_once 'db.php';
include 'header.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<head>
  <link rel="stylesheet" href="stile.css">
</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    $db = new ConnessioneDB();
    $conn = $db->getConn();

    echo "Nome materia: " . htmlspecialchars($nome) . "<br><br>";

    $stmt = $conn->prepare("INSERT INTO materie (nome) VALUES (?)");

    if ($stmt) {
        $stmt->bind_param("s", $nome);
        if ($stmt->execute()) {
            echo "Record inserito correttamente.<br><br>";
        } else {
            echo "Errore nell'inserimento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Errore nella preparazione della query.";
    }

    echo "<h4>Materie disponibili</h4><br>";
    $result = $conn->query("SELECT * FROM materie");

    if ($result && $result->num_rows > 0) {
        echo "<ul>";
        while ($r = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($r['nome']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nessuna materia trovata.";
    }

    $conn->close();
} else {
    echo "Nessun dato ricevuto.";
}
?>

</body>

<?php include 'footer.php'; ?>
