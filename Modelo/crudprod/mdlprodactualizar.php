<?php

 include_once("condb.php");

class Productoact extends conexionprod
{

    public function actualizar($cod, $nom, $des, $pen, $pas, $fec, $cat)
    {
        $q = "update productos set nombre_producto='$nom', desc_producto='$des', precio_entrada='$pen', precio_salida='$pas', fecha_ingreso='$fec', id_categoria='$cat' where codigo_producto='$cod'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

}

?>