{{ Form::open(array('url' => 'fichas/setors/'.$ficha->id, 'class'=>'form-horizontal')) }}
    <div class="row">
        <div class='form-group col-md-12'>
        	{{ Form::label('nome', 'Nome: ') }}
        	<div>
        		{{ Form::select('setor_id', array('' => 'Selecione ...') + Setor::all()->lists('descricao', 'id'), null, array('class'=>'form-control')) }}
        	</div>
        </div>

		<div class="form-group col-md-12">
        	{{ Form::label('cargo', 'Cargo pretendido: ') }}
        	{{ Form::text('cargo', null, array('class'=>'form-control', 'placeholder'=>'Cargo pretendido')) }}
        </div>
        
 	    <div class    ="form-actions">
            {{ Form::submit('Gravar', array('class' => 'btn btn-info')) }}
        </div>
 	</div>
{{ Form::close() }}

@if (count($ficha->setors))
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Ficha_id</th>
				<th>Setor</th>
				<th>Cargo</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ficha->setors as $setor)
				<tr>
					<td>{{{ $setor->ficha_id }}}</td>
					<td>{{{ $setor->setor->descricao }}}</td>
					<td>{{{ $setor->cargo }}}</td>
                    <td><a href="/fichas/setors/{{ $setor->id}}/delete">delete</a></td>
                    <td></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else

@endif

