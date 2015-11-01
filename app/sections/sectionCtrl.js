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
            vm.section = {};
            vm.section.id = $stateParams.sectionId;
            if(!(localStorage.getItem("sections") === null)) {
                var sections = (JSON.parse(localStorage.getItem("sections")));
                var i = 0, len = sections.length;
                for (; i < len; i++) {
                    if (+sections[i].id == +vm.section.id) {
                        vm.section.description = sections[i].description;
                    }
                }
            }else{
                vm.section.description = "Section";
            }
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