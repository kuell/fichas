@extends('layouts.scaffold')

@section('main')
<legend>Controlar Ocorrencia</legend>
<p>{{ link_to_route('funcionario_ocorrencia.create', 'Incluir Ocorrencia', "" ,array('class' => 'btn btn-primary')) }}</p>

@if ($funcionario_ocorrencia->count())
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Funcionario</th>
				<th>Data ocorrencia</th>
				<th>Diagnostico</th>
				<th>Conduta</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($funcionario_ocorrencia as $funcionario_ocorrencium)
				<tr>
					<td>{{{ Funcionario::find($funcionario_ocorrencium->funcionario_id)->nome }}}</td>
					<td>{{{ $funcionario_ocorrencium->data_ocorrencia }}}</td>
					<td>{{{ $funcionario_ocorrencium->diagnostico }}}</td>
					<td>{{{ $funcionario_ocorrencium->conduta }}}</td>
                    <td>{{ link_to_route('funcionario_ocorrencia.edit', 'Edit', array($funcionario_ocorrencium->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('funcionario_ocorrencia.destroy', $funcionario_ocorrencium->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick'=>'javascript:return confirm(\'Tem certeza que deseja excluir esta ocorrencia?\')')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	Nenhum registro retornado.
@endif

@stop
