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

	public function check($source, $items = array()){//en esta funcion esta mirando errores
			foreach ($items as $item => $rules) {
				foreach ($rules as $rule => $rule_value) {
								
					$value = trim($source[$item]);
					$item = escape($item);
					
					if ($rule === 'required' && empty($value)) {
						$this->addError("{$item} is required");
					}else if(!empty($value)){
						switch ($rule) {
							case 'min':
								if (strlen($value) < $rule_value) {
									$this->addError("{$item} debe ser de un minimo de {$rule_value} caracteres.");
								}
							break;
							case 'max':
								if (strlen($value) > $rule_value) {
									$this->addError("{$item} debe ser de un maximo de {$rule_value} caracteres.");
								}
							break;
							case 'matches':
								if ($value != $source[$rule_value]) {
									$this->addError("{$rule_value} debe coincidir con {$item}");
								}
							break;
							case 'unique':
								$check = $this->_db->get($rule_value, array($item, '=', $value));
								if ($check->count()) {
									$this->addError("{$item} ya existe.");
								}
							break;
							default:
								# code...
							break;
						}
					}
				}
			}
			if (empty($this->_errors)) {
				$this->_passed = true;
			}
			return $this;
		}
		private function addError($error){
			$this->_errors[] = $error;
		}
		public function errors(){
			return $this->_errors;
		}
		public function passed(){
			return $this->_passed;
		}
	}



 
?>