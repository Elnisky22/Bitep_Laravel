@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Meu Perfil</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/meuPerfil.css') }}"/>
</head>
	
<body>
	<?php
		if (("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" === "http://local.bitep.com/login")) {
			session_start();
			Session::put('usuario', $usuario);
		}
	?>
	<div class="w3-main">
		<div class="flex-wrap" style="margin-top:50px">
			<?php dd($userid = Session::get('usuario')->id); ?>
			<form id="formPerfil" method="post" action="{{ route('index.destroy', $userid) }}">
				<fieldset form="formPerfil">
					<legend>Meu Perfil</legend>
					<br/>
					<i class="fa fa-user-cog" style="font-size:4em"></i>
					<br/><br/>

					<?php
						if (Session::has('usuario')) {
							echo '<p><i class="fa fa-address-card"></i><label><b> Nome: </b></label>' . Session::get('usuario')->nome . '<br/></p>';
							echo '<p><i class="fa fa-at"></i><label><b> Email: </b></label>' . Session::get('usuario')->email . '<br/></p>';
							echo '<p><i class="fa fa-mobile-alt"></i><label><b> Telefone: </b></label>' . Session::get('usuario')->telefone . '<br/></p>';
							echo '<p><i class="fa fa-home"></i><label><b> Cidade: </b></label>' . App\Http\Controllers\UsuarioController::getCidade(Session::get('usuario')->cidade_id)->nome . '<br/></p>';
						}
					?>
					
					<hr/>
					<a href="/editarPerfil" class="btnCustoms"><i class="fa fa-pencil-alt"></i> Editar Perfil</a>
					@method ('DELETE')
					@csrf
					<button type="submit" class="btnCustoms" name="btnExcluir" style="margin-left: 5px"><i class="fa fa-times"></i> Excluir</button>
				</fieldset>
			</form>
		</div>
	</div>
</body>
@stop