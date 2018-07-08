$( document ).ready( function() {

    $( '.container-page-heart' ).addClass( 'left-0' );

    setTimeout( function(){
        $( '.container-heart .fa-heart' ).addClass( 'scale-1' );
    }, 300);


    $( '.container-page-heart h2' ).delay( 900 ).fadeIn();

    $( '.container-heart img' ).click( function(){
        $( this ).addClass( 'opa-0-5' );   
    });


    $( '.container-lock' ).click( function(){

        $( this ).find( '.fa-lock' ).removeClass( 'shake' );
        $( this ).find( 'input' ).addClass( 'w-100' );
        
    });

    $( '#answer-heart' ).keypress( function() {

        var answer = $( this ).val().toLowerCase().trim();

        var answer = answer.replace( /\s/g, '' );

        if( 'throughtheheart' == answer || 'throughthehear' == answer ){


            $( '.container-lock i' ).removeClass( 'fa-lock' ).addClass( 'fa-unlock' );

            $( '.container-page-heart' ).addClass( 'left--100' );

            setTimeout( function(){
                window.location.href = 'square-riddle';
            }, 600 );


        }
    });
    
});