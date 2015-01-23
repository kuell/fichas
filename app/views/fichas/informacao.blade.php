<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/jquery.maskedinput.js') }}
	{{ HTML::script('js/jquery.maskMoney.js') }}
	{{ HTML::script('js/script.js') }}
</head>
<body>

<!-- BEGIN CONTENT -->
<div class ="page-content-wrapper">
		@if (Session::has('message'))
		<div class="alert alert-warning fade in">
			<button type="button" class="btn close" data-dismiss="alert" aria-hidden="true">
				×
			</button>
			<strong>
				{{ Session::get('message') }}
			</strong>
			@if ($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error">:message</li>')) }}
				</ul>
			@endif
		</div>
</div>
		@endif
<!-- END CONTENT -->


<div>
	{{ link_to_route('fichas.instrucao', 'Nivel de Instrucao', $ficha->id, ['class'=>'btn btn-primary']) }}
	{{ link_to_route('fichas.curso', 'Cursos Extra', $ficha->id, ['class'=>'btn btn-primary']) }}
	{{ link_to_route('fichas.emprego', 'Empregos Anteriores', $ficha->id, ['class'=>'btn btn-primary']) }}
	{{ link_to_route('fichas.parente', 'Familiares na Empresa', $ficha->id, ['class'=>'btn btn-primary']) }}
	{{ link_to_route('fichas.setor', 'Pretensão de Setores / Funções', $ficha->id, ['class'=>'btn btn-primary']) }}
</div>
<div class="col-md-11">
	@yield('content')
</div>

</body>
</html>