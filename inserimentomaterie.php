<?php

?>

<html>
<head>
  <link rel="stylesheet" href="stile.css">
</head>


<?php include 'header.php'; ?>


<body>
  
    <h1>Inserimento nuova materia</h1><br>

    <form method="POST" action="materie.php">
     
        Nome materia:<input type="text" name="nome"><br><br>
        

      <input type="submit" name="invia">
      <input type="reset" name="reset">



    </form>

    
<?php include 'footer.php'; ?>


</body>
</html>