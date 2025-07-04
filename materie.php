<head>
  <link rel="stylesheet" href="stile.css">
</head>


<?php include 'header.php'; ?>

<body>

<?php include 'db.php';

 $nome=$_POST['nome'];

  echo "Nome materia:    " . $nome . "<br><br><br>";


  $sql="INSERT INTO materie (nome)VALUES";
           $sql.="('$nome');";
           echo $sql."<br><br>------";
            
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



        echo "<h4>Materie disponibili</h4><br>";

        $materie = $mysqli->query("SELECT nome FROM materie");

        
?>





<ul>
<?php while ($r = $materie->fetch_assoc()): ?>
  <li><?= $r['nome'] ?></li>
<?php endwhile; ?>
</ul>

</body>



<?php include 'footer.php'; ?>