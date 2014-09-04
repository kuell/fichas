<div class="form-body">
    <div class='form-group'>
    {{ Form::label('nome', 'Nome:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('nome', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
    {{ Form::label('sexo', 'Sexo:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::select('sexo',array('0'=>'Masculino','1'=>'Feminino'), null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
    {{ Form::label('data_nascimento', 'Data de nascimento:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('data_nascimento', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
        {{ Form::label('idade', 'Idade:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('idade', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
        {{ Form::label('endereco', 'Endereco:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('endereco', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
        {{ Form::label('bairro', 'Bairro:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('bairro', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
        {{ Form::label('fone', 'Fone:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('fone', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
        {{ Form::label('cel', 'Cel:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('cel', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
        {{ Form::label('setor', 'Setor:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::select('setor_id', array('0'=>'Selecione ...')+Setor::all()->lists('descricao', 'id'), null, array('class'=>'form-control')) }}
        </div>
    </div>


    <div class="form-actions fluid">
        <div class="col-md-offset-3 col-md-9">
            {{ Form::submit('Gravar', array('class' => 'btn blue')) }}
            {{ link_to_route('funcionarios.index', 'Cancelar', null, array('class' => 'btn red')) }}
        </div>
    </div>
</div>		