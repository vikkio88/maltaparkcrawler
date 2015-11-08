/**
 * Created by vikkio88 on 03/10/2015.
 */
(
    function()
    {
        "use strict";
        angular.module("paltamark")
            .controller(
                "SearchCtrl",
                [
                    "Common",
                    "$scope",
                    "$stateParams",
                    SearchCtrl
                ]);

        function SearchCtrl(
            Common,
            $scope,
            $stateParams
        )
        {

            $stateParams.page = angular.isUndefined($stateParams.page) ? 1 : $stateParams.page;
            $stateParams.query = angular.isUndefined($stateParams.query) ? "" : $stateParams.query;

            var vm = this;
            vm.section = {};

            vm.section.description = "Search Results";

            vm.items = [];

            vm.currentPage = parseInt($stateParams.page);
            vm.pages = [];
            var i = 0, len = 10;
            for(;i<len; i++){
                vm.pages.push(vm.currentPage + i)
            }

            $scope.Promessa =
                Common.Get
                (
                    "search?q="+$stateParams.query+"&p="+$stateParams.page
                );

            $scope.Promessa
                .then
                (
                    function(data)
                    {
                        if(Common.isDebug()) console.log(data.data);
                        vm.items = data.data;
                    },
                    function(data)
                    {
                        console.log(data);
                    }
                );

        }
    }
)();