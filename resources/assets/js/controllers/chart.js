'use strict';
/**
 * @ngdoc function
 * @name saitunaApp.controller:ChartCtrl
 * @description
 * # ChartCtrl
 * Controller of the saitunaApp
 */
saitunaApp.controller('ChartCtrl', ['$scope', function ($scope) {
    console.log($scope);
    $scope.$parent.isIndexPage = false;
    $scope.options = {
        legend: {
          display: true,
          position: 'bottom'
        },
        responsive: true,
        tooltipEvents: [],
        showTooltips: true,
        labels: true,
        tooltipCaretSize: 0,
    };
    $scope.labels = ["Download Sales", "In-Store Sales", "Mail-Order Sales"];
    $scope.data = [300, 500, 100];

    $scope.Color= ['#90EE90', '#FF6600', '#8080FF'];
}]);