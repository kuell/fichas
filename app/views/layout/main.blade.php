<!DOCTYPE html>
<html ng-app="App">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIG - Sistema Interno de Gerenciamento</title>

    <!-- Core CSS - Include with every page -->
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.css')}}

    <!-- Page-Level Plugin CSS - Dashboard -->
    {{ HTML::style('assets/css/plugins/morris/morris-0.4.3.min.css')}}
    {{ HTML::style('assets/css/plugins/timeline/timeline.css')}}

    <!-- SB Admin CSS - Include with every page -->
    {{ HTML::style('assets/css/sb-admin.css') }}

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Frizelo Frigorificos Ltda.</a>
            </div>
            <!-- /.navbar-header -->
            @include('layout.partials._menu_usuario')
            <!-- /.navbar-top-links -->
            @include('layout.partials._menu_navega')
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
             @yield('main')
        </div>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    {{ HTML::script('assets/js/jquery-1.10.2.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/plugins/metisMenu/jquery.metisMenu.js') }}
    {{ HTML::script('assets/js/jquery.maskMoney.js') }}
    {{ HTML::script('assets/js/jquery.maskedinput.js') }}
    {{ HTML::script('assets/js/jquery.maskedinput.js') }}

    {{ HTML::script('assets/js/script.js') }}
    {{ HTML::script('assets/js/angular.min.js') }}

    <!-- Page-Level Plugin Scripts - Tables -->
    {{ HTML::script('assets/js/plugins/dataTables/jquery.dataTables.js') }}
    {{ HTML::script('assets/js/plugins/dataTables/dataTables.bootstrap.js') }}

    <!-- SB Admin Scripts - Include with every page -->
    {{ HTML::script('assets/js/sb-admin.js') }}

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nenhum registro retornado.",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponivel",
            "infoFiltered": "(filtro aplicado em _MAX_ total registros)",
            "previousSearch":" Ola"
        }
    });
    });
    </script>
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


    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->

</body>

</html>
