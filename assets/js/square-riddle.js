

$( document ).ready( function() {

    $( '.container-page-square-riddle' ).addClass( 'right-0' );

    setTimeout( function(){
        $( 'body' ).addClass( 'bg-blue-pastel' );
    }, 300);

    var count = 0;
    var arraySquare = [];
    var arrayGoodSquare = [ 3, 6, 7, 10, 13, 14, 15 ];

    $( '.square' ).click( function(){

        $( this ).find( '.square-black' ).addClass( 'h-w-100' );

        var square = $( this ).attr( 'data-count' );

        arraySquare.push( square );

        count ++;

        if( 7 == count ){

            if( arraySquare.compare( arrayGoodSquare ) ){

                console.log( 'yes' );

            }
            else{

                $( '#wrong-pass' ).fadeIn( 300 ).delay( 1500 ).fadeOut( 300 );

                $( '.square' ).each( function(){
                    $( this ).find( '.square-black' ).removeClass( 'h-w-100' );
                });
            }
        }

    });

});