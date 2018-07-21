<?php

 include("condb.php");

class clases extends conexion
{
    

    public function listar()
    {
        $q = "select * from productos order by codigo_producto";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

    public function obtener($id)
    {
        $q = "select * from productos where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function eliminar($id)
    {
        $q = "delete from productos where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function actualizar($cod, $nom, $des, $pen, $pas, $fec, $cat)
    {
        $q = "update productos set nombre_producto='$nom', desc_producto='$des', precio_entrada='$pen', precio_salida='$pas', fecha_ingreso='$fec', id_categoria='$cat' where codigo_producto='$cod'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function registro($cod, $nom, $des, $pen, $pas, $fec, $cat)
    {
        //$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
        $q = "insert into productos(codigo_producto, nombre_producto, desc_producto, precio_entrada, precio_salida, fecha_ingreso, estado_producto, id_categoria) values('$cod','$nom','$des','$pen','$pas','$fec',1,'$cat')";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }
  
}

?>
