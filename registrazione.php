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

<?php 
include 'header2.php'; 
require_once 'db.php';
?>
  <h1>Effettua registrazione</h1>

<body>

<form method="POST" action="passaggioregistrazione.php">

    Username:<input type="name" name="username"><br>
    password:<input type="password" name="password"><br><br>

    <input type="submit" name="login">
    <input type="reset" name="Reset">

</form>

</body>

<?php include 'footer.php'; ?>