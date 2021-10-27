<?php

class PagosCajaController{

    static public function nuevaVenta(){
        
        if(isset($_POST['btnNuevaVenta'])){
            header('Location : body.php?pagina=ingresarVenta');
        }
        return ;
    }
}


?>