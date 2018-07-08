

<?php

$class = array(
    "h-0",
    "h-1",
    "h-2",
    "h-3",
    "h-4",
); 

if( $count == 5 ){
    $count = 0;
}

?>

<div class="letter-heart <?php echo 'h-' . $count; ?> " >
    <i class="fa fa-heart"></i>
</div>

<?php $count ++; ?>