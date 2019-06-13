@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Pet</title>
	
	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="css/pet.css"/>
	
	<!-- JavaScript da Página -->
	<script src="js/pet.js"></script>
</head>
	
<body>
	<div class="w3-main">
		Imagens de {{$pet->nome}}
		<!-- ver como fazer as ibagens -->
		<div class="w3-container">
			<br/><hr/>
				<h4><strong>Descrição</strong></h4>
				<div class="w3-row w3-large">
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-dna"></i> Espécie: {{$pet->especie}}</p>
						<p><i class="fa fa-fw fa-paw"></i> Raça: {{$pet->raca}}</p>
						<p><i class="fa fa-fw fa-clock"></i> Idade: {{$pet->idade}}</p>
					</div>
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-home"></i> Cidade: arrumar o pet</p>
						<p><i class="fa fa-fw fa-paperclip"></i> Observações: {{$pet->observacao}}</p>
					</div>
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-hand-holding-heart"></i> Interessado em me adotar? Contate meu dono!</p>
						<p><i class="fa fa-fw fa-mobile-alt"></i> arrumar o pet</p>
					</div>
				</div>
		</div>
	</div>
</body>
@stop