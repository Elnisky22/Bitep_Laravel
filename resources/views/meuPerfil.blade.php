@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Meu Perfil</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="css/meuPerfil.css"/>
</head>
	
<body>
	<?php
		session_start();
		$_SESSION["usuario"] = $usuario;
	?>
	<div class="w3-main">
		<div class="flex-wrap" style="margin-top:50px">
			<form id="formPerfil">
				<fieldset form="formPerfil">
				<legend>Meu Perfil</legend>
					<br/>
					<i class="fa fa-user-cog" style="font-size:4em"></i>
					<br/><br/>						
					<p><i class="fa fa-address-card"></i><label> Nome:</label> {{$usuario->nome}}<br/></p>
			
					<p><i class="fa fa-at"></i><label> Email:</label> {{$usuario->email}}<br/></p>
			
					<p><i class="fa fa-mobile-alt"></i><label> Telefone:</label> {{$usuario->telefone}}<br/></p>
					
					<p><i class="fa fa-home"></i><label> Cidade:</label> {{$usuario->cidade_id}}<br/></p>
				
					<hr/>
					<div class="grid-container">
						<div class="grid-item">
							<a href="/editarPerfil" class="btnCustoms" style="margin-left:10px"><i class="fa fa-pencil-alt"></i> Editar Perfil</a>
						</div>
						<div class="grid-item">
							<button type="button" class="btnCustoms" name="btnExcluir" action="#{usuario.excluirConta()}"><i class="fa fa-times"></i> Excluir</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</body>
@stop