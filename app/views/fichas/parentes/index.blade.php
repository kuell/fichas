    {{ Form::open(array('url' => 'fichas/parentes/'.$ficha->id, 'class'=>'form-horizontal')) }}
    <div class="row">
        <div class='form-group col-md-12'>
        	{{ Form::label('nome', 'Nome: ') }}
        	<div>
        		{{ Form::text('nome', null, array('class'=>'form-control', 'placeholder'=>'Nome do parente')) }}
        	</div>
        </div>

		<div class="form-group col-md-12">
        	{{ Form::label('grau', 'Grau de Parentesco: ') }}
        	{{ Form::text('grau', null, array('class'=>'form-control', 'placeholder'=>'Grau de parentesco')) }}
        </div>

        <div class="form-group col-md-12">
            {{ Form::label('setor', 'Setor: ') }}
            {{ Form::text('setor', null, array('class'=>'form-control', 'placeholder'=>'Setor')) }}
        </div>
        
 	    <div class    ="form-actions">
            {{ Form::submit('Gravar', array('class' => 'btn btn-info')) }}
        </div>
 	</div>
    {{ Form::close() }}

@if (count($ficha->parentes))
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Ficha_id</th>
				<th>Nome</th>
				<th>Setor</th>
				<th>Grau de parentesco</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ficha->parentes as $parente)
				<tr>
					<td>{{{ $parente->ficha_id }}}</td>
					<td>{{{ $parente->nome }}}</td>
					<td>{{{ $parente->setor }}}</td>
					<td>{{{ $parente->grau }}}</td>
                    <td><a href="/fichas/parentes/{{ $parente->id}}/delete">delete</a></td>
                    <td></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else

@endif
