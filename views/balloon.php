<?php

 $colors = array(
     "b-blue",
     "b-orange",
     "b-green",
     "b-pink",
     "b-yellow",
     "b-red",
     "b-purple"
 ); 

?>

<div class="b <?php echo $colors[ array_rand( $colors ) ] ?>">
    <div class="triangle"></div>
    <div class="line"></div>
</div>