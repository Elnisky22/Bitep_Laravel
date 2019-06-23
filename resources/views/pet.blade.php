@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Pet</title>
	
	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pet.css') }}"/>
	
	<!-- JavaScript da Página -->
	<script type="text/javascript" src="{{ asset('js/pet.js') }}"></script>
	<script>window.onload = function(){showDivs(1);}</script>
</head>
	
<body>
	<div class="w3-main" >
		<p style="font-size:30px;margin: 0px 0px 0px 15px;"><b>{{$pet->nome}}</b></p>
		
		<?php $imagens = App\Http\Controllers\PetController::getImages($pet->id); ?>
		<div id="mySlide">
			<div id="slideshow" class="w3-display-container flex-wrap">
				@foreach ($imagens as $i)
					<img styleClass="mySlides" class="petImg" src="data:image/{{$i->extencao}};base64,{{ base64_encode($i->imagem) }}" width="600px" height="400px" alt="Ocorreu um erro ao carregar a imagem.">
				@endforeach

  				<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  				<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
			</div>
		</div>

		<!-- ver como fazer as ibagens -->
		<div class="w3-container">
			<br/><hr/>
				<h4><strong>Descrição</strong></h4>
				<div class="w3-row w3-large">
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-dna"></i><b> Espécie:</b> {{$pet->especie}}</p>
						<p><i class="fa fa-fw fa-paw"></i><b> Raça:</b> {{$pet->raca}}</p>
						<p><i class="fa fa-fw fa-clock"></i><b> Idade:</b> 
							<?php 
								$now = new DateTime();
								$birth = new DateTime($pet->dataNascimento);
								$interval = $now->diff($birth);
								$elapsed = $interval->format('%y anos e %m meses');
								echo $elapsed;
							?>
						</p>
					</div>
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-home"></i><b> Cidade:</b> <?php echo '' . App\Http\Controllers\UsuarioController::getCidade(App\Http\Controllers\UsuarioController::show($pet->dono_id)->cidade_id)->nome ?></p>
						<p><i class="fa fa-fw fa-paperclip"></i><b> Observações:</b> {{$pet->observacao}}</p>
					</div>
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-hand-holding-heart"></i> Interessado em me adotar? Contate meu dono!</p>
						<p><i class="fa fa-fw fa-mobile-alt"></i> <?php echo '' . App\Http\Controllers\UsuarioController::show($pet->dono_id)->telefone ?></p>
					</div>
				</div>
		</div>
	</div>
</body>
@stop