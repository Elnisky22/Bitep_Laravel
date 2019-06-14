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
			<div class="grid-item">
				{{$p->nome}}
				<br>
				<a href="{{route('pet.show', $p->id)}}" class="btnCustoms"><i class="fa fa-paw"></i> Detalhes </a>
			</div>
		@endforeach
		</div>
	</div>
</body>
@stop