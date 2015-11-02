/**
 * Created by vincenzo.ciaccio on 07/10/2015.
 */

(
    function() {
        "use strict";
        var app_constants = angular.module("app.constant",
            [
            ]
        );

        app_constants.constant('config', {
            nascondiListe: true,
            apiUrl: "http://127.0.0.1:8080/paltamark/api/",
            //apiUrl: "http://127.0.0.1/public/api/",
            env: "DEBUG"
        });

    }
)();