<?php

require_once './Model/loginModel.php';

Class LoginController{

    // Comprobacion de inicio de sesion
    static public function previoLogin($user , $password){
        if(isset($_POST['username']) && isset($_POST['userpassword'])){
            $respuesta = LoginModel::previoLogin($user ,$password);
            return $respuesta;
        }
    }

    public function login($user,$password){
        $user = $_POST['username'];
        $password = $_POST['userpassword'];

        if(isset($_POST['username']) && isset($_POST['userpassword'])){
            $respuesta = LoginModel::login($user,$password);
            if($respuesta == 'ok'){
                session_start();
                $_SESSION['usuario'] = $user;
                header('Location:body.php');
            }else{
                header('Location: index.php');
            }
        }
        return $respuesta;
    }

    // Detallado depues de Inicio de sesion

    static public function usuarioLogin($user){
        if(isset($_SESSION['usuario'])){
            $respuesta = LoginModel::usuarioLogin($user);
            return $respuesta;
        }
    }

    public function cerrarSesion($cerrar){
        if(isset($_GET['cerrar']) && $_GET['cerrar']=='ok'){
            $salir = $_GET['cerrar'];
            if($salir == "ok"){
                session_unset();
            }
            header('Location: ./index.php');
            $salir = "ok";
        }
        return $salir;
    }
}