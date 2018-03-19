
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

    <title>Acceso</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.3.3.7.css" rel="stylesheet">

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



    <!-- parte con angular js -->
    <script src="../../assets/js/angular.min.1.6.4.js"></script>
    


    <script src="../../assets/angularjs/script.js"></script>
    <script src="../../assets/angularjs/controllers/accesoControllers.js"></script>
    <script src="../../assets/angularjs/route/route.js"></script>

    
    <!-- grafico js  -->
    <script src="../../assets/chartgoogle/loader.js"></script>
    <script src="../../assets/js-graficos/graficos.js"></script>
    <!-- end graficos  -->

  </head>
  <body>
    <div class="container">
      <!-- MENU  -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><b>Miguel Angel Zamora Montecinos</b></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/">Indice</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Tecnologias</a></li>
            <li><a href="#">Curriculum</a></li>
            <li><a href="/login">login</a></li>
          </ul>
        </div>
      </nav>
      <!-- fin menu  -->
      <!-- CONTENIDO  -->
        acceso a la aplicacion Bienvenido Usuario : {{ $usuario }}
        ID : {{ $id }}
    
        <h3>angular js</h3>
        <div ng-app="myApp" ng-controller="accesoCtrl">
          @{{ firstName + " " + lastName }}
        </div>
      </div>  

      <!-- FIN CONTENIDO  -->


      <!-- render del grafico -->  

      <div class="container"  align="center">
          <div class="col-md-4" id="chart_div" ></div>
          <div class="col-md-4"  > objeto 2 </div>
          <div class="col-md-4"  >objeto 3 </div>
      </div>
      <!-- en render grafico-->






    <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>







  </body>
</html>
