<div class         ="form-body">
    <div class='form-group'>
        {{ Form::label('descricao', 'Descricao:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('descricao', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
        {{ Form::label('encarregado', 'Encarregado:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::text('supervisor', null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class='form-group'>
        {{ Form::label('ativo', 'Ativo:', array('class'=>'col-md-2 control-label')) }}
        <div class='col-md-4'>
            {{ Form::select('ativo',array('1'=>'Sim','0'=>'Não'), null, array('class'=>'form-control')) }}
        </div>
    </div>

    <div class                  ="panel-actions">
        <div class="col-md-offset-3 col-md-9">
            {{ Form::submit('Gravar', array('class' => 'btn btn-success')) }}
            {{ link_to_route('setors.index', 'Cancel', null, array('class' => 'btn btn-primary')) }}
        </div>
    </div>
</div>