<?php  require_once( __DIR__ . '/header.php' ); ?>

<div id="page-letter">

    <div class="container-page-letter">

        <div class="wrapper">
            
            <h1>Congratulation baby, you did it !!! </h1>

            <div class="line"></div>

            <p>I think it was easy or bad but , do you love me ? The preparation , the preparation, ahahah it was that, it was me.</p>
            <p><b>HAPPY BIRTHDAY !!!</b> I love you baby, im so happy that we are together, i have so much fun with you. I know life is hard sometime, she push you down, but
            you never give up baby, and i find it beautiful. Every person know it , i'm sure of that. They all find you nice and good, it's not only me. You are a beautiful 
            person. You are a model my love, you are strong. There are not many people able to do what you do. You should be proud of yourself. Me, i'm proud of you.     
            </p>
            <p>I'm not an easy person to deal it but my love you still there with me. I appreciate all the thing that you did and will do for me. I'm a better person and i'm proud
                of it. Today it's your day and thank you to be in my life, i thank god. I thank you to stay with me when it's hard and when we fight. We always come out stronger. I
                thank you to care of me when i feel sad. I thank you for screaming when i'm not right. I thank you to help me when i need you. I thank you for encouraging me in my project.
                I just thank you for all the things that you did and will do for me. I love you so much. Thank god , i found a beautiful person to continue the path of life.
            </p>
            <p>Me and you, best TEAM EVER. We laugh so much together. You are my litte sunshine. I love when you scream at me in the morning ahaha we are always late 
                at party or whatever we will be late AHAH. WE ARE GOING TO GERMANY , CANT WAIT. An other adventure come baby, it's goona be amazing. I just, i love you.
                <b>HAPPY BIRTHDAY</b> again my love, my best friend. <b>LOVE YOU</b>.
            </p>

            <?php $count = 0; ?>
            <?php for( $i = 0; $i < 27; $i ++ ) { ?>
                <?php include( __DIR__ . '/views/letter-heart.php' ); ?>
            <?php } ?>


        </div>

        

    </div>

</div>

<?php require_once( __DIR__ . '/footer.php' ); ?>

<script type="application/javascript" src="<?php URL_PATH ?>assets/js/letter.js"></script>