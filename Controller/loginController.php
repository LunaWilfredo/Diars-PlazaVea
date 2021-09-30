<?php

require_once './Model/loginModel.php';

Class LoginController{
    public function login($user,$password){
        if(isset($_POST['username']) && isset($_POST['userpassword'])){
            $user =$_POST['username'];
            $password = $_POST['userpassword'];
            $respuesta = LoginModel::login($user,$password);
        if($respuesta == 'ok'){
            if($user == 'administrador' && $password == '123456' || $user == 'tienda' && $password == '123456' || $user == 'almacen' && $password == '123456' || $user == 'proveedor' && $password == '123456'){
                session_start();
                $usuario = $_SESSION['usuario'] = $user;
                header('Location:body.php');
            }
            $role = $user;
            if($user == $user && $role == $role){
                $rol = $_SESSION['rol'] = $role; 
            }
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