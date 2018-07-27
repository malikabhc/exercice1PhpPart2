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
    <?php
      if ($age >= 18) {
        echo 'Vous êtes majeur';
      }
      else {
        echo 'Vous êtes mineur';
      }
    ?>
  </body>
</html>
