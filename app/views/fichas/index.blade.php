@extends('layout.main')

@section('main')
	<div class="row">
		@include('fichas._topo')
	</div>
	<div class="row">
		<div class="col-lg-12">
	    <div class="panel panel-default">
	    	<div class="panel-heading">
		    	<div class="row">
	                <div class="col-lg-11">Lista de Fichas</div>
	                <div class="col-lg-1">
	                    <a href="/fichas/create">
	                        <span class="glyphicon glyphicon-plus"></span>
	                    </a>
	                </div>
	            </div>
            </div> 	<!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                @include('fichas._lista')
	            </div>
	            <!-- /.table-responsive -->
			</div>
		</div>
	</div>

@stop