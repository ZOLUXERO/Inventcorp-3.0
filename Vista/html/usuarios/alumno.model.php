<?php

 include("condb.php");

class clases extends conexion
{
    

    public function listar()
    {
        $q = "select * from alumnos order by Nombre";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
        return $consulta;   
    }

    public function obtener($id)
    {
        $q = "select * from alumnos where id='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function eliminar($id)
    {
        $q = "delete from alumnos where id='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function actualizar($id,$nom,$ape,$sex,$fec)
    {
        $q = "update alumnos set Nombre='$nom', Apellido='$ape', Sexo='$sex', FechaNacimiento='$fec' where id='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

    public function registro($nom,$ape,$sex,$fec)
    {
        //$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
        $q = "insert into alumnos(Nombre, Apellido, sexo, FechaNacimiento) values('$nom','$ape','$sex','$fec')";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }
  
}

?>

