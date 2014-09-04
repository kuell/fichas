@extends('layouts.scaffold')

@section('main')

{{ Form::model($funcionario_ocorrencium, array('method' => 'PATCH', 'route' => array('funcionario_ocorrencia.update', $funcionario_ocorrencium->id))) }}
<fieldset>
<legend>Alterar Funcionario_ocorrencium</legend>
    <div class="control-group">
            {{ Form::label('funcionario_id', 'Colaborador:', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::select('funcionario_id', array('0'=>'Select ...')+Funcionario::all()->lists('nome','id'),null, array('class'=>'input-block-level')) }}
            </div>
        </div>
       

        <div class="control-group">
            {{ Form::label('data_ocorrencia', 'Data Ocorrencia:', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::text('data_ocorrencia', date('d/m/Y H:i'), array('readonly')) }}
            </div>
        </div>

          <div class="control-group">
            {{ Form::label('acidente_trabalho', 'Acidente de Trabalho:', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::radio('acidente_trabalho', 1) }} Sim
            {{ Form::radio('acidente_trabalho', 0) }} Não
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('diagnostico', 'Diagnostico:', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::textarea('diagnostico',null , array('class'=>'input-block-level')) }}
            </div>
        </div>
        
        <div class="control-group">
            {{ Form::label('conduta', 'Conduta:', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::text('conduta',null , array('class'=>'input-block-level')) }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('destino', 'Destino:', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::text('destino',null , array('class'=>'input-block-level')) }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('inativa_funcionario', 'Inativa funcionario:', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::radio('inativa_funcionario', 1) }} Sim
            {{ Form::radio('inativa_funcionario', 0) }} Não
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('obs', 'Informações Adicionais:', array('class'=>'control-label')) }}
            <div class="controls">
            {{ Form::textarea('obs',null , array('class'=>'input-block-level')) }}
            </div>
        </div>

		<div class="form-actions">
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('funcionario_ocorrencia.index', 'Cancel', '', array('class' => 'btn')) }}
		</div>
	</ul>
{{ Form::close() }}
</fieldset>
@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
