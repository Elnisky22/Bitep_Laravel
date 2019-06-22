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
				<div class="grid-item">
					{{$p->nome}}<br>
					<a href="{{ route('pet.show', $p->id) }}" class="btnCustoms"><i class="fa fa-paw"></i> Ver Perfil</a>
					<form method="POST" action="{{ route('pet.destroy', $p->id) }}">
					@method ('DELETE')
					@csrf
						<button type="submit" class="btnCustoms"><i class="fa fa-trash-alt"></i> Excluir</button>
					</form>
				</div>
			@empty
				<p>Ainda não possui pets cadastrados.<br>
				Vá até a aba "Cadastrar Pets" para cadastrá-los.</p>
			@endforelse
		</div>
	</div>
</body>
@stop