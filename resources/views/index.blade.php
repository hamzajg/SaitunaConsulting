<!DOCTYPE html>
<html lang="en" ng-app="saitunaApp" ng-controller="MainCtrl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Hamza JGUERIM">

        <title ng-bind="pageTitle"></title>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" type="image/ico" href="favicon.ico" />
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="bower_components/angular-loading-bar/build/loading-bar.css" />
        <link rel="stylesheet" href="bower_components/angular-page-loader/dist/angular-page-loader.css">
        <link rel="stylesheet" type="text/css" href="bower_components/chosen/chosen.css" />

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template -->
        <link href="css/landing-page.css" rel="stylesheet">
    </head>

    <body ng-cloak>

        <!-- Header -->
        <header class="intro-header" style="max-height: 500px">
            <div class="container">
                <div class="row">
                    <div class="intro-message pull-left">
                        <h1>Saituna Consulting</h1>
                        <h3>Landing Page</h3>
                        <hr class="intro-divider">
                    </div>
                </div>
                
                <div class="row text-dark" id="check">
                    <section style="margin-bottom: 15px" ng-include="'views/check.html'"></section>
                </div>
            </div>
        </header>
        <!--  style="max-height: 572px;" -->
        <!-- <header class="intro-header" ng-if="isIndexPage"> 
            <div class="container">
                <div class="row">
                    <div class="intro-message pull-left">
                        <h1>Saituna Consulting</h1>
                        <h3>Landing Page</h3>
                        <hr class="intro-divider">
                    </div>
                </div>
                
                <div class="row text-dark" id="check">
                    <section style="margin-bottom: 15px" ng-include="'views/check.html'"></section>
                </div>
            </div>
        </header> -->
        <!-- Application content -->
        <div id="controls">
            <aside ng-include="'views/nav.html'" id="sidebar"></aside>
        </div>

        <div class="view-container" ui-view-container style="z-index: -1; position: relative;">
            <section ng-view id="content" autoscroll="false"></section>
        </div>
        <section ng-include="'views/footer.html'" id="footer"></section>
        <!-- Page Loader -->
        <page-loader></page-loader>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/angular/angular.min.js"></script>
        <script src="bower_components/lodash/dist/lodash.min.js"></script>
        <script src="bower_components/angular-route/angular-route.min.js"></script>
        <script src="bower_components/angular-resource/angular-resource.min.js"></script>
        <script src="bower_components/angular-animate/angular-animate.min.js"></script>
        <script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
        <script src="bower_components/angular-cookies/angular-cookies.min.js"></script>
        <script src="bower_components/angular-sanitize/angular-sanitize.min.js"></script>
        <script src="bower_components/angular-translate/angular-translate.min.js"></script>
        <script src="bower_components/angular-ui-select/dist/select.min.js"></script>
        <script src="bower_components/angular-translate-loader-static-files/angular-translate-loader-static-files.min.js"></script>
        <script src="bower_components/angular-translate-storage-cookie/angular-translate-storage-cookie.min.js"></script>
        <script src="bower_components/angular-translate-storage-local/angular-translate-storage-local.min.js"></script>

        <script src="bower_components/angular-loading-bar/build/loading-bar.min.js"></script>
        <script src="bower_components/angular-page-loader/dist/angular-page-loader.min.js"></script>
        <script src="bower_components/chosen/chosen.jquery.js"></script>
        <script src="bower_components/angular-chosen-localytics/dist/angular-chosen.min.js"></script>

        <script type="text/javascript" src="js/saitunaApp.js"></script>
        <script type="text/javascript" src="js/controllers/main.js"></script>
    </body>
</html>