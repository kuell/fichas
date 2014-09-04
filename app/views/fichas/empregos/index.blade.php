    {{ Form::open(array('url' => 'fichas/empregos/'.$ficha->id, 'class'=>'form-horizontal')) }}
    <div class="row">
        <div class='form-group col-md-12'>
        	{{ Form::label('empresa', 'Empresa: ') }}
        	<div>
        		{{ Form::text('empresa', null, array('class'=>'form-control', 'placeholder'=>'Nome da Empresa')) }}
        	</div>
        </div>

		<div class="form-group col-md-12">
        	{{ Form::label('cargo', 'Cargo: ') }}
        	{{ Form::text('cargo', null, array('class'=>'form-control', 'placeholder'=>'Cargo')) }}
        </div>

        <div class="form-group col-md-12">
           	<div class="col-md-6">
               	{{ Form::label('data_admissao', 'Data de Admissão: ') }}
               	{{ Form::text('data_admissao', null, array('class'=>'form-control data', 'placeholder'=>'Data de Admissão')) }}
        	</div>

            <div class="col-md-6">
                {{ Form::label('data_demissao', 'Data de Demissão: ') }}
                {{ Form::text('data_demissao', null, array('class'=>'form-control data', 'placeholder'=>'Data de Admissão')) }}
            </div>
      	</div>
        <div class="form-group col-md-12">
            {{ Form::label('motivo', 'Motivo da saida: ') }}
            {{ Form::text('motivo', null, array('class'=>'form-control', 'placeholder'=>'Cargo')) }}
        </div>

 	    <div class    ="form-actions">
            {{ Form::submit('Gravar', array('class' => 'btn btn-info')) }}
        </div>
 	</div>
    {{ Form::close() }}
      
@if (count($ficha->empregos))
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Ficha_id</th>
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
					<td>{{{ $emprego->ficha_id }}}</td>
					<td>{{{ $emprego->empresa }}}</td>
					<td>{{{ $emprego->cargo }}}</td>
					<td>{{{ $emprego->data_entrada }}}</td>
					<td>{{{ $emprego->data_saida }}}</td>
                    <td>{{{ $emprego->motivo }}}</td>
                    <td><a href="/fichas/empregos/{{ $emprego->id}}/delete">delete</a></td>
                    <td></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	
@endif
