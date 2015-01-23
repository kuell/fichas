@extends('fichas.informacao')

@section('content')

    {{ Form::open(array('url' => '/fichas/empregos/'.$ficha->id, 'class'=>'form-horizontal')) }}

       	{{ Form::label('empresa', 'Empresa: ') }}
    	{{ Form::text('empresa', null, array('class'=>'form-control', 'placeholder'=>'Nome da Empresa')) }}

       	{{ Form::label('cargo', 'Cargo: ') }}
       	{{ Form::text('cargo', null, array('class'=>'form-control', 'placeholder'=>'Cargo')) }}

       	{{ Form::label('data_admissao', 'Data de Admissão: ') }}
       	{{ Form::text('data_admissao', null, array('class'=>'form-control data', 'placeholder'=>'Data de Admissão')) }}

        {{ Form::label('data_demissao', 'Data de Demissão: ') }}
        {{ Form::text('data_demissao', null, array('class'=>'form-control data', 'placeholder'=>'Data de Admissão')) }}

        {{ Form::label('motivo', 'Motivo da saida: ') }}
        {{ Form::textarea('motivo', null, array('class'=>'form-control', 'placeholder'=>'Motivo da Saida', 'rows'=>'3')) }}

        {{ Form::submit('Gravar', array('class' => 'btn btn-info')) }}

    {{ Form::close() }}

@if (count($ficha->empregos))
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Empresa</th>
				<th>Cargo</th>
				<th>Data Admissão</th>
				<th>Data Demissão</th>
                <th>Motivo da Saida</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ficha->empregos as $emprego)
				<tr>
					<td>{{{ $emprego->empresa }}}</td>
					<td>{{{ $emprego->cargo }}}</td>
					<td>{{{ $emprego->data_entrada }}}</td>
					<td>{{{ $emprego->data_saida }}}</td>
                    <td>{{{ $emprego->motivo }}}</td>
                    <td>
                        <a href="/fichas/empregos/{{ $emprego->id }}/delete" class="glyphicon glyphicon-trash">
                        </a>
                    </td>
                    <td></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endif

@stop