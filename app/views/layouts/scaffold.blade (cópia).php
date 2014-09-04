
<!DOCTYPE html>
<html lang="ptbr">
  <head>
    <meta charset="utf-8">
    <title>SIG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    {{ HTML::style('assets/css/bootstrap.css') }}
        <style type="text/css">
        body {
          padding-top: 60px;
          padding-bottom: 40px;
        }
        .sidebar-nav {
          padding: 9px 0;
        }

        @media (max-width: 980px) {
          /* Enable use of floated navbar text */
          .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
          }
        }
      </style>


    {{ HTML::style('assets/css/bootstrap-responsive.css') }}
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->


    @if ($errors->any())
      <script type="text/javascript">
        alert('{{ $errors->all()[0] }}');
      </script>
    @endif

</head>

  <body>
    @include('layouts.topo')

     <div class="container-fluid">
        <div class="row-fluid">
          @include('layouts.menu')
          @include('layouts.content')
          
      </div><!--/row-->

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('assets/js/jquery.js') }}
    {{ HTML::script('assets/js/script.js') }}

    {{ HTML::script('assets/js/bootstrap-transition.js') }}
    {{ HTML::script('assets/js/bootstrap-alert.js') }}
    {{ HTML::script('assets/js/bootstrap-modal.js') }}
    {{ HTML::script('assets/js/bootstrap-dropdown.js') }}
    {{ HTML::script('assets/js/bootstrap-scrollspy.js') }}
    {{ HTML::script('assets/js/bootstrap-tab.js') }}
    {{ HTML::script('assets/js/bootstrap-tooltip.js') }}
    {{ HTML::script('assets/js/bootstrap-popover.js') }}
    {{ HTML::script('assets/js/bootstrap-button.js') }}
    {{ HTML::script('assets/js/bootstrap-collapse.js') }}
    {{ HTML::script('assets/js/bootstrap-carousel.js') }}
    {{ HTML::script('assets/js/bootstrap-typeahead.js') }}
    {{ HTML::script('assets/js/jquery.maskedinput.js') }}
    {{ HTML::script('assets/js/jquery.maskMoney.js') }}
    
  </body>
</html>
