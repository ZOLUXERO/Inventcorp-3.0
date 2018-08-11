 <?php
 
 include("conexion.php");
 
 $df=new conexion;

  
 class clases extends conexion {
	  
 	private $_passed = false,
			$_errors = array();


 
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
		
	public function registroclie($codclie,$nomclie,$nom2clie,$nomclie3,$nom4clie,$emaclie,$telclie)
	{
		//$q = "select * from usuario where usuario='$usu' and contrasena='$cont'";
		$q = "insert into listar_clientes_proveedores(codigo_proveedor_cliente,primer_nombre_provee_clie,segundo_nombre_provee_clie,primer_apellido_provee_clie,segundo_apellido_provee_clie,email_proveedor_cliente,telefono_proveedor_cliente,estado_proveedor_cliente,id_rol_listar) values('$codclie','$nom1clie','$nom2clie','$nom3clie','$nom4clie','$emaclie','$telclie',1,2)";
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

	   public function actualizarclie($codclie, $nom1clie, $nom2clie, $nom3clie, $nom4clie, $emaclie, $telclie)
    {
        $q = "update listar_clientes_proveedores set primer_nombre_provee_clie='$nom1clie', segundo_nombre_provee_clie='$nom2clie', primer_apellido_provee_clie='$nom3clie', segundo_apellido_provee_clie='$nom4clie', email_proveedor_cliente='$emaclie', telefono_proveedor_cliente='$telclie' where codigo_proveedor_cliente='$codclie'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

	
	 public function listarstock($id)
	{
        $q = "SELECT sum(cantidad_ingreso-cantidad_salida) as total FROM stock WHERE codigo_producto='$id'";
        $consulta = $this->con->query($q) or die ('Error 1!' .  $this->con->error);
		return $consulta;
    } 
	

    public function listarclie()
    {
        $q = "select * from listar_clientes_proveedores where estado_proveedor_cliente='1' and id_rol_listar='2' order by codigo_proveedor_cliente";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);       
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

  	public function obtenerclie($id)
    {
        $q = "select * from listar_clientes_proveedores where codigo_proveedor_cliente='$id'";
        $consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
        return $consulta;   
    }

	public function escape($string){
		return htmlentities($string, ENT_QUOTES, 'UTF-8');
	}

	public static function exists($type = 'post'){
		switch ($type) {
			case 'post':
				return (!empty($_POST)) ? true : false;
			break;
			case 'get':
				return (!empty($_GET)) ? true : false;
			break;
			default:
				return false;
			break;
		}
	}

	public static function get($item){
		if (isset($_POST[$item])) {
			return $_POST[$item];
		}elseif (isset($_GET[$item])) {
			return $_GET[$item];
		}
		return '';
	}

	
	}



 
?>