<?php
class Pedido{
    // numped`, `cod_cliente`, `producto`, `precio
    private int $numped;
    private string $cod_cliente;
    private string $producto;
    private int $precio;

    public function __get(string $name){
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    public function __set(string $name, $value){
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }




    
}