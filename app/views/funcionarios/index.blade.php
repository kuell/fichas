@extends('layout.main2')

@section('main')
<div class="row">

@include('funcionarios._topo')

	<div class            ="row">
    <div class     ="col-lg-12">
        <div class    ="panel panel-default">
            	<div class="panel-heading">
                	<div class="row">
                        <div class="col-lg-11">Lista de Funcionarios</div>
                            <div class="col-lg-1">
                                <a href="funcionarios/create" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </a>
                            </div>
                    </div>
                </div>
     <!-- /.panel-heading -->
            <div class    ="panel-body">
                <div class="table-responsive">
                    @include('funcionarios._lista')            <!-- /.table-responsive -->
                </div>
            <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@stop