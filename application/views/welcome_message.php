<div ng-controller="CInicio">
    <div class="row">
        <div class="col-md-12" id="titulo"><h1>Bienvenido</h1></div>
        <div class="colMenu col-md-4" ng-repeat="(keycat, cat) in vm" ng-if="cat.idmenupadre == 1">
            <h2>{{cat.NombreMenu}}</h2>
            <div class="panel panel-default" ng-repeat="(keysub, sub) in vm" ng-if="sub.idmenupadre==cat.idmenu">
                <div class="panel-body">
                    <a ng-href="<?=site_url()?>{{sub.url}}" title="{{sub.NombreMenu}}">{{sub.NombreMenu}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    app.controller("CInicio", function ($scope, $http) {
        $scope.vm =<?= json_encode($params["vm"]) ?>;
    });
</script>