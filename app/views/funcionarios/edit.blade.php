@extends('layout.main')

@section('main')
<div class="row ">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption"> <i class="fa fa-reorder"></i>
                    Alterar Funcionario
                </div>
                <div class="tools">
                    <a href="" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="" class="reload"></a>
                    <a href="" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                {{ Form::model($funcionario, array('method' => 'PATCH', 
                                                 'route' => array('funcionarios.update', $funcionario->id) , 
                                                 'class'=>'form-horizontal')) 
                                                 }}
                @include('funcionarios._form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop