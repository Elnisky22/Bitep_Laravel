@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Meus Pets</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/meusPets.css') }}"/>
</head>

<body>
	<div class="w3-main">
		<?php $pets = App\Http\Controllers\PetController::showPets(Session::get('usuario')->id); ?>
		<div class="grid-container">
			@forelse($pets as $p)
				<?php $image = App\Http\Controllers\PetController::showMainImage($p->id); ?>

				<div class="grid-item" style="background-color:#a0ffc9;border-radius:20px">
					<b>{{$p->nome}}</b>
					<br>
					<img src="data:image/{{$image->extencao}};base64,{{ base64_encode($image->imagem) }}" class="petImg" width="140px" height="140px">
					<br>
					<br>
					<a href="{{ route('pet.show', $p->id) }}" class="btnCustoms"><i class="fa fa-paw"></i> Ver Perfil</a>
				
					<br>
						<form method="POST" action="{{ route('pet.destroy', $p->id) }}">
							@method ('DELETE')
							@csrf
							<button type="submit" class="btnCustoms"style = "margin-top: 5px;"><i class="fa fa-trash-alt"></i> Excluir</button>
					</form>
					<br>
				</div>
			@empty
				<p>Ainda não possui pets cadastrados.<br>
				Vá até a aba "Cadastrar Pets" para cadastrá-los.</p>
			@endforelse
		</div>
	</div>
</body>
@stop