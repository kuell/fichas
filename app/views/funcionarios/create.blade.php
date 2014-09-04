@extends('layout.main')

@section('main')

@include('funcionarios._topo')

<div class    ="row ">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET -->
        <div class        ="panel panel-default">
            <div class    ="panel-heading">
                <div class="caption">
                    Adicionar Funcionario
                </div>
            </div>
            <div class="panel-body">
                @include('layout.partials._erros_validacao')

        {{ Form::open(array('route' => 'funcionarios.store', 'class'=>'form-horizontal')) }}
        	   @include('funcionarios._form')
        {{ Form::close() }}
                
            </div>
	    </div>
    </div>

@stop


