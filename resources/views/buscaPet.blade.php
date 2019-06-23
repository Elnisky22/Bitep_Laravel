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
					{{$p->nome}}
					<br>
					<a href="{{route('pet.show', $p->id)}}" class="btnCustoms"><i class="fa fa-paw"></i> Detalhes </a>
				</div>
			@endforeach
			</div>
		</form>
	</div>
</body>
@stop