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
              echo '<div class="card" data-flipped="false"></div>';
          } 
        ?>
    </div>
  </div>
</body>
<!-- TODO: Play with script position -->
<script>
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  card.addEventListener('click', function () {
    let bg = "";
    if(this.dataset.flipped == "false") {
      bg = "url('assets/heraclio.jpeg')"; 
      this.dataset.flipped = "true";
    }
    else {
      bg = "url('assets/naipe.jpg')";
      this.dataset.flipped = "false";
    } 
    card.style.backgroundImage = bg;
  });
});
</script>

</html>
