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
            var vm = this;
            vm.items = [];

            $scope.Promessa =
                Common.Get
                (
                    "sections/"+$stateParams.sectionId+"/items"
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