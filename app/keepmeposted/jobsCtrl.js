(
    function()
    {
        "use strict";
        angular.module("paltamark")
            .controller(
                "JobsCtrl",
                [
                    "Common",
                    "$scope",
                    "$stateParams",
                    JobsCtrl
                ]);

        function JobsCtrl(
            Common,
            $scope,
            $stateParams
        )
        {

            $stateParams.page = angular.isUndefined($stateParams.page) ? 1 : $stateParams.page;
            var vm = this;
            vm.kmpUrl = Common.kmpUrl();
            vm.imgUrl = Common.kmpImgUrl();
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
                    'jobs?p='+$stateParams.page
                );

            $scope.Promessa
                .then
                (
                    function(data)
                    {
                        if(Common.isDebug()) console.log(data.data);
                        vm.items = data.data.Jobs;
                    },
                    function(data)
                    {
                        console.log(data);
                    }
                );

        }
    }
)();