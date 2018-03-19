


    //var app = angular.module('accesoCtrl',[   'ngRoute',
 
 var app = angular.module('app', ['ngRoute'])


    .config(function(cfpLoadingBarProvider) {
                    cfpLoadingBarProvider.includeSpinner = true;
        })
    .config(['$routeProvider', function($routeProvider) {
        $routeProvider
            .when('/acceso/view/:CalleId',{templateUrl:'views/Calle/detalle.html?nocache='+ new Date().getTime(),controller:'ViewCalleController'})

     
      .otherwise({
      redirectTo: '/'
      });
  }])