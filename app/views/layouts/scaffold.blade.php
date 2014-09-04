<!DOCTYPE html>
<!-- saved from url=(0073)http://www.keenthemes.com/preview/metronic_admin/layout_language_bar.html -->
<html lang="en" class="no-js">
  <!--<![endif]-   ->
  <!-- BEGIN HEAD -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>SIG | Sistema Interno de Gerenciamento.</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
{{ HTML::style('assets/css/css') }}
{{ HTML::style('assets/css/font-awesome.min.css') }}
{{ HTML::style('assets/css/bootstrap.min.css') }}
{{ HTML::style('assets/css/uniform.default.css') }}
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN THEME STYLES -        -->
{{ HTML::style('assets/css/style-metronic.css') }}
{{ HTML::style('assets/css/style.css') }}
{{ HTML::style('assets/css/style-responsive.css') }}
{{ HTML::style('assets/css/plugins.css') }}
{{ HTML::style('assets/css/default.css') }}
{{ HTML::style('assets/css/custom.css') }}
{{ HTML::style('assets/css/bootstrap-datetimepicker.css') }}
  <!-- END THEME STYLES -->
  <!--<link rel="shortcut icon" href="http://www.keenthemes.com/preview/metronic_admin/favicon.ico"></head> -->
  <!-- END HEAD -  ->
  <!-- BEGIN BODY -->
<body class="page-header-fixed" style="">
  <!-- BEGIN HEADER -->
  <div class="header navbar navbar-fixed-top">
  @include('layouts.header')</div>
  <!-- END HEADER -->
  <div class="clearfix"></div>
  <!-- BEGIN CONTAINER -->
  <div class="page-container">
    @include("layouts.menu")
    @include("layouts.content")
  </div>
  <!--END CONTAINER   -->

{{ HTML::script('assets/js/dc.js') }}
{{ HTML::script('assets/js/jquery-1.10.2.min.js') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/jquery-ui-1.10.3.custom.min.js') }}
{{ HTML::script('assets/js/jquery-migrate-1.2.1.min.js') }}

{{ HTML::script('assets/js/bootstrap-hover-dropdown.min.js') }}
{{ HTML::script('assets/js/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/js/jquery.blockui.min.js') }}
{{ HTML::script('assets/js/jquery.cokie.min.js') }}
{{ HTML::script('assets/js/jquery.uniform.min.js') }}
{{ HTML::script('assets/js/jquery.maskMoney.js') }}
{{ HTML::script('assets/js/jquery.maskedinput.js') }}
{{ HTML::script('assets/js/jquery.maskedinput.js') }}

{{ HTML::script('assets/js/script.js') }}

  <!-- END CORE PLUGINS -->
{{ HTML::script('assets/js/app.js') }}
  <script>
jQuery(document).ready(function() {
   App.init();
});
</script>
  <!-- END JAVASCRIPTS -->

  <!-- END BODY -->
</body>
</html>