<?php

function drawMonster(int $type, int $size):void {

?>

<?php

  define("monsterCount", 10);

  for ($i=0; $i < monsterCount; $i++)  { ?> 
  
   
  <img src="planet<?= $type; ?>.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;" <br>
  

 <?php } ?>





<?php
}

