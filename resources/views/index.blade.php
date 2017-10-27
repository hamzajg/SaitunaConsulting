<!DOCTYPE html>
<html lang="<%currentLanguage%>" ng-app="saitunaApp" ng-controller="MainCtrl" dir="<%dir%>">
    <head>
        <base href="/" />
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
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <link href="css/landing-page.css" rel="stylesheet">
        <style>
            .back-to-top {
                 opacity: .85;
                border-radius: 0px;
                cursor: pointer;
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none;
            }
        </style>
    </head>

    <body ng-cloak>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"><span class="fa fa-angle-up"></span></a>

        <!-- Header -->
        <header ng-class="{'intro-header': !currentPath.includes('/funding'), 'intro-header-service-1': currentPath.includes('/funding')}" style="height:640px" ng-if="isIndexPage">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-10 intro-message pull-left text-left" style="background-color: rgba(250, 250, 250, 0.7);">
                        <h2 style="color: #26526f; font-weight: 400; font-size: 40px">Individuelle Beratung für Gründer &amp; Unternehmen</h2>                        
                        <p><span style="background-color: transparent; color: rgb(0, 47, 92); font-family: Lato;">Wir helfen Ihnen Ihre unternehmerischen Ziele zu erreichen.</span></p>
                        <button class="btn btn-lg btn-primary" style="border-radius: 50px; background-color: rgba(21, 140, 228, 1) !important;">Jetzt kostenlos beraten lassen</button>
                    </div>
                </div>
                
                <div class="row text-dark" id="check" ng-if="!currentPath.includes('/funding')">
                    <section style="z-index: 1; margin-bottom: 15px; width: 100%" ng-include="'views/check.html'"></section>
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

        <div class="view-container" ui-view-container style="position: relative;">
            <section ng-view id="content" autoscroll="false"></section>
        </div>
        <section ng-include="'views/footer.html'" id="footer"></section>
        <!-- Page Loader -->
        <page-loader></page-loader>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function(){
                $(window).scroll(function () {
                        if ($(this).scrollTop() > 50) {
                            $('#back-to-top').fadeIn();
                        } else {
                            $('#back-to-top').fadeOut();
                        }
                    });
                    // scroll body to 0px on click
                    $('#back-to-top').click(function () {
                        $('#back-to-top').tooltip('hide');
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                    
                    $('#back-to-top').tooltip('show');

            });
        </script>

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
        <script src="bower_components/jquery.easy-pie-chart/dist/angular.easypiechart.min.js"></script>
        <script src="bower_components/jquery.sparkline.bower/dist/jquery.sparkline.min.js"></script>
        <script src="bower_components/chart.js/dist/Chart.min.js"></script>
        <script src="bower_components/angular-chart.js/dist/angular-chart.min.js"></script>

        <script type="text/javascript" src="js/saitunaApp.js"></script>
        <script type="text/javascript" src="js/controllers/main.js"></script>
        <script type="text/javascript" src="js/directives/sparkline.js"></script>
        <script type="text/javascript" src="js/controllers/chart.js"></script>
        <script type="text/javascript" src="js/controllers/check.js"></script>
    </body>
</html>