<?php

/* 
  Write you php code here

   */
$name = "Toni";
$favorites =[ "Mars", "Snickers", "Marshmellow", "Japp", "Kinder"];
$favorites_implode = implode(" ", $favorites);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Echo Shorthand</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
<?= "$name <br> $favorites_implode"; ?>
</body>

</html>