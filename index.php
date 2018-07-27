<?php
  $age = 26;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1/2</title>
  </head>
  <body>
    <p>
      <?php
        if ($age < 0) {
          echo 'Age incorrect';
        } elseif ($age >= 18) {
          echo 'Vous êtes majeur';
        } else {
          echo 'Vous êtes mineur';
        }
      ?>
    </p>
  </body>
</html>
