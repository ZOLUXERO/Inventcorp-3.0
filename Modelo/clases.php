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
		$q = "select * from usuarios order by nombre_usuario";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);		
		return $consulta;	
	}
	
		public function usuarios1($id)
	{
		$q = "select * from usuarios where cedula='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
		public function borrar($id)
	{
		$q = "delete from usuarios where cedula='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
		public function editar($id,$nom,$ape,$pass)
	{
		$q = "update usuarios set nombre_usuario='$nom', email_usuario='$ape', telefono='$pass' where cedula='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
	//public function editar1($id,$nom,$tel)
	//$q = "update usuarios set nombre_usuario='$nom', telefono='$tel'"
	//$consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
	//return $consulta;

 }
?>