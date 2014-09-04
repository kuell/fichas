@extends('layouts.scaffold')

@if(Setor::all())
	<script type="text/javascript">
		alert("É necessario que seja cadastrado algum setor!")
	</script>

		{{{ route('setors.create') }}}
@endif

@section('main')

<h1>Listar Funcionario</h1>

<p>{{ link_to_route('funcionarios.index', 'Return to all funcionarios') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nome</th>
				<th>Sexo</th>
				<th>Data_nascimento</th>
				<th>Idade</th>
				<th>Endereco</th>
				<th>Bairro</th>
				<th>Fone</th>
				<th>Cel</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $funcionario->nome }}}</td>
					<td>{{{ $funcionario->sexo }}}</td>
					<td>{{{ $funcionario->data_nascimento }}}</td>
					<td>{{{ $funcionario->idade }}}</td>
					<td>{{{ $funcionario->endereco }}}</td>
					<td>{{{ $funcionario->bairro }}}</td>
					<td>{{{ $funcionario->fone }}}</td>
					<td>{{{ $funcionario->cel }}}</td>
                    <td>{{ link_to_route('funcionarios.edit', 'Edit', array($funcionario->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('funcionarios.destroy', $funcionario->id))) }}
                            {{ Form::submit('<span class="glyphicon glyphicon-trash"></span>', array('class' => 'btn btn-danger', 'onclick'=>'javascript:return confirm(\'Tem certeza que deseja excluir este funcionarios?\')')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
