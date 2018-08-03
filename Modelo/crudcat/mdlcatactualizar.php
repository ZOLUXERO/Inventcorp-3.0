<?php

 include("condb.php");

class Categoria extends Conexion
{
	
    public function actualizar($cod, $nom, $des)
    {
        $q = "update categorias set nombre_categoria='$nom', desc_categoria='$des' where id_categoria='$cod'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }
    
}

?>