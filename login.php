
<?php  require_once( __DIR__ . '/header.php' ); ?>

<div id="data-js" data-url='<?php echo URL_PATH ?>'></div>

<div class="container-landing-page">

    <div class="overlay black"></div>

    <div class="wrapper">

        <div class="container-title">
            <h1>We are going to germany !</h1>
        </div>

        <div class="container-overflow">

            <div class="container-sign-in">
                <button id="btn-sign-in" class="btn">
                    <span>Sign in</span>
                </button>
            </div>

            <div class="container-login">
                <input id="b_username" type="text" name="username" placeholder="&#xF007;&nbsp; Username" autocomplete="off" />
                <input id="b_password" type="password" name="password" placeholder="&#xF023;&nbsp; Password" />
                <button id="btn-login" class="btn">
                    <span>Login</span>
                </button>
            </div>

        </div>

    </div>

</div>

<div id="wrong-pass" class="container-wrong-password hidden">

    <h1>WRONG !!</h1>

</div>


<?php require_once( __DIR__ . '/footer.php' ); ?>

<script type="application/javascript" src="<?php URL_PATH ?>assets/js/login.js"></script>