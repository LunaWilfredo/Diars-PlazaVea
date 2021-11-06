<?php 

Class MailController{

    static public function mailBoletaventa(){
        $destino = "lelunchdebritania@gmail.com";
        $nombre = "plazavea";
        $correo = "lelunchdebritania@gmail.com";
        $mensaje = "Correo de prueba ";
        
        $contenido = "De:". $destino ."\nNombre:".$nombre."\nCorreo:".$correo."\nMensaje:".$mensaje;

        mail($destino,"Contacto",);
        
    }

}

?>