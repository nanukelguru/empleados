<div ng-controller="CListado">
    <div class="page-header"><h1>Ambientes</h1></div>
    <form name="frmMaestroFiltro" class="form-inline" ng-submit="filtrar(frmMaestroFiltro.$valid)">
        <div class="panel panel-default">
            <div class="panel-body">
                <jqgrid config="grid"></jqgrid>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    app.directive('jqgrid', function () {

        $.jgrid.defaults.mtype = "POST";
        $.jgrid.defaults.datatype = "json";
        $.jgrid.defaults.page = 1;
        $.jgrid.defaults.autowidth = true;
        $.jgrid.defaults.shrinkToFit = false;
        $.jgrid.defaults.height = 250;
        $.jgrid.defaults.rowNum = 20;
        $.jgrid.defaults.scrollPopUp = true;
        $.jgrid.defaults.viewrecords = true;
        $.jgrid.defaults.scroll = 1;
        $.jgrid.defaults.loadonce = true;
        $.jgrid.defaults.emptyrecords = 'No hay registros para mostrar';
        $.jgrid.defaults.styleUI = 'Bootstrap';
        $.jgrid.defaults.pager = "#jqGridPager";
        $.jgrid.defaults.responsive = true;

        return {
            restrict: 'E',
            replace: true,
            scope: {
                config: '=',
                data: '=',
            },
            template: '<div><table></table><div id="jqGridPager"></div></div>',
            link: function (scope, element, attrs) {
                var table;
                scope.$watch('config', function (newValue) {
                    element.children().empty();
                    table = $(element).find("table");
                    //element.append(table);
                    $(table).jqGrid(newValue);
                    $(table).jqGrid('filterToolbar');
                    $(table).jqGrid('navGrid',"#jqGridPager", {                
                        search: false,
                        add: false,
                        edit: false,
                        del: false,
                        refresh: true
                    });
                });
                /*scope.$watch('data', function (newValue, oldValue) {
                 var i;
                 for (i = oldValue.length - 1; i >= 0; i--) {
                 $(table).jqGrid('delRowData', i);
                 }
                 for (i = 0; i < newValue.length; i++) {
                 $(table).jqGrid('addRowData', i, newValue[i]);
                 }
                 });*/
                
            }
        };
    });
    app.controller("CListado", function ($scope, $http) {
        $scope.grid = {
            url: '<?= site_url('Empresas/Search') ?>',
            colModel: [
                {label: 'IdEmpresa', name: 'IdEmpresa', key: true, hidden: true, width:75},
                {label: 'Razon Social', name: 'RazonSocial', width:300},
                {label: 'Dirección', name: 'Direccion', width:300},
                {label: 'Contacto', name: 'NombreContacto', width: 200},
                {label: 'RUC', name: 'RUC', wdth:200},
            ],
        };
    });
</script>