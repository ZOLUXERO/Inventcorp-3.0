 <?php
 
 include("conexion.php");
 
 $df=new conexion;

  
 class clases extends conexion {
	  
 
    public function logueo($usuario)
	{
        $q = "select * from usuarios where email_usuario='$usuario'";
        $consulta = $this->con->query($q) or die ('Error 1!' .  $this->con->error);
		return $consulta;
    } 
	
	public function verifica($dato)
	{
		$q = "select * from usuarios where email_usuario='$dato'";
        $consulta = $this->con->query($q) or die ('Error 2!' .  $this->con->error);
		return $consulta;	
	}
	
	public function registro($usu,$nom1,$nom2,$nom3,$nom4,$ape,$tdo,$numb,$pass)
	{
		//$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
		$q = "insert into usuarios(documento,email_usuario,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,contrasena,telefono,estado_usuario,tipo_documento,id_rol) values('$ape','$usu','$nom1','$nom2','$nom3','$nom4','$pass','$numb',1,'$tdo',3)";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
		
	}
	
	public function usuarios()
	{
		$q = "select * from usuarios order by primer_nombre";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);		
		return $consulta;	
	}
	
		public function usuarios1($id)
	{
		$q = "select * from usuarios where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
		public function borrar($id)
	{
		$q = "delete from usuarios where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
		public function editar($id,$nom1,$nom2,$nom3,$nom4,$ema,$tel,$est,$rol)
	{
		$q = "update usuarios set email_usuario='$ema', primer_nombre='$nom1', segundo_nombre='$nom2', primer_apellido='$nom3', segundo_apellido='$nom4',  telefono='$tel', estado_usuario='$est', id_rol='$rol' where documento='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
	 public function listarstock()
	{
        $q = "SELECT sum(cantidad_ingreso-cantidad_salida) as total FROM stock";
        $consulta = $this->con->query($q) or die ('Error 1!' .  $this->con->error);
		return $consulta;
    } 
	
	public function regisstock($ent,$sal,$cod)
	{
		//$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
		$q = "insert into stock(cantidad_ingreso, cantidad_salida, fecha, codigo_producto) values('$ent','$sal', NOW(),'$cod')";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
		
	}
	 public function obtener($id)
    {
        $q = "select * from stock where codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

 }
?>