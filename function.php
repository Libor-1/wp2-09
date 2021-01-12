<?php

function drawMonster(int $type, int $size):void {

?>


 <img src="floppa-<?= $type; ?>.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 


<?php
}