@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Adoção de Pets</title>

	<!-- CSS da Página -->		
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}"/>
</head>

<body>
	<div class="w3-main">
		<div class="grid-container">
			@forelse($pets as $p)
				<?php $image = App\Http\Controllers\PetController::showMainImage($p->id); ?>
				<div class="grid-item" style="background-color:#a0ffc9;border-radius:20px">
					<b>{{$p->nome}}</b>
					<br>
					<img src="data:image/{{$image->extencao}};base64,{{ base64_encode($image->imagem) }}" class="petImg" width="140px" height="140px">
					<br><br>
					<a href="{{route('pet.show', $p->id)}}" class="btnCustoms"><i class="fa fa-paw"></i> Detalhes </a>
				</div>
			@empty
				<p>Ainda não possuímos pets cadastrados no sistema.<br>
				Cheque novamente em breve.</p>
			@endforelse
		</div>
	</div>
</body>
@stop