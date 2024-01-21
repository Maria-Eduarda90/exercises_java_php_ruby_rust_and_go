<?php

class Login {
    public static $user;

    public static function verificarLogin(){
        echo "O Usuario ".self::$user." está logado!";

    }
}

Login::$user = "admin";
Login::verificarLogin();