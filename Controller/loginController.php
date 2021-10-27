<?php

require_once './Model/loginModel.php';

Class LoginController{
    public function login($user,$password,$rol){
        $user = $_POST['username'];
        $password = $_POST['userpassword'];
        $rol = $_POST['userrol'];

        if(isset($_POST['username']) && isset($_POST['userpassword']) && isset($_POST['userrol'])){
            $respuesta = LoginModel::login($user,$password,$rol);
            if($respuesta == 'ok'){
                session_start();
                $_SESSION['usuario'] = $user;
                $_SESSION['rol'] = $rol;
                header('Location:body.php');
            }
        }
        return $respuesta;
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