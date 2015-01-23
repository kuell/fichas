<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Sexo</th>
                                            <th>Idade</th>
                                            <th>Estado Civil</th>
                                            <th>Carteira de Trabalho</th>
                                            <th>Pis</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($fichas as $ficha)
                                        <tr class="odd gradeX">
                                            <td>{{ $ficha->nome }}</td>
                                            <td>{{ $ficha->sexo  }}</td>
                                            <td>{{ $ficha->idade }} anos</td>
                                            <td class="center">{{ $ficha->estadoCivilDesc($ficha->estado_civil) }}</td>
                                            <td class="center">{{ $ficha->ctps }}</td>
                                            <td>{{ $ficha->pis }}</td>
                                            <td>
                                                <a href="/fichas/{{ $ficha->id }}/edit">
                                               <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                </a>
                                                <a href="#" rule="menuitem" tabindex="-1" onclick="window.open('/fichas/{{ $ficha->id }}', 'Print', 'channelmode=yes');">
                                                <span class="glyphicon glyphicon-print"></span>
                                                </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>