<?php  require_once( __DIR__ . '/header.php' ); ?>

<div id="page-heart">

    <div class="container-page-heart">

        <div class="wrapper">

             <div class="container-title">
            <h1>The answer is through the heart</h1>
        </div>

        <div class="container-heart">
            <img src="<?php URL_PATH ?>assets/images/heart.png" alt="heart" />
        </div>

        <h2 class="hidden">Love you</h2>


        <div class="container-lock">

            <div class="container-input">
                 <input id="answer-heart" name="answer-heart" class="" type="text" autofocus="autofocus" placeholder="Answer Here"  />
            </div>
            <div class="container-i">
                <i id="btn-lock" class="fa fa-lock shake"></i>
            </div>

        </div>



        </div>
    </div>
</div>




<?php require_once( __DIR__ . '/footer.php' ); ?>

<script type="application/javascript" src="<?php URL_PATH ?>assets/js/heart.js"></script>