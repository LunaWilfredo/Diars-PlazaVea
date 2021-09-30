<?php

require_once './DB/bd.php';

class LoginModel{

    static public function login($user,$password){
        $sql="SELECT * FROM usuarios WHERE username= '$user' and upassword = '$password'";
        $conexion = Conexion::conectar()->prepare($sql);
        
        if($conexion->execute()){
            $conexion = 'ok';
        }
        return $conexion;

        $conexion->close();
        $conexion = null;
    }
}
 
?>