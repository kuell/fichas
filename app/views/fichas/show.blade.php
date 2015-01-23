<html>
<head>
	<title>{{{ $ficha->nome }}}</title>
	<style type="text/css">
		body{
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		}
		h3 {
		  margin: .67em 0;
		  font-size: 1em;
		}
	</style>

</head>
<body>
	<div>
		<div>
			<address>
		<h2>{{$ficha->nome}}</h2>
		<strong>Pretenção Salarial: </strong>
			<span>R$ {{{ $ficha->pretencao }}}</span>

		<br />
			<h3 align="right">Dados Pessoais</h3><hr />
			  <strong>Sexo: </strong> {{{ $ficha->sexo }}}<br>
			  <strong>Data de Nascimento: </strong> {{{ $ficha->data_nascimento }}} <br />
			  <strong>Idade:</strong> {{{ $ficha->idade }}} anos <br />
			  <strong>Estado Civil: </strong> {{{ $ficha->estado_civil }}}<br>
			  <strong>Endereço: </strong> {{{ $ficha->endereco }}}<br />
			  <strong>Bairro: </strong> {{{$ficha->bairro}}} / 
			  <strong>Cidade: </strong> {{{$ficha->cidade}}}<br>
			  <strong>Naturalidade: </strong> {{{ $ficha->naturalidade }}}    <strong>Nacionalidade: </strong> {{{ $ficha->nacionalidade }}} <br>
			  <strong>Contato: </strong> {{{$ficha->fone}}} | {{{ $ficha->cel}}}<br>
			  
			<h3 align="right">Filiação</h3><hr />
			  <strong>Pai: </strong> {{{$ficha->pai}}}<br>
			  <strong>Mãe: </strong> {{{$ficha->mae}}}<br>

			<h3 align="right">Documentação</h3><hr />
			  <strong>RG: </strong> {{{$ficha->rg}}} {{{ $ficha->emissao }}}<br>
			  <strong>CPF: </strong> {{{$ficha->cpf}}}<br>
			  <strong>Titulo de Eleitor: </strong> {{{$ficha->titulo_eleitor}}} <br>
			  <strong>Reservista: </strong> {{{$ficha->reservista}}} <br>
			  <strong>CTPS: </strong> {{{$ficha->ctps}}} <br>
			  <strong>Pis: </strong> {{{$ficha->pis}}} <br>
				

			<h3 align="right">Nivel de Instrução</h3><hr />
				@if(count($ficha->instrucao))
					@foreach($ficha->instrucao as $inst)
						<strong>Descrição: </strong> {{{ $inst->descricao }}}<br>
						<strong>Instituição: </strong> {{{ $inst->instituicao }}}<br>
						<strong>Ano: </strong> {{{ $inst->ano }}}<br>
						<strong>Concluido: </strong> {{{ $inst->concluido }}}<br> <br />
					@endforeach
				@else
					Nenhum Nivel de Instrução Informado
				@endif
			</address> <br />

			<h3 align="right">Cusos Extracurriculares</h3><hr />
				@if(count($ficha->cursos))
					@foreach($ficha->cursos as $inst)
						<strong>Descrição: </strong> {{{ $inst->descricao }}}<br>
						<strong>Instituição: </strong> {{{ $inst->instituicao }}}<br>
						<strong>Ano: </strong> {{{ $inst->ano }}}<br>
						<strong>Concluido: </strong> {{{ $inst->concluido }}}<br> <br />
					@endforeach
				@else
					Nenhum Curso informado
				@endif
			</address> <br />

			<h3 align="right">Empregos Anteriores</h3><hr />
				@if(count($ficha->empregos))
					@foreach($ficha->empregos as $emprego)
						<strong>Empresa: </strong> {{{ $emprego->empresa }}}<br>
						<strong>Cargo: </strong> {{{ $emprego->cargo }}}<br>
						<strong>Data de Admissão: </strong> {{{ $emprego->data_admissao }}}<br>
						<strong>Data de Demissão: </strong> {{{ $emprego->data_demissao }}}<br> <br />
					@endforeach
				@else
					Nenhum Emprego informado.
				@endif
			</address> <br />

			<h3 align="right">Parentes na Empresa</h3><hr />
				@if(count($ficha->parentes))
					@foreach($ficha->parentes as $parente)
						<strong>Nome: </strong> {{{ $parente->nome }}}<br>
						<strong>Setor: </strong> {{{ $parente->setor }}}<br>
						<strong>Grau de Parentesco: </strong> {{{ $parente->grau }}}<br>
					@endforeach
				@else
					Nenhum Emprego informado.
				@endif
			</address> <br />

			<h3 align="right">Setores Pretendidos</h3><hr />
				@if(count($ficha->setors))
					@foreach($ficha->setors as $setor)
						<strong>Setor: </strong> {{{ $setor->setor->descricao }}}<br>
						<strong>Cargo: </strong> {{{ $setor->cargo }}}<br>
					@endforeach
				@else
					Nenhum Setor informado.
				@endif
			</address> <br />
			
		</div>
	</div> 
</body>
</html>