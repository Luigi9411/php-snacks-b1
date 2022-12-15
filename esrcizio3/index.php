<?php
  $n_randoms = 15;
  $min = 50;
  $max = 100;
  $arr_randoms = [];

  while (count($arr_randoms) < $n_randoms) {
    $random_number = rand($min, $max);
    if (!in_array($random_number, $arr_randoms)) {
        $arr_randoms[] = $random_number;
    }
  }

  var_dump($arr_randoms);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
</head>
<body>
    
</body>
</html>