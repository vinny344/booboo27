

$( document ).ready( function() {

    $( '#btn-sign-in' ).click( function() {
        
        $( this ).parent().fadeOut( '100' );

        $( '.container-login' ).addClass( 'bot-100' );

    } );

    $( 'input' ).focus( function() {

        $( this ).attr( 'placeholder', '' );

    } );

    $( '#btn-login' ).click( function() {

        var url_path = $( '#data-js' ).attr( 'data-url' );

        var username = $( '#b_username' ).val();
        var password = $( '#b_password' ).val();
    
        var functionString = 'user_exist';
        var controller = 'User';

        $.ajax({
            type: "POST",
            url: "./src/ajaxreceiver.php",
            data: {
                username: username,
                password: password,
                function: functionString,
                controller: controller,
            },
            dataType: "json",
            success: function( data ) {
                         
                if( 'KO' === data.status ) {
                    
                    $( '#wrong-pass' ).fadeIn( 300 ).delay( 500 ).fadeOut( 300 );

                }
                else{

                    window.location.href = 'pages/happy-birthday.php'

                }

            },
            error: function( error , x , y ) {
                
            }


        });
    
    });

});