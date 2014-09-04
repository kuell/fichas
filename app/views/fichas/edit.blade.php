@extends('layout.main')

@section('main')

@include('fichas._topo')

<div class    ="row ">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET -->
        <div class        ="panel panel-default">
            <div class    ="panel-heading">
                <div class="row">
                        <div class="col-lg-11">Lista de Fichas</div>
                        <div class="col-lg-1">
                            <a href="/fichas/create">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <a href="#" onclick="window.open('/fichas/{{ $ficha->id }}', 'Print', 'channelmode=yes');">
                                <span class="glyphicon glyphicon-print"></span>
                            </a>
                        </div>
                    </div>
            </div>
            <div class="panel-body">

            <!-- Button trigger modal -->
            {{ link_to('#', 'Informações Adicionais',  array('class'=>'btn btn-primary',
                                                                     'data-toggle'  =>  'modal', 
                                                                     'data-target'  =>  '.modal')) }}

            @include('layout.partials._erros_validacao')

                {{ Form::model($ficha, array('method' => 'PATCH',
                                                 'route' => array('fichas.update', $ficha->id) ,
                                                 'class'=>'form-horizontal'))
                                                 }}
                    
                    @include('fichas._form')

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

<div class="modal fade" id="window" data-backdrop="static">
   <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Informações Adicionais</h4>
            </div>            <!-- /modal-header -->
            <div class="modal-body">

                <div class="tabbable"> <!-- Only required for left/right tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Nivel de Instrução</a></li>
                        <li><a href="#tab2" data-toggle="tab">Cursos Extracurriculares</a></li>
                        <li><a href="#tab3" data-toggle="tab">Empregos Anteriores</a></li>
                        <li><a href="#tab4" data-toggle="tab">Parentes na Empresa</a></li>
                        <li><a href="#tab5" data-toggle="tab">Setores Pretendidos</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <p> @include('fichas.instrucao.index') </p>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <p> @include('fichas.cursos.index') </p>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <p> @include('fichas.empregos.index') </p>
                        </div>
                        <div class="tab-pane" id="tab4">
                            <p> @include('fichas.parentes.index') </p>
                        </div>
                        <div class="tab-pane" id="tab5">
                            <p> @include('fichas.setors.index') </p>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </div>
</div>


@stop


