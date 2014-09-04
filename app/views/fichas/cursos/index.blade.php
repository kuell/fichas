    {{ Form::open(array('url' => 'fichas/cursos/'.$ficha->id, 'class'=>'form-horizontal')) }}
    <div class="row">
        <div class='form-group col-md-12'>
        	{{ Form::label('descricao', 'Descrição: ') }}
        	<div>
        		{{ Form::text('descricao', null, array('class'=>'form-control', 'placeholder'=>'Descrição do curso')) }}
        	</div>
        </div>

		<div class="form-group col-md-12">
        	{{ Form::label('instituicao', 'Instituição de ensino: ') }}
        	{{ Form::text('instituicao', null, array('class'=>'form-control', 'placeholder'=>'Instituição')) }}
        </div>

        <div class="form-group col-md-12">
           	<div class="col-md-6">
               	{{ Form::label('ano', 'Ano: ') }}
               	{{ Form::text('ano', null, array('class'=>'form-control', 'placeholder'=>'Ano')) }}
        	</div>
            <div class="form-group col-md-6">
              	{{ Form::label('concluido', 'Concluido: ') }}
            	<div class="form-control">
                	{{ Form::radio('concluido', 1, false) }} Sim
                	{{ Form::radio('concluido', 0, false) }} Não
                </div>
            </div>
      	</div>
 	    <div class    ="form-actions">
            {{ Form::submit('Gravar', array('class' => 'btn btn-info')) }}
        </div>
 	</div>
    {{ Form::close() }}
      
@if (count($ficha->cursos))
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Ficha_id</th>
				<th>Descricao do Curso</th>
				<th>Instituicao</th>
				<th>Ano</th>
				<th>Concluido</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ficha->cursos as $curso)
				<tr>
					<td>{{{ $curso->ficha_id }}}</td>
					<td>{{{ $curso->descricao }}}</td>
					<td>{{{ $curso->instituicao }}}</td>
					<td>{{{ $curso->ano }}}</td>
					<td>{{{ $curso->concluido }}}</td>
                    <td><a href="/fichas/cursos/{{ $curso->id}}/delete">delete</a></td>
                    <td></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	Nenhum registro retornado.
@endif

