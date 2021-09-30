<?php

class PagosCajaController{

    public function buscarProducto($producto){
        if(isset($_POST['bproducto']) && $_POST['bproducto'] != null){
            $producto = 'producto buscado';
        }
        return $producto;
    }
}


?>