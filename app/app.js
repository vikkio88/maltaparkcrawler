/**
 * Created by vikkio88 on 02/10/2015.
 */
(
    function(){
      "use strict";
        var app = angular.module("paltamark",
            [
                "app.constant",
                "app.routes",
                "app.common",
                "app.directives",
                "cgBusy"
            ]
        );

        //Filtro per UcFirst
        app.filter('capitalize',
            function(){
                return function(input){
                    return (!!input) ? input.charAt(0).toUpperCase()+input.substr(1).toLowerCase() : "";
                }
            }
        );

        app.filter('kmpDateFormatter',
            function(){
                return function(input){
                    return eval(input.toString().replace('/','').replace('/',''));
                }
            }
        );



        //Configurazioni Varie
        //cgBusy
        app.value('cgBusyDefaults',{
            message:'Loading...',
            delay: 300,
            minDuration: 300
        });

    }
)();
