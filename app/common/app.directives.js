/**
 * Created by vincenzo.ciaccio on 08/10/2015.
 */
(
    function() {
        "use strict";
        var directives = angular.module("app.directives",
            [
            ]
        );

        //Utils
        directives.directive('pagination',function(){
            return{
                restrict: 'AE',
                replace: false,
                templateUrl: 'app/common/views/pagination.html'
            }
        });

        directives.directive('filtrofull',function(){
            return{
                restrict: 'AE',
                replace: false,
                templateUrl: 'app/common/views/filtrofull.html'
            }
        });

        directives.directive('roundimagesample',function(){
            return{
                rescrict: 'AE',
                replace:false,
                templateUrl: 'app/common/views/roundimagesample.html'
            }
        });


        //test one
        directives.directive('jumbosample',function(){
            return{
                restrict: 'AE',
                replace: true,
                templateUrl: 'app/test/test.html'
            }
        })
    }
)();