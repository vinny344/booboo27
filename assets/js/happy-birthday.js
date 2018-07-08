$( document ).ready( function() {


    setTimeout( function(){

        var delay = 0;

        $( '.container-happy-birthday .container-title span' ).each( function() {

            $( this ).delay( delay ).fadeIn( 100 );

            delay += 200;

        } );

        var delayBalloon = 0;

        $( '.container-happy-birthday .b' ).each( function() {

            var balloon = $( this );

            setTimeout( function(){

                balloon.addClass( 'bottom--200vh' );

            }, delayBalloon );
             
            delayBalloon += 150;


        } );


    }, 500 );

    setTimeout( function(){

        $( '#btn-balloon' ).fadeIn();
        $( '.last-b' ).addClass( 'bot-45' );

    }, 6800 );


    $( '#btn-balloon' ).click( function(){
        $( '.container-happy-birthday-answer' ).addClass( 'bot-0' );
    });

    $( '.btn-arrow' ).click( function(){

        var answer = $( '#balloon-answer' ).val().toLowerCase();

        if( 'yes' == answer ){
            $( '.container-answer-yes' ).fadeIn( 300 ).delay( 700 ).fadeOut( 300 );
        }
        else if( 'no' == answer ){
            $( '.container-answer-no' ).fadeIn( 300 ).delay( 500 ).fadeOut( 300 );
        }
        else if( 'wind' == answer ){
            window.location.href = 'heart';
        }
        else{
            $( '.container-answer-nothing' ).fadeIn( 300 ).delay( 500 ).fadeOut( 300 );
        }
    });





});