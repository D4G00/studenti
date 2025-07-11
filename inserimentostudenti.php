<?php
require_once 'db.php';
?>



<html>

<head>
<link rel="stylesheet" href="stile.css">

  <style>

  h1{
    text-align: center;
  }

  form{
    text-align: center;
  }

  </style>


</head>

<?php include 'header.php'; ?>

<body>
  
    <h1>Inserimento nuovo studente</h1><br>

    <form method="POST" action="studenti.php">
     
        Nome:<input type="text" name="nome"><br><br>
        Cognome:<input type="text" name="cognome"><br><br>
        Email:<input type="email" name="email"><br><br>

      <input type="submit" name="invia">
      <input type="reset" name="reset">



    </form>



</body>

<?php include 'footer.php'; ?>



</html>