

$( document ).ready( function() {

    $( '#btn-sign-in' ).click( function() {
        
        $( this ).parent().fadeOut( '100' );

        $( '.container-login' ).addClass( 'bot-100' );

    } );

    $( '#btn-login' ).click( function() {

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
            success: function( data ) {
                alert( data );
            },
            error: function( error , x , y ){
                
            }


        });
    
    });

});