

$( document ).ready( function() {

    $( '#btn-sign-in' ).click( function() {
        
        $( this ).parent().fadeOut( '100' );

        $( '.container-login' ).addClass( 'bot-100' );

    } );

    $( '#btn-login' ).click( function() {

        var username = $( '#b_username' ).val();
        var password = $( '#b_password' ).val();

        if( 'booboo' != password && 'mybaby' != username ) {
                    
            $( '#wrong-pass' ).fadeIn( 300 ).delay( 500 ).fadeOut( 300 );

        }
        else{

            window.location.href = 'happy-birthday.php';

        }

    });

});