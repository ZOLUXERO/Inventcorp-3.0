<?php

class Alumno
{
    private $id_producto;
    private $nombre_producto;
    private $desc_producto;
    private $stock;
    private $precio_entrada;
    private $precio_salida;
    private $fecha_ingreso;
    private $id_categoria;


    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
