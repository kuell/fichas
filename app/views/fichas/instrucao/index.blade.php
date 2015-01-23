@extends('fichas.informacao')

@section('content')
{{ Form::open(array('route'=>['fichas.instrucao.store', $ficha->id] ,'class'=>'form')) }}

	    {{ Form::label('descricao', 'Descrição: ') }}

        {{ Form::select('descricao',[   ''    =>'Selecione ...',
                                            'ENSINO FUNDAMENTAL'    => 'ENSINO FUNDAMENTAL',
                                            'ENSINO MEDIO'          => 'ENSINO MÉDIO',
                                            'ENSINO SUPERIOR'       => 'ENSINO SUPERIOR',
                                            'POS GRADUACAO'         => 'POS GRADUAÇÃP'],
                                            NULL,
                                            ['class' => 'form-control col-md-5',
                                             'placeholder' => 'Descrição do grau de ensino']) }}
	   {{ Form::label('instituicao', 'Instituição de ensino: ') }}
	   {{ Form::text('instituicao', null, array('ng-model'=>'instituicao', 'class'=>'form-control', 'placeholder'=>'Instituição')) }}

    {{ Form::label('ano', 'Ano: ') }}
    {{ Form::text('ano', null, array('class'=>'form-control numero', 'placeholder'=>'Ano')) }}

  	{{ Form::label('concluido', 'Concluido: ') }}

	{{ Form::radio('concluido', 1, false, array('ng-model'=>'concluido')) }} Sim
	{{ Form::radio('concluido', 0, false, array('ng-model'=>'concluido')) }} Não

    {{ Form::input('submit', null, 'Gravar',  array('class' => 'btn btn-info', 'ng-click'=>'addObj()')) }}
    {{ Form::close() }}
<table class="table table-hover" ng-controller="InstrucaoCtrl">
        <thead>
            <tr>
                <th>Descricao</th>
                <th>Instituicao</th>
                <th>Ano</th>
                <th>Concluido</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ficha->instrucao as $instrucao)
                <tr ng-repeat="obj in obts">
                    <td>{{ $instrucao->descricao }}</td>
                    <td>{{ $instrucao->instituicao }}</td>
                    <td>{{ $instrucao->ano }}</td>
                    <td>{{ $instrucao->concluido }}</td>
                    <td>
                        <a href="/fichas/instrucao/{{ $instrucao->id }}/delete" class="glyphicon glyphicon-trash">
                        </a>
                    </td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</script>

@stop

