<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title></title>  
	</head>
	<body>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4></h4>
		</div>            <!-- /modal-header -->
		<div class="modal-body">
			@include('layout.partials._erros_validacao')
			@yield('main')
		</div>            <!-- /modal-body -->

		{{ HTML::script('assets/js/jquery-1.10.2.js') }}
    	{{ HTML::script('assets/js/bootstrap.min.js') }}
    	{{ HTML::script('assets/js/jquery.maskMoney.js') }}
    	{{ HTML::script('assets/js/jquery.maskedinput.js') }}
    	{{ HTML::script('assets/js/jquery.maskedinput.js') }}

    	{{ HTML::script('assets/js/script.js') }}
	</body>
</html>