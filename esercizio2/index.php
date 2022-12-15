<?php
  $firstname = isset($_GET['firstname']) ? $_GET['firstname'] : '';
  $mail = isset($_GET['mail']) ? $_GET['mail'] : '';
  $age = isset($_GET['age']) ? $_GET['age'] : '';

  $pos_at = strpos($mail, '@');
  $pos_dot = strpos($mail, '.', $pos_at);

  if (strlen($firstname) > 3 && is_numeric($age) && $pos_at !== false && $pos_dot !== false) {
    $message = 'Accesso riuscito';
  } else {
    $message = 'Accesso negato';
  }
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
    <form action="" method="get">
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname" value=<?= $firstname ?>>

        <label for="mail">mail</label>
        <input type="text" name="mail" id="mail" value=<?= $mail ?>>

        <label for="age">age</label>
        <input type="text" name="age" id="age" value=<?= $age ?>>
        <button>Controlla</button>
        <h4><?= $message ?></h4>
    </form>
</body>
</html>