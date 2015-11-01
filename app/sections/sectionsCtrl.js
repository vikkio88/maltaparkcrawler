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

            if(localStorage.getItem("sections") === null) {

                $scope.Promessa =
                    Common.Get
                    (
                        "sections"
                    );

                $scope.Promessa
                    .then
                (
                    function (data) {
                        if (Common.isDebug()) console.log(data.data);
                        vm.sections = data.data;
                        localStorage.setItem("sections",JSON.stringify(vm.sections));
                    },
                    function (data) {
                        console.log(data);
                    }
                );
            } else{
                vm.sections = JSON.parse(localStorage.getItem("sections"));
            }

        }
    }
)();