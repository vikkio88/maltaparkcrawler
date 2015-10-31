/**
 * Created by vikkio88 on 03/10/2015.
 */
(
    function()
    {
        "use strict";
        angular.module("paltamark")
            .controller(
                "ItemCtrl",
                [
                    "Common",
                    "$scope",
                    "$stateParams",
                    ItemCtrl
                ]);

        function ItemCtrl(
            Common,
            $scope,
            $stateParams
        )
        {
            var vm = this;
            vm.item = null;

            $scope.Promessa =
                Common.Get
                (
                    "items/"+$stateParams.itemId
                );

            $scope.Promessa
                .then
                (
                    function(data)
                    {
                        if(Common.isDebug()) console.log(data.data);
                        vm.item = data.data;
                    },
                    function(data)
                    {
                        console.log(data);
                    }
                );

        }
    }
)();