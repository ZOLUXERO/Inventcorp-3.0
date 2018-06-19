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
	
	public function registro($usu,$nom,$ape,$numb,$cont)
	{
		//$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
		$q = "insert into usuarios(email_usuario,nombre_usuario,nombre_empresa,contrasena,telefono,id_rol) values('$usu','$nom','$ape','$cont','$numb',2)";
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
		$q = "select * from usuarios where id_usuario='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
		public function borrar($id)
	{
		$q = "delete from usuarios where id_usuario='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
		public function editar($id,$nom,$usu,$pass)
	{
		$q = "update usuarios set nombre_usuario='$nom', nombre_empresa='$usu', contrasena='$pass' where id_usuario='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
		return $consulta;	
	}
	
	//public function editar1($id,$nom,$tel)
	//$q = "update usuarios set nombre_usuario='$nom', telefono='$tel'"
	//$consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
	//return $consulta;

 }
?>