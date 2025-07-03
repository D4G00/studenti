<html>
<body>

<?php
  date_default_timezone_set("Europe/Rome");
  $data=date("H:i");
   
  echo $data . "<br>";
  if ($data <= "13:00") {
    echo "Buongiorno!";
  }

   else {
    echo "Buonpomeriggio";
   }
  


?>

   </body>
   </html>