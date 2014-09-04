<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Sexo</th>
                                            <th>Idade</th>
                                            <th>Estado Civil</th>
                                            <th>Carteira de Trabalho</th>
                                            <th>Pis</th>
                                            <th>Adicionar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fichas as $ficha)
                                        <tr class="odd gradeX">
                                            <td>{{ $ficha->nome }}</td>
                                            <td>{{ $ficha->sexo  }}</td>
                                            <td>{{ $ficha->idade }} anos</td>
                                            <td class="center">{{ $ficha->estado_civil }}</td>
                                            <td class="center">{{ $ficha->ctps }}</td>
                                            <td>{{ $ficha->pis }}</td>
                                            <td>
                                                <div class="dropdown">
                                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    Ações
                                                    <span class="caret"></span>
                                                  </button>
                                                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation">
                                                        {{ link_to_route('fichas.edit', 'Editar', array($ficha->id), array('tabindex'=>'-1', 'rule'=>'menuitem')) }}
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#" rule="menuitem" tabindex="-1" onclick="window.open('/fichas/{{ $ficha->id }}', 'Print', 'channelmode=yes');">Visualizar</a>
                                                    </li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation">
                                                        {{ Form::open(array('method' => 'Excluir', 'route' => array('fichas.destroy', $ficha->id))) }}
                                                        {{ Form::submit('Delete', array('class'=>'btn btn-danger ', 'rule'=>'menuitem', 'tabindex'=>'-1', 'onclick'=>'javascript:return confirm(\'Tem certeza que deseja excluir este fichas?\')')) }}
                                                    {{ Form::close() }}
                                                    </li>
                                                  </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>