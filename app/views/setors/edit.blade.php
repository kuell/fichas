@extends('layout.main')

@section('main')

@include('setors._topo')

<div class    ="row ">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET -->
        <div class        ="panel panel-default">
            <div class    ="panel-heading">
                <div class="caption">
                    Alterar Setor
                </div>
            </div>
            <div class="panel-body">

                @include('layout.partials._erros_validacao')

                {{ Form::model($setor, array('method' => 'PATCH',
                                                 'route' => array('setors.update', $setor->id) ,
                                                 'class'=>'form-horizontal'))
                                                 }}

                    @include('setors._form')


                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>

@stop
