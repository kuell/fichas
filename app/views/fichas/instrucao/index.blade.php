
{{ Form::open(array('class'=>'form-horizontal', 'ng-controller'=>'InstrucaoCtrl')) }}
    <div class="row">
        <div class='form-group col-md-12'>
        	{{ Form::label('descricao', 'Descrição: ') }}
        	<div>
        		{{ Form::input('text', null, null, array('class'=>'form-control', 'placeholder'=>'Descrição do grau de ensino', 'ng-model'=>'descricao')) }}
        	</div>
        </div>

		<div class="form-group col-md-12">
        	{{ Form::label('instituicao', 'Instituição de ensino: ') }}
        	{{ Form::input('text', null, null, array('ng-model'=>'instituicao', 'class'=>'form-control', 'placeholder'=>'Instituição')) }}
        </div>

        <div class="form-group col-md-12">
           	<div class="col-md-6">
               	{{ Form::label('ano', 'Ano: ') }}
               	{{ Form::input('text', null, null, array('ng-model'=>'ano', 'class'=>'form-control', 'placeholder'=>'Ano')) }}
        	</div>
            <div class="form-group col-md-6">
              	{{ Form::label('concluido', 'Concluido: ') }}
            	<div class="form-control">
                	{{ Form::radio('concluido', 1, false, array('ng-model'=>'concluido')) }} Sim
                	{{ Form::radio('concluido', 0, false, array('ng-model'=>'concluido')) }} Não
                </div>
            </div>
      	</div>
 	    <div class    ="form-actions">
            {{ Form::input('button', null, 'Gravar',  array('class' => 'btn btn-info', 'ng-click'=>'addObj()')) }}
        </div>
 	</div>
    {{ Form::close() }}

<table class="table table-hover" ng-controller="InstrucaoCtrl">
        <thead>
            <tr>
                <th>Ficha_id</th>
                <th>Descricao</th>
                <th>Instituicao</th>
                <th>Ano</th>
                <th>Concluido</th>
            </tr>
        </thead>

        <tbody>
                <tr ng-repeat="obj in obts">
                    <td>%%obj.ficha_id%%</td>
                    <td>%%obj.descricao%%</td>
                    <td>%%obj.instituicao%%</td>
                    <td>%%obj.ano%%</td>
                    <td>%%obj.concluido%%</td>
                    <td>{{ link_to("%%p.id%%/delete", 'delete', array('class'=>'btn btn-danger')) }}</td>
                    <td></td>
                </tr>
        </tbody>
    </table>

{{ HTML::script("assets/js/angular.min.js") }}

<script type="text/javascript">
    function InstrucaoCtrl($scope, $http){
        $scope.obts = {{ $ficha->instrucao  }};

        $scope.addObj =  function(){
            alert( $scope.instituicao);
                        $http.post('/fichas/instrucao/{{ $ficha->id }}', {
                                                'descricao': $scope.descricao, 
                                                'instituicao': $scope.instituicao, 
                                                'ano': $scope.ano,
                                                'concluido': $scope.concluido}
                                    ).success(function(data, status, headers, config) {
                                                    alert("Ola Deu certo")
                            })
                };
    };
</script>


 
