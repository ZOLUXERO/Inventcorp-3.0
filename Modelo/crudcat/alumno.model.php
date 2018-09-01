<?php

 include_once("condb.php");

class clases extends conexioncat
{
    

    public function listar()
    {
        $q = "select * from categorias where estado_categoria='1' order by id_categoria";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

    public function listarcat()
    {
        $q = "select * from categorias order by id_categoria";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

    public function listarel()
    {
        $q = "select * from productos where estado_producto='0' order by codigo_producto";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

    public function obtener($id)
    {
        $q = "select * from productos where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function obtenercat($id)
    {
        $q = "select * from categorias where id_categoria='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function eliminar($id)
    {
        $q = "update categorias set estado_categoria='0' where id_categoria='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function actualizar($cod, $nom, $des)
    {
        $q = "update categorias set nombre_categoria='$nom', desc_categoria='$des' where id_categoria='$cod'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function registro($cod, $nom, $des, $pen, $pas, $fec, $cat)
    {
        //$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
        $q = "insert into productos(codigo_producto, nombre_producto, desc_producto, precio_entrada, precio_salida, fecha_ingreso, estado_producto, id_categoria) values('$cod','$nom','$des','$pen','$pas','$fec',1,'$cat')";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }
    public function registrocat($nom, $des)
    {
        //$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
        $q = "insert into categorias(nombre_categoria, desc_categoria, estado_categoria) values('$nom','$des',1)";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }
  
}

?>
