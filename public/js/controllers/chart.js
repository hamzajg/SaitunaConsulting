'use strict';
saitunaApp.controller('chartCtrl', ['$scope', function ($scope) {
    console.log($scope);
    $scope.$parent.isIndexPage = false;
        $scope.percent = 100;
        $scope.options = {
            animate:{
                duration:0,
                enabled:false
            },
            barColor:'#2C3E50',
            scaleColor:false,
            lineWidth:20,
            lineCap:'circle'
        };
        $scope.pieChart = {
          data: [5,10,20,15],
          dataLabels:[{"label": "val1", "value": 5}, {"label": "val2", "value": 10},
            {"label": "val3", "value": 20}, {"label": "val4", "value": 15}],
          options: {
            type: 'pie',
            width: 'auto',
            height: '350px',
            sliceColors: ['#22beef','#a2d200','#ffc100','#ff4a43']
          }
        };
    }]);