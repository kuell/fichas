@extends('layout.main')

@section('main')
 {{ Form::open(array('route' => 'fichas.store', 'class'=>'form-horizontal')) }}
<div class    ="row ">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET -->
        <div class        ="panel panel-primary">
            <div class    ="panel-heading">
                <div class="panel-title">
                    Nova Fihca Ficha
                    <button type="button" class="panel-right btn-danger" onclick="location.href = '/fichas'">
                        <span class="glyphicon glyphicon-remove"></span>
                        Sair
                    </button>

                    <button type="submit" class="panel-right btn-primary">
                        <span class=" glyphicon glyphicon-floppy-disk"></span>Gravar</button>
                </div>
            </div>
            <div class="panel-body">
                @include('layout.partials._erros_validacao')

                    @include('fichas._form')

            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@stop