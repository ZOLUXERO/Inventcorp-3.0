<?php

 include_once("conexion.php");

class Usuarioto extends Conexion{

  	public function token($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    	return $randomString;
	}

	    public function guardartoken($ema, $token)
    {

        $q = "insert into recuperar(email, token, tiempo) values('$ema','$token',NOW())";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }

    	public function verifica($tok)
    {

        $q = "SELECT * FROM recuperar WHERE token='$tok'";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        return $consulta;
        
    }    

    	public function delete($token)
    {

        $q = "DELETE FROM recuperar WHERE token='$token'";
        $consulta = $this->con->query($q) or die ('Error!' . $this->con->error);
        
    }
	
}

?>