<?php

require_once( __DIR__ . '/../modele/User.php' ); 
require_once( __DIR__ . '/../controller/UserController.php' ); 

$request = $_POST;
$object = null;
$result = array();

if( $request[ 'function' ] && $request[ 'controller' ] ) {

    $path = $request[ 'controller' ] . 'Controller';

    $object = new $path();

    $result = $object->$request[ 'function' ]( $request );


}
else{


}

echo json_encode( $result );