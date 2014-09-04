@extends('layouts.scaffold')

@section('main')

<h1>Listar Setor</h1>

<p>{{ link_to_route('setors.index', 'Return to all setors') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Descricao</th>
				<th>Encarregado</th>
				<th>Ativo</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $setor->descricao }}}</td>
					<td>{{{ $setor->encarregado }}}</td>
					<td>{{{ $setor->ativo }}}</td>
                    <td>{{ link_to_route('setors.edit', 'Edit', array($setor->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('setors.destroy', $setor->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick'=>'javascript:return confirm(\'Tem certeza que deseja excluir este setors?\')')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
