<?php
require_once './DB/bd.php';

class LoginModel{
    // Comprobacion de inicio de sesion
    static public function previoLogin($user , $password){
        $sql="SELECT username, upassword FROM usuarios  WHERE username = '$user' and upassword = '$password' ";
        $conexion = Conexion::conectar()->prepare($sql);
        
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = null;
    }

    static public function login($user,$password){
        $sql="SELECT * FROM usuarios  WHERE username = '$user' and upassword = '$password' ";
        $conexion = Conexion::conectar()->prepare($sql);
        
        if($conexion->execute()){
            return 'ok';
        }

        $conexion->close();
        $conexion = null;
    }

    // Detallado depues de Inicio de sesion
    static public function usuarioLogin($user){
        $sql="SELECT * FROM usuarios  WHERE username = '$user' ";
        $conexion = Conexion::conectar()->prepare($sql);
        
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = null;
    }
}
 
?> 