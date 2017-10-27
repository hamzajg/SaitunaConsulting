'use strict';
/**
 * @ngdoc function
 * @name saitunaApp.controller:CheckCtrl
 * @description
 * # CheckCtrl
 * Controller of the saitunaApp
 */
saitunaApp.controller('CheckCtrl', ['$scope', '$resource', function ($scope, $resource) {
    $scope.citiesgermany = [];
    var citiesgermanyJSON = $resource('/js/controllers/citiesgermany.json');

    $scope.citiesgermany = citiesgermanyJSON.query();
    $scope.citiesgermany.$promise.then(function (result) {
        $scope.citiesgermany = result;
    });
}]);