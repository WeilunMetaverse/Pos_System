var app = angular.module('myApp', ['ngRoute']);


app.config(function($routeProvider) {
  $routeProvider

  .when('/', {
    templateUrl : 'pages/prod1.html',
    controller  : 'Production1'
  })

  .when('/prod2', {
    templateUrl : 'pages/prod2.html',
    controller  : 'Production2'
  })

  .when('/prod3', {
    templateUrl : 'pages/prod3.html',
    controller  : 'Production3'
  })

  .when('/allprod', {
    templateUrl : 'pages/allprod.html',
    controller  : 'AllProduction'
  })

  .when('/test', {
    templateUrl : 'pages/test.html',
    controller  : 'Test'
  })

  .when('/test2', {
    templateUrl : 'pages/test2.html',
    controller  : 'Testnumber'
  })


  

  .otherwise({redirectTo: '/'});
});

app.controller('Production1', function($scope) {
  $scope.message = 'Production 1 status condition';
});

app.controller('Production2', function($scope) {
  $scope.message = 'Production 2 status condition';
});

app.controller('Production3', function($scope) {
  $scope.message = 'Production 3 status condition';
});

app.controller('AllProduction', function($scope) {
  $scope.message = 'All Production status condition';
});

app.controller('Test', function($scope) {
  $scope.message = '';
});


/*app.controller('Testnumber',function($scope){

  $scope.anothers = [
    {
      name : "table",
      rate: "50"
    },
    {
      name : "pen",
      rate: "30"
    },
    {
      name : "example",
      rate: "15"
    },
    {
      name : "nothing",
      rate: "0"
    }
  ];

  
});we can also use below method assign a json file that contain of the data and we able to retrieve using below function*/ 

app.controller('Testnumber',['$scope', '$http',function($scope, $http){

  $http.get('anothers.json').success(function(data){
      $scope.anothers = data; //http://43.74.21.94/v1/angularjs/prodprogress/prod1,prod2,prod3&output=JSON
      //console.log($scope.anothers);
  });

  /*$http.get('https://api.plos.org/search?q=title:%22Drosophila%22%20and%20body:%22RNA%22&fl=id&start=100&rows=100').success(function(data){
    $scope.anothers = data; //http://43.74.21.94/v1/angularjs/prodprogress/prod1,prod2,prod3&output=JSON
    console.log($scope.anothers.response.docs);
  });*/

  /*$http.get('http://43.74.21.94/v1/angularjs/prodprogress/prod1,prod2,prod3').success(function(data){
    $scope.anothers = data; //http://43.74.21.94/v1/angularjs/prodprogress/prod1,prod2,prod3&output=JSON
    console.log($scope.anothers);
  });cannot*/

    $scope.removeAnother= function(another){
      var removedAnother = $scope.anothers.indexOf(another);
      $scope.anothers.splice(removedAnother, 1);
    }

    $scope.addAnother = function(){
      $scope.anothers.push(anothers.json,{
        name: $scope.newanother.name,
        type: $scope.newanother.type,
        rate: $scope.newanother.rate,
        available: true
      });
    }
  
}]);

