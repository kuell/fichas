<html>
	<head>
		<title></title>

		<style type="text/css">
		*{
			font-family: Verdana;
		}
		table{
			font-size: 14px;
			border: 1px solid;
		}

		table th{
			border-bottom: .5px solid;
			text-align: left;
		}
		span strong{
			font-size: 20px;

			}	
		</style>
	</head>
	<body>
	<p>
		<table cellpadding="0" cellspacing="0" style="width: 100%;">
			<caption>
					<span style="font-size:20px;"><strong>Dados Pessoais</strong></span>
			</caption>
				<tbody>
					<tr>
						<td align="center" rowspan="8" style="width:180px; height: 150px; ">
							@if($ficha->img)
								<img alt="Sem Imagem" src="" style="width: 105px; height: 140px; align: center; " />
							@else
								<img alt="Sem Imagem" src="semfoto.jpg" style="width: 105px; height: 140px;" />
							@endif
						</td>
						<td>
							<strong>Nome:&nbsp;</strong>{{ $ficha->nome }}</td>
					</tr>
					<tr>
						<td>
							<strong>Data Nascimento:&nbsp;</strong>{{ $ficha->data_nascimento }} - {{ $ficha->idade }} anos</td>
					</tr>
					<tr>
						<td>
							<strong>Estado Civil:</strong> {{ $ficha->estado_civil }}</td>
					</tr>
					<tr>
						<td>
							<strong>Endereco:</strong> {{ $ficha->endereco }}</td>
					</tr>
					<tr>
						<td>
							<strong>Bairro:</strong> {{ $ficha->bairro }}</td>
					</tr>
					<tr>
						<td>
							<strong>Naturalidade:</strong> {{ $ficha->naturalidade }}</td>
					</tr>
					<tr>
						<td>
							<strong>Nacionalidade:</strong> {{ $ficha->nacionalidade }}</td>
					</tr>
					<tr>
						<td>
							<strong>Contato:</strong> {{ $ficha->contato }} - {{ $ficha->contato }}</td>
					</tr>
				</tbody>
		</table>
	</p>
	<p>
		<table  cellpadding="1" cellspacing="1" style="width: 100%;">
			<caption>
					<span style="font-size:20px;"><strong>Documentação</strong></span>
			</caption>
				<tbody>
					<tr>
						<td style="width: 20%;"><strong>RG:</strong> {{ $ficha->rg }}</td>
						<td style="width: 20%;"><strong>CPF:</strong> {{ $ficha->cpf }}</td>
					</tr>
					<tr>
						<td style="width: 20%;"><strong>Titulo de Eleitor:</strong> {{ $ficha->titulo }}</td>
						<td style="width: 20%;"><strong>Reservista:</strong> {{ $ficha->reservista }}</td>
					</tr>
					<tr>
						<td style="width: 20%;"><strong>CTPS:</strong> {{ $ficha->ctps }}</td>
						<td style="width: 20%;"><strong>PIS:</strong> {{ $ficha->pis }}</td>
					</tr>
				</tbody>
		</table>
	</p>

		<p>
		<table cellpadding="1" cellspacing="1" style="width: 100%;">
			<caption>
					<span style="font-size:20px;"><strong>Filiação</strong></span>
			</caption>
			<tbody>
				<tr>
					<td style="width: 20%;"><strong>Nome do Pai:</strong> {{ $ficha->pai }}</td>
					<td style="width: 20%;"><strong>Nome da Mãe:</strong> {{ $ficha->mae }}</td>
				</tr>
			</tbody>
		</table>
		</p>
	<p>
		@if(count($ficha->instrucao))
			<table cellpadding="1" cellspacing="1" style="width: 100%;">
			<caption>
					<span style="font-size:20px;"><strong>Nivel de Instrução</strong></span>
			</caption>
				<tbody>
					<tr>
						<th>Descrição</th>
						<th>Instituição</th>
						<th style="width: 20%;">Ano</th>
						<th style="width: 20%;">Concluido</th>
					</tr>
						@foreach($ficha->instrucao as $inst)
							<tr>
								<td>{{{ $inst->descricao }}} </td>
								<td>{{{ $inst->instituicao }}}</td>
								<td>{{{ $inst->ano }}}</td>
								<td>{{{ $inst->concluido }}}</td>
							</tr>
						@endforeach
				</tbody>
			</table>
		@endif
	</p>

	<p>
		@if(count($ficha->cursos))
			<table cellpadding="1" cellspacing="1" style="width: 100%;">
			<caption>
					<span style="font-size:20px;"><strong>Cursos Extracurriculares</strong></span>
			</caption>
				<tbody>
					<tr>
						<th>Descrição</th>
						<th>Instituição</th>
						<th style="width: 20%;">Ano</th>
						<th style="width: 20%;">Concluido</th>
					</tr>
						@foreach($ficha->cursos as $curso)
							<tr>
								<td>{{{ $curso->descricao }}} </td>
								<td>{{{ $curso->instituicao }}}</td>
								<td>{{{ $curso->ano }}}</td>
								<td>{{{ $curso->concluido }}}</td>
							</tr>
						@endforeach
				</tbody>
			</table>
		@endif
	</p>

	<p>
		@if(count($ficha->empregos))
			<table cellpadding="1" cellspacing="1" style="width: 100%;">
				<caption>
					<span style="font-size:20px;"><strong>Empregos Anteriores</strong></span>
				</caption>
				<tbody>
					<tr>
						<th>Empresa</th>
						<th>Cargo</th>
						<th style="width: 20%;">Admissão</th>
						<th style="width: 20%;">Demissão</th>
						<th style="width: 20%;">Motivo saida</th>
					</tr>
						@foreach($ficha->empregos as $emprego)
							<tr>
								<td>{{{ $emprego->empresa }}} </td>
								<td>{{{ $emprego->cargo }}}</td>
								<td>{{{ $emprego->data_admissao }}}</td>
								<td>{{{ $emprego->data_demissao }}}</td>
								<td>{{{ $emprego->motivo }}}</td>
							</tr>
						@endforeach
				</tbody>
			</table>
		@endif
	</p>

	<p>
		@if(count($ficha->parentes))
			<table cellpadding="1" cellspacing="1" style="width: 100%;">
				<caption>
					<span style="font-size:20px;"><strong>Parentes na Empresa</strong></span>
				</caption>
				<tbody>
					<tr>
						<th>Nome</th>
						<th>Setor</th>
						<th>Grau de Parentesco</th>
					</tr>
						@foreach($ficha->parentes as $parente)
							<tr>
								<td>{{{ $parente->nome }}} </td>
								<td>{{{ $parente->setor }}}</td>
								<td>{{{ $parente->grau }}}</td>
							</tr>
						@endforeach
				</tbody>
			</table>
		@endif
	</p>

	<p>
		@if(count($ficha->setors))
			<table cellpadding="1" cellspacing="1" style="width: 100%;">
				<caption>
					<span style="font-size:20px;"><strong>Setores Pretendidos</strong></span>
				</caption>
				<tbody>
					<tr>
						<th>Setor</th>
						<th>Cargo</th>
					</tr>
						@foreach($ficha->setors as $setor)
							<tr>
								<td>{{{ $setor->setor->descricao }}} </td>
								<td>{{{ $setor->cargo }}}</td>
							</tr>
						@endforeach
				</tbody>
			</table>
		@endif
	</p>
	<p>
		Entrevistado em: {{ $ficha->created_at }}
	</p>

	</body>
</html>
