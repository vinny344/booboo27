<?php

class UserController{

    public function __construct( ){

    }

    public function user_exist( $request ){

        $user = new User( $request[ 'username' ], $request[ 'password' ] );

        if( null !== $user ){

            $username = $user->get_username();
            $password = $user->get_password();

            
        }

    }
}