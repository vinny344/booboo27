<?php  require_once( __DIR__ . '/header.php' ); ?>

<div id="page-happy-birthday">

    <div class="container-happy-birthday">

        <div class="wrapper">

            <div class="container-title">

                <div>
                    <span class="hidden">H</span>
                    <span class="hidden">A</span>
                    <span class="hidden">P</span>
                    <span class="hidden">P</span>
                    <span class="hidden">Y</span>
                </div>

                <div>
                    <span class="hidden">B</span>
                    <span class="hidden">I</span>
                    <span class="hidden">R</span>
                    <span class="hidden">T</span>
                    <span class="hidden">H</span>
                    <span class="hidden">D</span>
                    <span class="hidden">A</span>
                    <span class="hidden">Y</span>
                </div>

            </div>

            <?php for( $i = 0; $i < 100; $i ++ ) { ?>
                <?php include( __DIR__ . '/views/balloon.php' ); ?>
            <?php } ?>

            <div class="container-btn">
                <button id="btn-balloon" class="btn-balloon">
                    <span>You want a ballon ?</span>
                </button>
            </div>

            <div class="last-b b-red">
                <div class="triangle"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
                <div class="rond-line"></div>
            </div>

        </div>

    </div>

    <div class="container-happy-birthday-answer">

        <div class="wrapper">

            <div class="square"></div>

            <div class="container-title">
                <h1>What is your answer ?</h1>

                <input id="balloon-answer" type="text" name="ballon-answer" autofocus="autofocus" />
                <div class="btn-arrow">
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>

            <div class="container-answer container-answer-no">
                <h2>What NO ?</h2>
            </div>

            <div class="container-answer container-answer-nothing">
                <h2>What ?</h2>
            </div>

            
            <div class="container-answer container-answer-yes">
                <h2>Oh sorry, i lost it somewhere ...</h2>
            </div>

        </div>


    </div>

</div>


<?php require_once( __DIR__ . '/footer.php' ); ?>

<script type="application/javascript" src="<?php URL_PATH ?>assets/js/happy-birthday.js"></script>