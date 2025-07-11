
<head>
  <link rel="stylesheet" href="stile.css">
</head>

<?php include 'header2.php'; ?>


<body>

<?php
require_once 'utente.php';
$connessione = new ConnessioneDB();
$utente = new utente($connessione);

 $username = $_POST['username'];
 $password = $_POST['password'];


  if (isset($_POST['username']) && $_POST['username'] == ''){       
  echo "Dati mancanti.<br>Se non hai un account" . '<a href="http://localhost/studenti/registrazione.php">Registrati.</a>'; 
}
  else if (isset($_POST['password']) && $_POST['password'] == ''){       
  echo 'Dati mancanti.<br>Se non hai un account <a href="http://localhost/studenti/registrazione.php">Registrati.</a>'; 
}

   else{

   
    if ($utente->login($_POST['username'], $_POST['password'])) {
        header("Location: protetta.php");
        } 
    
    else {
        echo 'Login fallito.<br>Se non hai un account <a href="http://localhost/studenti/registrazione.php">Registrati.</a>';
    }

}

?>

<?php include 'footer.php'; ?>

</body>