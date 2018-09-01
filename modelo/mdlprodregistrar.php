<?php

 include_once("conexion.php");

class Productoreg extends Conexion
{

    public function registro($cod, $nom, $des, $pen, $pas, $fec, $cat)
    {

        $q = "insert into productos(codigo_producto, nombre_producto, desc_producto, precio_entrada, precio_salida, fecha_ingreso, estado_producto, id_categoria) values('$cod','$nom','$des','$pen','$pas','$fec',1,'$cat')";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }

}

?>