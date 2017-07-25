//http://viralpatel.net/blogs/angularjs-routing-and-views-tutorial-with-example/
//Define an angular module for our app
var homenewsApp = angular.module('homeNewsApp', []);
//Define Routing for app
homenewsApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/categories', {
	templateUrl: 'categories',
	controller: 'categoriesController'
      }).
      when('/articles', {
	templateUrl: 'articles',
	controller: 'articlesController'
      }).
      when('/dashboard', {
	templateUrl: 'dashboard',
	controller: 'dashboardController'
      }).
      otherwise({
	redirectTo: '/dashboard'
      });
}]);


homenewsApp.controller('categoriesController', function($scope) {
    $( "#content" ).empty();
	$scope.message = 'This is Add new order screen';	
});


homenewsApp.controller('articlesController', function($scope) {
	$( "#content" ).empty();
	$scope.message = 'This is Show orders screen';
});


homenewsApp.controller('dashboardController', function($scope) {
	$scope.message = 'This is Show orders screen';
});

