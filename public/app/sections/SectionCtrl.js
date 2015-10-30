/**
 * Created by vikkio88 on 03/10/2015.
 */
(
    function()
    {
        "use strict";
        angular.module("paltamark")
            .controller(
                "SectionCtrl",
                [
                    "Common",
                    "$scope",
                    "$stateParams",
                    SectionCtrl
                ]);

        function SectionCtrl(
            Common,
            $scope,
            $stateParams
        )
        {

            $stateParams.page = angular.isUndefined($stateParams.page) ? 1 : $stateParams.page;

            var vm = this;
            vm.section = null; //TODO: retrieve as well section description
            vm.items = [];

            $scope.Promessa =
                Common.Get
                (
                    "sections/"+$stateParams.sectionId+"/items?p="+$stateParams.page
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