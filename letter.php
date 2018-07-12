<?php  require_once( __DIR__ . '/header.php' ); ?>

<div id="page-letter">

    <div class="container-page-letter">

        <div class="wrapper">
            
            <h1>Congratulation baby, you did it !!! </h1>

            <?php $count = 0; ?>
            <?php for( $i = 0; $i < 27; $i ++ ) { ?>
                <?php include( __DIR__ . '/views/letter-heart.php' ); ?>
            <?php } ?>


        </div>

        

    </div>

</div>

<?php require_once( __DIR__ . '/footer.php' ); ?>