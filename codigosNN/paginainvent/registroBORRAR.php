<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/boots/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand" style="color: #fff;">InventCorp</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>




       <div class="container">
    <div class="jumbotron">

        <h1 align="center" class="titulo">¡Registrese aquí!</h1>
        <p class="lider" align="center" >Formulario de registro.</p>

        <form name="areat" action="../../controlador/controler1.php" method="post">
         <table align="center" width="400">
          
          <tr><td align="center" class="letras">Usuario / Email</td><td>
            <input  type="email" name="usu" class="form-control" placeholder="Correo electrónico" required>
          </td></tr>
          <tr><td style="padding:2px"></td></tr>
                   <tr><td align="center" class="letras">Nombre</td><td>
            <input type="text" name="nom" class="form-control" placeholder="Nombre" required>
          </td></tr>
          <tr><td style="padding:2px"></td></tr>
          <tr><td align="center" class="letras" >Empresa</td><td>
            <input  type="text" name="ape" class="form-control" placeholder="Nombre empresa" required>
          </td></tr>
          <tr><td style="padding:2px"></td></tr>
          <tr><td align="center" class="letras">telefono</td><td>
            <input type="text" name="numb" class="form-control" placeholder="Telefono" required>
          </td></tr>

          <tr><td style="padding:2px"></td></tr>
            <tr><td align="center" class="letras">Contraseña</td><td>
            <input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
          </td></tr>
          
          <tr><td style="padding:4px"></td></tr>
          <tr><td colspan="2"><hr></td></tr>
          <tr><td align="center" colspan="2"><input type="submit" class="btn btn-lg btn-success" name="registrar" style="width:400px" value="REGISTRAR"></td></tr>
          <tr><td style="padding:4px"></td></tr>
          <tr><?PHP if(isset($_REQUEST['dato'])){ echo "<td colspan='2' align='center'><div class='alert alert-success'>"."REGISTRO CORRECTO"."</div>";} if(isset($_REQUEST['dato1'])){ echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."USUARIO YA SE ENCUENTRA EN EL SISTEMA"."</div>"; }?></td></tr>
                  
         </table>
         </form>
    
   
 </div>
</div>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Pagina hecha por <a href="#">Inventcorp</a>, by <a href="#">Adsi</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../bootstrap/boots/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../bootstrap/boots/assets/js/vendor/popper.min.js"></script>
    <script src="../bootstrap/boots/dist/js/bootstrap.min.js"></script>
  </body>
</html>