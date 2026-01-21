<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Match up!</title>
</head>
<body>
  <div class="container">
    <div id="points-row">0 points</div>
    <div id="board">
        <?php
            define('CARDS',16);
            for($i = 0; $i < CARDS; ++$i) { 
              echo '<div class="card"></div>';
          } 
        ?>
    </div>
  </div>
</body>
</html>
