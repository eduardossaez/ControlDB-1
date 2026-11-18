<?php
class Cliente {
    private string $cod_cliente;
    private string $nombre;
    private string $clave;
    private string $veces;

    public function __get( string $name ) {
        if(property_exists( $this, $name ) ) {
            return $this->$name;
        }
    }
    public function __set( string $name, $value ) {
        if(property_exists( $this, $name ) ) {
            $this->$name = $value;
        }
    }
}
?>