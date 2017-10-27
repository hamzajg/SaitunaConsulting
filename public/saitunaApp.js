'use strict';

// Declare app level module which depends on views, and components
var saitunaApp = angular.module('saitunaApp', [
  'ngAnimate',
  'ngRoute',
  'ngCookies',
  'ngSanitize',
  'ngResource',
  'localytics.directives',
  'ui.select',
  'angular-loading-bar',
  'angular-page-loader',
  'ui.bootstrap',
  //'easypiechart',
  //'angular-flot',
  'chart.js',
  //'angular.morris',
 'pascalprecht.translate',
])
.run(function($timeout, $rootScope) {

    $timeout(function() { // simulate long page loading
        $rootScope.isLoading = false; // turn "off" the flag
    }, 3000)

})
.config(['ChartJsProvider', function (ChartJsProvider) {
  // Configure all charts
  ChartJsProvider.setOptions({
    //animation: false,
    //responsive: false
  });

}])
.config(function ($interpolateProvider) {

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

})
.config(['cfpLoadingBarProvider', function (cfpLoadingBarProvider) {cfpLoadingBarProvider.includeSpinner = false;/*cfpLoadingBarProvider.latencyThreshold = 500;*/}])
//angular-language
.config(['$translateProvider', function($translateProvider) {
  $translateProvider.useStaticFilesLoader({
    prefix: 'languages/',
    suffix: '.json'
  });
  $translateProvider.useLocalStorage();
  $translateProvider.preferredLanguage('de');
  $translateProvider.useSanitizeValueStrategy(null);
}])
.config(['$locationProvider', '$routeProvider', function($locationProvider, $routeProvider) {
  $routeProvider.when('/', {
    				templateUrl : 'views/home.html'
    			}).when('/funding', {
    				templateUrl : 'views/services/service1.html'
    			}).when('/funding', {
    				templateUrl : 'views/services/service1.html'
    			}).when('/funding', {
    				templateUrl : 'views/services/service1.html'
    			}).when('/funding', {
    				templateUrl : 'views/services/service1.html'
    			}).when('/contact', {
    				templateUrl : 'views/contact.html'
    			}).when('/check', {
    				templateUrl : 'views/ckeck.html'
    			}).when('/checkResult', {
    				templateUrl : 'views/checkResult.html'
    			}).otherwise({
          redirectTo: '/'
        });
        // use the HTML5 History API
        $locationProvider.html5Mode(true);
}]);