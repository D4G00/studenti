<head>
    <link rel="stylesheet" href="stile.css">
</head>

<?php include 'header2.php'; ?>

  <h3>Effettua registrazione</h3>

<body>

<form method="POST" action="passaggioregistrazione.php">

    Username:<input type="name" name="username"><br>
    password:<input type="password" name="password"><br><br>

    <input type="submit" name="login">
    <input type="reset" name="Reset">

</form>

</body>

<?php include 'footer.php'; ?>