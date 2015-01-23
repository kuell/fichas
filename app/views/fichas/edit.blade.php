@extends('layout.main')

@section('main')
{{ Form::model($ficha, array('method'=>'PATCH', 'route'=>array('fichas.update', $ficha->id))) }}
<div class    ="row ">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET -->
        <div class        ="panel panel-primary">
            <div class    ="panel-heading">
                <h1 class="panel-title">
                    Alterar Ficha: {{ $ficha->nome }}

                    <button type="button" class="panel-right btn-danger" onclick="location.href = '/fichas'">
                        <span class="glyphicon glyphicon-remove"></span>
                        Sair
                    </button>

                    <a href="#" class="panel-right glyphicon glyphicon-print btn-info" onclick="window.open('/fichas/{{ $ficha->id }}', 'Print', 'channelmode=yes');">
                    Imprimir
                    </a>
                    <a href="#" class="panel-right glyphicon glyphicon-info-sign btn-warning" data-toggle="modal" data-target="#myModal">
                        Informações Adicionais
                    </a>
                    <button type="submit" class="panel-right btn-primary">
                        <span class=" glyphicon glyphicon-floppy-disk"></span>Gravar
                    </button>

                </h1>
            </div>
            <div class="panel-body">
                @include('layout.partials._erros_validacao')


                    @include('fichas._form')

            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informações Adicionais</h4>
      </div>
      <div class="modal-body">
        <iframe src="/fichas/informacao/{{ $ficha->id }}" width="840" height="500" frameborder="0" allowtransparency="true"></iframe>
      </div>
    </div>
  </div>
</div>
@stop

@section('scripts')
    $("input[name=rg]").removeClass('validaRg')
@stop


