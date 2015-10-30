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

        //Lista candidati
        directives.directive('listacandidati',function(){
            return{
                restrict: 'AE',
                replace: false,
                templateUrl: 'app/candidati/candidatiListView.html'
            }
        });

        //Lista liste
        directives.directive('listaliste',function(){
            return{
                restrict: 'AE',
                replace: false,
                templateUrl: 'app/liste/listeListView.html'
            }
        });

        //Risultati per Sezione Table
        directives.directive('risultatisezione',function(){
            return{
                restrict: 'AE',
                replace: false,
                templateUrl: 'app/common/views/risultatiSezioneTable.html'
            }
        });

        //Risultati per SezioneOne View
        directives.directive('risultaticandidati',function(){
            return{
                restrict: 'AE',
                replace: false,
                templateUrl: 'app/common/views/risultatiCandidatiTable.html'
            }
        });
        directives.directive('risultatisindaci',function(){
            return{
                restrict: 'AE',
                replace: false,
                templateUrl: 'app/common/views/risultatiSindaciTable.html'
            }
        });
        directives.directive('risultatialtrivoti',function(){
            return{
                restrict: 'AE',
                replace: false,
                templateUrl: 'app/common/views/risultatiAltriVotiTable.html'
            }
        });


        //Utils
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