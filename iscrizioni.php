<?php
require_once 'db.php';
$db = new ConnessioneDB();
$mysqli = $db->getConn();  


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idstudente = $_POST['studente'];
    $idmateria = $_POST['materia'];

    $sql = "INSERT INTO iscrizioni (idstudente, idmateria) VALUES ($idstudente, $idmateria)";

    if ($mysqli->query($sql) === TRUE) {
        echo "<p>Iscrizione avvenuta con successo.</p>";
    } else {
        echo "<p>Errore nell'iscrizione: " . $mysqli->error . "</p>";
    }
}

$studenti = $mysqli->query("SELECT idstudente, nome FROM studenti");

$materie = $mysqli->query("SELECT idmateria, nome FROM materie");

$iscrizioni = $mysqli->query("
    SELECT s.nome AS nome_studente, m.nome AS nome_materia
    FROM iscrizioni i
    JOIN studenti s ON i.idstudente = s.idstudente
    JOIN materie m ON i.idmateria = m.idmateria
");
?>

<head>
<link rel="stylesheet" href="stile.css">
</head>

<?php include 'header.php'; ?>

<body>
<h3>Iscrivi uno studente a una materia</h3>
<form method="POST">
    <label>Studente:</label>
    <select name="studente">
        <?php while ($s = $studenti->fetch_assoc()): ?>
            <option value="<?= $s['idstudente'] ?>"><?= $s['nome'] ?></option>
        <?php endwhile; ?>
    </select>

    <label>Materia:</label>
    <select name="materia">
        <?php while ($m = $materie->fetch_assoc()): ?>
            <option value="<?= $m['idmateria'] ?>"><?= $m['nome'] ?></option>
        <?php endwhile; ?>
    </select>

    <button type="submit">Iscrivi</button>
</form>

<h3>Elenco iscrizioni</h3>
<ul>
    <?php while ($i = $iscrizioni->fetch_assoc()): ?>
        <li><?= $i['nome_studente'] ?> → <?= $i['nome_materia'] ?></li>
    <?php endwhile; ?>
</ul>

    </body>

<?php include 'footer.php'; ?>




