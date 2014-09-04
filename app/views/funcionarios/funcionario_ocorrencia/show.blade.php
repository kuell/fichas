@extends('layouts.scaffold')

@section('main')

<h1>Listar Funcionario_ocorrencium</h1>

<p>{{ link_to_route('funcionario_ocorrencia.index', 'Return to all funcionario_ocorrencia') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Funcionario_id</th>
				<th>Motivo</th>
				<th>Data_ocorrencia</th>
				<th>Data_retorno</th>
				<th>Inativa_funcionario</th>
				<th>Obs</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $funcionario_ocorrencium->funcionario_id }}}</td>
					<td>{{{ $funcionario_ocorrencium->motivo }}}</td>
					<td>{{{ $funcionario_ocorrencium->data_ocorrencia }}}</td>
					<td>{{{ $funcionario_ocorrencium->data_retorno }}}</td>
					<td>{{{ $funcionario_ocorrencium->inativa_funcionario }}}</td>
					<td>{{{ $funcionario_ocorrencium->obs }}}</td>
                    <td>{{ link_to_route('funcionario_ocorrencia.edit', 'Edit', array($funcionario_ocorrencium->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('funcionario_ocorrencia.destroy', $funcionario_ocorrencium->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
