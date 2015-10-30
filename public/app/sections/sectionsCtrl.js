/**
 * Created by vikkio88 on 03/10/2015.
 */
(
    function()
    {
        "use strict";
        angular.module("paltamark")
            .controller(
            "SectionsCtrl",
            [
                "Common",
                "$scope",
                SectionsCtrl
            ]);

        function SectionsCtrl(
            Common,
            $scope
            )
        {
            var vm = this;
            vm.sections = [];

            $scope.Promessa =
            Common.Get
            (
                "sections"
            );

            $scope.Promessa
                .then
            (
                function(data)
                {
                    if(Common.isDebug()) console.log(data.data);
                    vm.sections = data.data;
                },
                function(data)
                {
                    console.log(data);
                }
            );

        }
    }
)();