<?php
require_once "Cliente.php";
require_once "Pedido.php";
require_once "AccesoDatos.php"; 

if(empty($_GET['nombre']) || empty($_GET['contrasena'])){
    $msg = "Faltan datos";
    include "vistaerror.php";
    exit();
}

$ac = AccesoDatos::initModelo();

/*az->getcliente()
   * vistaerror.php
   * ac > actialuzar AccesoCliente()
*/ 
$ac ->getCliente($_GET['nombre'], $_GET['contraseña'])



/*array az-> getPedidosCliente
   * vistaPedidosCliente.php
*/