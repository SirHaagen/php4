<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - BASIC CALCULATOR</title>
</head>

<body>

  <form method="get">
    <input type="number" name="num1"><br>
    <input type="number" name="num2"><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  echo "<br> The answer is: " . $_GET["num1"] + $_GET["num2"];
  ?>

</body>

</html>