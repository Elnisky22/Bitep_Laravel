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
		@foreach($pets as $p)
		<?php $image = App\Http\Controllers\PetController::showMainImage($p->id); ?>
			<div class="grid-item">
				{{$p->nome}}
				<br>
				<img src="data:image/{{$image->extencao}};base64,{{ base64_encode($image->imagem) }}" class="petImg" width="140px" height="140px">
				<br>
				<a href="{{route('pet.show', $p->id)}}" class="btnCustoms"><i class="fa fa-paw"></i> Detalhes </a>
			</div>
		@endforeach
		</div>
	</div>
</body>
@stop