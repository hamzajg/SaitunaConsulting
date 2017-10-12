'use strict';

/**
 * @ngdoc function
 * @name saitunaApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the saitunaApp
 */
saitunaApp
  .controller('MainCtrl', function ($scope,  $rootScope, $translate, $location, $interval, $uibModal) {

      /**
       * Translations for the view
       */
      var pageTitleTranslationId = 'index.PAGETITLE';
      var pageContentTranslationId = 'PAGE_CONTENT';

      $translate(pageTitleTranslationId, pageContentTranslationId)
        .then(function (translatedPageTitle, translatedPageContent) {
          $rootScope.pageTitle = translatedPageTitle;
          $rootScope.pageContent = translatedPageContent;
        });

      /**
       * $scope.locale
       */
      $scope.locale = $translate.use();

      $scope.go = function(url) {
      $scope.isIndexPage = false;
        $location.path(url);
      };
      /**
       * Provides info about current route path
       */
      $rootScope.$on('$routeChangeSuccess', function (event, current) {
        $scope.isIndexPage = true;
        if(current.$$route)
          $scope.currentPath = current.$$route.originalPath;
      });

      /**
       * EVENTS
       */
      $rootScope.$on('$translateChangeSuccess', function (event, data) {
        $scope.locale = data.language;
        $rootScope.pageTitle = $translate.instant(pageTitleTranslationId);
        $rootScope.pageContent = $translate.instant(pageContentTranslationId);
      });

    if($translate.proposedLanguage() == "ar")
      $scope.dir = "rtl";
      else
        $scope.dir = "ltr";
    $scope.changeLanguage = function (langKey) {
      $translate.use(langKey);
      $scope.currentLanguage = langKey;
      if(langKey == "ar")
        $scope.dir = "rtl";
        else
          $scope.dir = "ltr";
    };
    $scope.currentLanguage = $translate.proposedLanguage() || $translate.use();
    $scope.currentPath = $location.path();

  }).controller('BookAppointmentCtrl', function ($scope, $uibModal) {
      // Open a modal
      $scope.open = function (size) {
        var modalInstance = $uibModal.open({
          animation: true,
          ariaLabelledBy: 'modal-title',
          ariaDescribedBy: 'modal-body',
          templateUrl: 'myModalContent.html',
          controller: 'ModalInstanceCtrl',
          size: size
        });
      }

      // Datepicker begin
      // Disable weekend selection
      function disabled(data) {
        var date = data.date,
        mode = data.mode;
        return mode === 'day' && (date.getDay() === 0 || date.getDay() === 6);
      }
      $scope.dateOptions = {
        dateDisabled: disabled,
        formatYear: 'yy',
        maxDate: new Date(2020, 5, 22),
        minDate: new Date(),
        startingDay: 1
      };
      $scope.open2 = function() {
        $scope.popup2.opened = true;
      };
      $scope.popup2 = {
        opened: false
      };
      // Datepicker End
  }).controller('ModalInstanceCtrl', function ($scope, $uibModalInstance, $http) {
    // Timepicker begin
    $scope.mytime = new Date().getHours();

    $scope.hstep = 1;
    $scope.mstep = 0;

    $scope.options = {
      hstep: [1, 2, 3],
      mstep: [0]
    };
    $scope.ismeridian = false;
    // Timepicker End
    $scope.ok = function () {
      $http({
          url: "http://5.135.194.226/sendEmail.php",
          method: "GET",
          headers: {'Content-Type': 'application/x-www-form-urlencoded'},
          data: "test"
      }).success(function(data, status, headers, config) {

      }).error(function(data, status, headers, config) {

      });
      $uibModalInstance.close();
    };

    $scope.cancel = function () {
      $uibModalInstance.close();
    };
});