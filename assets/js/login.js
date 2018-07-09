

$( document ).ready( function() {

    $( '#btn-sign-in' ).click( function() {
        
        $( this ).parent().fadeOut( '100' );

        $( '.container-login' ).addClass( 'bot-10' );

    } );

    $( '#b_username' ).keypress( function( e ){

        if( e.which == 13 ) {
            validate();  
        }

    });

    $( '#b_password' ).keypress( function( e ){
        
        if( e.which == 13 ) {
            validate();  
        }

    });

    $( '#btn-login' ).click( function() {
        validate();
    });

    $( '#b_password' ).click( function(){

        $( '.container-landing-page .container-title' ).fadeOut( 300 );

    });

    $( '#b_username' ).click( function(){

        $( '.container-landing-page .container-title' ).fadeOut( 300 );

    });

});

function validate(){
    var username = $( '#b_username' ).val();
    var password = $( '#b_password' ).val();

    if( 'booboo' != password && 'mybaby' != username ) {
                
        $( '#wrong-pass' ).fadeIn( 300 ).delay( 500 ).fadeOut( 300 );

    }
    else{

        window.location.href = 'happy-birthday.php';

    }
}