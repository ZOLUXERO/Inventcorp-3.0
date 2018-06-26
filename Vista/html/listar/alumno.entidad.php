<?php

class Alumno
{
    private $id_proveedor_cliente;
    private $nombre_proveedor_cliente;
    private $email_proveedor_cliente;
    private $empresa;
    private $telefono_proveedor_cliente;


    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
