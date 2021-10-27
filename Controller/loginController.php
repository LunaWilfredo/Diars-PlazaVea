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
            // if($user == 'administrador' && $password == '123456' || $user == 'tienda' && $password == '123456' || $user == 'almacen' && $password == '123456' || $user == 'proveedor' && $password == '123456'){
            //     session_start();
            //     $usuario = $_SESSION['usuario'] = $user;
            //     
            // }
            // $role = $user;
            // if($user == $user && $role == $role){
            //     $rol = $_SESSION['rol'] = $role; 
            // }
                session_start();
                $_SESSION['usuario'] = $user;
                $_SESSION['rol'] = $rol;
                header('Location:body.php');
            }
        }
        return $respuesta;
        var_dump($respuesta);
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