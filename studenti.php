
<head>
  <link rel="stylesheet" href="stile.css">
</head>


<?php include 'header.php'; ?>

<body>


<?php include 'db.php';

  $nome=$_POST['nome'];
  $cognome=$_POST['cognome'];
  $email=$_POST['email'];

   echo "<h3>Nuovo studente</h3><br>" . "Nome:    " . $nome . "<br>Cognome:    " . $cognome . "<br>email:    " . $email . "<br><br><br>"; 

     $sql="INSERT INTO studenti (nome, cognome, email) VALUES ('$nome' , '$cognome' , '$email');";
           echo "------";
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "studenti_db";
            
         $conn = new mysqli($servername, $username, $password, $dbname);
         
          if($conn->connect_error) {
           die("<br>tentativo di connessione al db fallita<br>" . $conn->connect_error); }
         
          if($conn->query($sql) === TRUE) {
           echo "<br> record inserito correttamente.<br><br>"; }
           
          else{
          echo "<br>ERRORE." . $sql . "<br>" . $conn->error ; }
          
        $conn->close();

 echo "<h4>Elenco studenti</h4>";


   $studenti = $mysqli->query("SELECT nome FROM studenti");


?>

        
<ul>
<?php while ($r = $studenti->fetch_assoc()): ?>
  <li><?= $r['nome'] ?></li>
<?php endwhile; ?>
</ul>

</body>


<?php include 'footer.php'; ?>