@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Meu Perfil</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="css/meuPerfil.css"/>
</head>
	
<body>
	<div class="w3-main">
		<div class="flex-wrap" style="margin-top:50px">
			<form id="formPerfil">
				<fieldset form="formPerfil">
				<legend>Meu Perfil</legend>
					<br/>
					<i class="fa fa-user-cog" style="font-size:4em"></i>
					<br/><br/>						
					<p><i class="fa fa-address-card"></i><label> Nome:</label><br/></p>
			
					<p><i class="fa fa-at"></i><label> Email:</label><br/></p>
			
					<p><i class="fa fa-mobile-alt"></i><label> Telefone:</label><br/></p>
					
					<p><i class="fa fa-home"></i><label> Cidade:</label><br/></p>
				
					<hr/>
					<panelGrid columns="2">
						<a href="/editarPerfil" class="btnCustoms" style="margin-left:10px"><i class="fa fa-pencil-alt"></i> Editar Perfil</a>
						<button type="button" class="btnCustoms" name="btnExcluir" action="#{usuario.excluirConta()}"><i class="fa fa-times"></i> Excluir</button>
					</panelGrid>
				</fieldset>
			</form>
		</div>
	</div>
</body>
@stop