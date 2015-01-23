@extends('fichas.informacao')

@section('content')
    {{ Form::open(array('url' => 'fichas/cursos/'.$ficha->id, 'class'=>'form-horizontal')) }}

    	{{ Form::label('descricao', 'Descrição: ') }}
        {{ Form::text('descricao', null, array('class'=>'form-control', 'placeholder'=>'Descrição do curso')) }}

    	{{ Form::label('instituicao', 'Instituição de ensino: ') }}
    	{{ Form::text('instituicao', null, array('class'=>'form-control', 'placeholder'=>'Instituição')) }}

       	{{ Form::label('ano', 'Ano: ') }}
       	{{ Form::text('ano', null, array('class'=>'form-control numero', 'placeholder'=>'Ano')) }}

      	{{ Form::label('concluido', 'Concluido: ') }}
        	{{ Form::radio('concluido', 1, false) }} Sim
        	{{ Form::radio('concluido', 0, false) }} Não

        {{ Form::submit('Gravar', array('class' => 'btn btn-info')) }}

    {{ Form::close() }}

@if (count($ficha->cursos))
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Descricao do Curso</th>
				<th>Instituicao</th>
				<th>Ano</th>
				<th>Concluido</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ficha->cursos as $curso)
				<tr>
					<td>{{{ $curso->descricao }}}</td>
					<td>{{{ $curso->instituicao }}}</td>
					<td>{{{ $curso->ano }}}</td>
					<td>{{{ $curso->concluido }}}</td>
                    <td>
                        <a href="/fichas/cursos/{{ $curso->id }}/delete" class="glyphicon glyphicon-trash">
                        </a>
                    </td>
                    <td></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endif

@stop