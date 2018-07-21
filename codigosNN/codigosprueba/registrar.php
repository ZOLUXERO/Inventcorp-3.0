<html>


<head>

<form class="login" method="post" action="porfavor2.php">

    <h1 class="login-title">Registrate aqui!</h1>
    <input type="text" class="login-input" placeholder="ID" autofocus name="k1" id="k1">
    <input type="email" class="login-input" placeholder="Correo" autofocus name="h1" id="h1">
    <input type="text" class="login-input" placeholder="Nombre" name="h2" id="h2">
     <input type="text" class="login-input" placeholder="Direccion" name="h3" id="h3">
     <input type="number" class="login-input" placeholder="edad" name="h4" id="h4">
      <input type="password" class="login-input" placeholder="Password" name="h5" id="h5">
      
  
   	<select type="text" class="login-input" name="h6" id="h6">
    	<option>Administrador</option>
        <option>Usuario</option>
        <option>Proveedor</option>
    </select>  
 
      
      
    <input type="submit" value="Registrar" class="login-button">

  </form>
  
   
 

</head>


<body>

<style type="text/css">

body {
  background: #2d343d;
}

.login {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}

h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  font-weight: 300;
  color: #ADADAD;
  text-align:center;
  background: #f7f7f7;
 
}

.login-input {
  width: 285px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
  }
.login-button {
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #19506B;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}

.login-lost
{
  text-align:center;
  margin-bottom:0px;
}

.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:13px;
}
</style>


</body>


</html>