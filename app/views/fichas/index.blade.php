@extends('layout.main')

@section('main')
<div class="col-lg-12">
    	<div class="panel panel-primary">
    		<div class="panel-heading">
                <h1 class="panel-title">Lista de Fichas
	                <button class="panel-right btn-primary" onclick="location.href = '/fichas/create'">
                       <span class="glyphicon glyphicon-plus"></span>
                        Incluir

                    </button>
	            </h1>
            </div>
             <div class="panel-body">
            	@include('fichas._lista')
			</div>
        </div>
</div>

@stop