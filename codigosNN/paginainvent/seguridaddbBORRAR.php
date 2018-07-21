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
        <h1 align="center" class="titulo">¡Inicie sesion aqui!</h1>
        <p class="lider" align="center">Formulario de inicio.</p>

          <form name="areat" action="../../controlador/controler1.php" method="post">
           <table align="center" width="400">
           
           <tr><td style="padding:2px"></td></tr>
            <tr><td align="center" class="letras">Email</td><td>
              <input type="text" name="usu" class="form-control" placeholder="Correo electrónico" >
            </td></tr>

            <tr><td style="padding:2px"></td></tr>
            <tr><td align="center" class="letras">Contraseña</td><td>
              <input type="password" name="pass" class="form-control" placeholder="Contraseña" >
            </td></tr>

            <tr><td style="padding:4px"></td></tr>
            <tr><td colspan="2"><hr></td></tr>

            <tr><td align="center" colspan="2"><input class="btn btn-lg btn-success" type="submit" name="enviar" style="width:400px" value="Iniciar sesion"></td></td>
            <tr><td style="padding:4px"></td></tr>
            <tr><td style="color:#F00"><?php if(isset($_REQUEST['error'])) { echo "Usuario o contraseña incorrecta";}?></td></tr>
          
           </table>
           </form>
    
   
         </div>
        </div>
    

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Pagina hecha por <a href="https://getbootstrap.com/">Inventcorp</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
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