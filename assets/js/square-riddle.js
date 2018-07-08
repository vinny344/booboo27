

$( document ).ready( function() {

    $( '.container-page-square-riddle' ).addClass( 'right-0' );


    var count = 0;
    var arraySquare = [];
    var arrayGoodSquare = [ 2, 5, 6, 9, 12, 13, 14 ];

    $( '.square' ).click( function(){

        $( this ).find( '.square-black' ).addClass( 'h-w-100' );

        var square = $( this ).attr( 'data-count' );

        square = parseInt( square );

        arraySquare.push( square );

        count ++;

        if( 7 == count ){

            var equal = compareArrays( arraySquare, arrayGoodSquare );


            if( compareArrays( arraySquare, arrayGoodSquare ) ){

                window.location.href = 'letter';

            }
            else{

                $( '#wrong-pass' ).fadeIn( 300 ).delay( 1000 ).fadeOut( 300 );

                $( '.square' ).each( function(){
                    $( this ).find( '.square-black' ).removeClass( 'h-w-100' );
                });

                arraySquare = [];

                count = 0;
            }
        }

    });

});

function compareArrays( arr1, arr2 ) {

    var answer = false;

    arr1.sort();
    arr2.sort();
    
    for( $i = 0; $i < 7; $i ++ ){

        if( arr1[ $i ] != arr2[ $i ] ){
            answer = false;
            break;
        }
        else{
            answer = true;
        }

    }




    return answer;

};