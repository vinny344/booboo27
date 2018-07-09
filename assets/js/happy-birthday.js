$( document ).ready( function() {

    var delayBalloon = 0;

    $( '.container-happy-birthday .b' ).each( function() {

        var balloon = $( this );

        setTimeout( function(){

            balloon.addClass( 'bottom--200vh' );

        }, delayBalloon );
            
        delayBalloon += 150;


    } );


    setTimeout( function(){

        $( '#btn-balloon' ).fadeIn();
        $( '.last-b' ).addClass( 'bot-45' );

    }, 6300 );


    $( '#btn-balloon' ).click( function(){
        $( '.container-happy-birthday-answer' ).addClass( 'bot-0' );
    });

    $( '#balloon-answer' ).keypress( function( e ){
        
        if( e.which == 13 ) {
            validate();  
        }

    });

    $( '.btn-arrow' ).click( function(){
        validate();
    });

    $( '#balloon-answer' ).blur();





});

function validate(){

    var answer = $( '#balloon-answer' ).val().toLowerCase();

    if( 'yes' == answer ){
        $( '.container-answer-yes' ).fadeIn( 300 ).delay( 700 ).fadeOut( 300 );
    }
    else if( 'no' == answer ){
        $( '.container-answer-no' ).fadeIn( 300 ).delay( 500 ).fadeOut( 300 );
    }
    else if( 'wind' == answer ){
        window.location.href = 'heart.php';
    }
    else{
        $( '.container-answer-nothing' ).fadeIn( 300 ).delay( 500 ).fadeOut( 300 );
    }

}