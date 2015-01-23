<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Solicitação de Emprego</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/AdminLTE.css') }}

    <style type="text/css">
      .panel-right {

  border: 0.05em solid lightgray;

  border-radius: 0.25em 0.25em;

  margin-top: -0.2em;

  padding: 0.3em;

  font-size: 0.9em;

  float: right;

}



  .panel-title a,

  .panel-title a:active,

  .panel-title a:visited {

    text-decoration: none;

  }
    </style>

    <!-- Custom styles for this template -->
    {{ HTML::style('css/navbar-static-top.css') }}
  </head>

  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Frizelo Frigorificos Ltda.</a>
        </div>
      </div>
    </nav>
    <div class="container col-md-12">
      @yield('main')
    </div> <!-- /container -->
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/jquery.maskMoney.js') }}
    {{ HTML::script('js/jquery.maskedinput.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/jquery.dataTables.js') }}
    {{ HTML::script('js/script.js') }}

    <script type="text/javascript">
      $(document).ready(function() {
          $('#dataTables-example').dataTable();
      });
      @yield('scripts')
    </script>
  </body>
</html>