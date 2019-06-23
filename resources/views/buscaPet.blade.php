@extends('index')

@section('conteudo')
<head>
    <title>BiteP - Resultado da busca</title>
    <!-- CSS da Página -->		
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}"/>
</head>
	
<body>
	<div class="w3-main">
		<form id="formPets" style="margin-top:100px;margin-left:100px;margin-right:100px;">
			@csrf
			<div class="grid-container">
			@foreach($pets as $p)
				<div class ="grid-item">
				<?php $image = App\Http\Controllers\PetController::showMainImage($p->id); ?>
				
					{{$p->nome}}
					<br>
					
					<img src="data:image/{{$image->extencao}};base64,{{ base64_encode($image->imagem) }}">
					<br/>
					<a href="{{route('pet.show', $p->id)}}" class="btnCustoms"><i class="fa fa-paw"></i> Detalhes </a>
				</div>
			@endforeach
			</div>
		</form>
	</div>
</body>
@stop