/**
 * Created by vincenzo.ciaccio on 07/10/2015.
 */

(
    function() {
        "use strict";
        var app_routes = angular.module("app.routes",
            [
                "ui.router",
                "ncy-angular-breadcrumb"
            ]
        );

        app_routes.config(
            [
                "$stateProvider",
                "$urlRouterProvider",
                "$locationProvider",
                function(
                    $stateProvider,
                    $urlRouterProvider,
                    $locationProvider
                )
                {
                    /*
                    Sfortunatamente non funziona perch laravel crede che siano richieste GET
                    $locationProvider.html5Mode({
                        enabled: true,
                        requireBase: false
                    });
                    */

                    //Questo invece permette di avere un hashbang
                    $locationProvider.hashPrefix("!");

                    $urlRouterProvider.otherwise("/sections");

                    $stateProvider
                    //Sections
                        .state("sections",
                            {
                                url:"/sections",
                                templateUrl: "app/sections/sectionsListView.html",
                                controller: "SectionsCtrl as vm",
                                ncyBreadcrumb: {
                                    label: 'Sections'
                                }
                            }
                        )
                        .state("sectionOne",
                            {
                                url: "/sections/:sectionId/items?page=1",
                                templateUrl: "app/sections/sectionDetailView.html",
                                controller: "SectionCtrl as vm",
                                ncyBreadcrumb: {
                                    parent: 'sections',
                                    label: 'Section Items'
                                }
                            })

                    //Items
                        .state("itemOne",
                            {
                                url: "/items/:itemId",
                                templateUrl: "app/items/itemDetailView.html",
                                controller: "ItemCtrl as vm",
                                ncyBreadcrumb: {
                                    parent: 'items',
                                    label: 'Item Details'
                                }
                            });

                }]
        );

    }
)();