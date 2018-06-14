<?php

class Proveedor
{
    private $id;
    private $nombre_proveedor;
    private $materia_prima;
    private $cantidad;
    private $precio_materia;
    private $email_proveedora;
    private $telefono_proveedor;
    private $estado_proveedor;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
