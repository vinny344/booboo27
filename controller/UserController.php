<?php

require_once( __DIR__ . '/../config.php' );  

class UserController{

    public function __construct( ){

    }

    public function user_exist( $request ){

        $answer = array(
            'username' => '',
            'status'   => 'KO'
        );

       if( ! empty( $request ) ) {

            $username = trim( $request[ 'username' ] );
            $password = trim( $request[ 'password' ] );

            $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

            if ( mysqli_connect_errno() ) {

                printf( "Échec de la connexion : %s\n", mysqli_connect_error() );
                exit();

            }

            if ( $stmt = $mysqli->prepare( "SELECT username FROM user WHERE username=? AND password=?" ) ) {

                /* Lecture des marqueurs */
                $stmt->bind_param( "ss" , $username, $password );
            
                /* Exécution de la requête */
                $stmt->execute();
            
                /* Lecture des variables résultantes */
                $stmt->bind_result( $username );
            
                /* Récupération des valeurs */
                while( $stmt->fetch() ){

                    $answer[ 'username' ] = $username;
                    $answer[ 'status' ]   = 'OK';

                }
            
                /* Fermeture du traitement */
                $stmt->close();
            }

            $mysqli->close();

            return $answer;

       }

    }
}