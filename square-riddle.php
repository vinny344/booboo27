<?php  require_once( __DIR__ . '/header.php' ); ?>

<div id="page-square-riddle">

    <div class="container-page-square-riddle">

            <div class="wrapper">


            <div class="container-all-square">

                <?php for( $i = 0; $i < 16; $i ++ ) { ?>
                    <?php include( __DIR__ . '/views/square.php' ); ?>
                <?php } ?>

            </div>

        </div>

    </div>

    <div id="wrong-pass" class="container-wrong hidden">

        <div class="wrapper">
            <h1>No Problem booboo you can do it. Kiss kiss</h1>
        </div>

    </div>

</div>

<?php require_once( __DIR__ . '/footer.php' ); ?>

<script type="application/javascript" src="<?php URL_PATH ?>assets/js/square-riddle.js"></script>