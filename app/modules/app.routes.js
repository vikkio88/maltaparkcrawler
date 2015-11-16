/**
 * Created by vincenzo.ciaccio on 07/10/2015.
 */

(function () {
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
                function ($stateProvider,
                          $urlRouterProvider,
                          $locationProvider) {
                    /*
                     Unfortunately is not working with the .htaccess
                     $locationProvider.html5Mode({
                     enabled: true,
                     requireBase: false
                     });
                     $locationProvider.baseHref = "/paltamark/";
                     */

                    //Hashbang notation
                    $locationProvider.hashPrefix("!");

                    $urlRouterProvider.otherwise("/sections");

                    $stateProvider
                    //Sections
                        .state("sections",
                            {
                                url: "/sections",
                                templateUrl: "app/sections/sectionsListView.html",
                                controller: "SectionsCtrl as vm",
                                ncyBreadcrumb: {
                                    label: 'Sections'
                                }
                            }
                        )
                        .state("sectionOne",
                            {
                                url: "/sections/:sectionId/items?page",
                                templateUrl: "app/sections/sectionDetailView.html",
                                controller: "SectionCtrl as vm",
                                ncyBreadcrumb: {
                                    parent: 'sections',
                                    label: 'Section Items'
                                }
                            })

                        //Search
                        .state("search",
                            {
                                url: "/search?query&page",
                                templateUrl: "app/search/searchResultView.html",
                                controller: "SearchCtrl as vm",
                                ncyBreadcrumb: {
                                    label: 'Search Results'
                                }
                            })

                        //Jobs
                        .state("jobs",
                            {
                                url: "/jobs?page",
                                templateUrl: "app/keepmeposted/jobsListView.html",
                                controller: "JobsCtrl as vm",
                                ncyBreadcrumb: {
                                    label: 'PeekMePosted Jobs'
                                }
                            })

                        //Items
                        .state("itemOne",
                            {
                                url: "/sections/:sectionId/items/:itemId",
                                templateUrl: "app/items/itemDetailView.html",
                                controller: "ItemCtrl as vm",
                                ncyBreadcrumb: {
                                    parent: 'sectionOne',
                                    label: 'Item Details'
                                }
                            });

                }]
        );

    })();