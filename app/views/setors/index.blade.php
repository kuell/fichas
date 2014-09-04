@extends('layout.main')

@section('main')
	@include('setors._topo')

	<div class            ="row">
        <div class     ="col-lg-12">
        	<div class    ="panel panel-default">
            	<div class="panel-heading">
                	<div class="row">
                        <div class="col-lg-11">Lista de Setores</div>
                            <div class="col-lg-1">
                                <a href="setors/create" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </a>
                        </div>
                    </div>
                </div>
     <!-- /.panel-heading -->
            <div class    ="panel-body">
                <div class="table-responsive">
                @if ($setors->count())
                	<table class="table table-striped">
                    	<thead>
                        	<tr>
                            	<th>Descricao</th>
                                <th>Encarregado</th>
                                <th>Ativo</th>
                            </tr>
                        </thead>
                        <tbody>
                @foreach ($setors as $setor)
                            <tr class="odd gradeX">
	                            <td>{{{ $setor->descricao }}}</td>
	                            <td>{{{ $setor->supervisor }}}</td>
	                            <td>
	                            	@if($setor->ativo)
										Sim
									@else
										Não
									@endif
	                            </td>
	                            <td>
		                            	{{ link_to_route('setors.edit', 'Edit', array($setor->id), array('class' => 'btn btn-info btn-sm')) }}
		                        </td>
		                        <td>
		                        	{{ Form::open(array('method' => 'DELETE', 'route' => array('setors.destroy', $setor->id))) }}
				                    	{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-sm', 'onclick'=>'javascript:return confirm(\'Tem certeza que deseja excluir este setors?\')')) }}
				                    {{ Form::close() }}
	                            </td>
                        	</tr>
                @endforeach
                        </tbody>
                    </table>
                @else
                	<div class="alert alert-success">
                        Não existem setores cadastrados.
                    </div>
                @endif
                </div>
                            <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop