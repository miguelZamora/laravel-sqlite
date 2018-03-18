
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>login</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/html5shiv.min.js"></script>
      <script src="../../assets/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <form class="form-signin"    action="/login" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" >
        <h2 class="form-signin-heading">login Aplicativo</h2>
        <label for="inputEmail" class="sr-only">usuario</label>
        <input type="input" id="input" class="form-control" placeholder="usuario" pattern="[A-Za-z0-9]{4,50}"
       title="El usuario ingresado debe tener mas de cuatro caracteres" required autofocus  name="nombre" id="nombre"> 
        <label for="inputPassword" class="sr-only">clave</label>
        <input type="password" id="inputPassword" class="form-control"  name="clave" id="clave" placeholder="clave" required>
        <div class="checkbox">
          <label>
            <p></p>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
      </form>
    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
