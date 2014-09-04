<html ng-app>
    <head>
        <title>AngularJS - Tableless</title>
        <script src="http://code.angularjs.org/1.0.1/angular-1.0.1.min.js"></script>
         <script>
        var App = angular.module('App',[]);

        App.config(function($interpolateProvider) {
            $interpolateProvider.startSymbol('%%');
            $interpolateProvider.endSymbol('%%');
        });
        function ListaComprasController($scope) {
        $scope.itens = [
        {produto: 'Leite', quantidade: 2, comprado: false},
        {produto: 'Cerveja', quantidade: 12, comprado: false}
    ];
}

    </script>

    </head>
    <body>
        <input type="text" ng-model="nome">
        <p>Olá, Tableless! Meu nome é: %% nome %%</p>
    </body>
</html>