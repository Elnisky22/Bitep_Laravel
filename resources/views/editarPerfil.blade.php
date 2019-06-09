@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Editar Perfil</title>
	
	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="css/editarPerfil.css"/>
	<style>
		.grid-container {
			display: inline-grid;
			grid-template-columns: auto auto auto;
			padding: 10px;
		}

		.grid-item {
			padding: 20px;
			text-align: center;
		}
	</style>
</head>

<body>	
	<!--                                CONTEÚDO DA PÁGINA                                -->
	<div class="w3-main">
		<div class="flex-wrap" style="margin-top:50px">
			<form id="formPerfil">
				<fieldset form="formPerfil">
				<legend>Editar Perfil</legend>
					<i class="fa fa-user-cog" style="font-size:4em"></i>
					<br/><br/>
					<p><label><i class="fa fa-address-card"></i> </label>
					<input type="text" title="Novo Nome de Usuário" placeholder="Novo Nome" maxlength="40" size="30" onkeypress="return validarNaoNumero(event)"/></p>
			
					<p><label><i class="fa fa-at"></i> </label>
					<input type="text" title="Novo Email de Usuário" placeholder="Novo Email" maxlength="255" size="30"/></p>
					
					<p><label><i class="fa fa-mobile-alt"></i> </label>
					<input type="tel" title="Novo Número de Telefone" placeholder="Novo Telefone" maxlength="15" size="30" class="tel-mask"/></p>
					
					<p><label><i class="fa fa-life-ring"></i> </label>
					<selectOneMenu id="selEstado">
						<selectItem itemValue="#{null}" itemLabel="Selecionar Estado"/>
						<selectItems value="#{form.estados}" var="p" itemValue = "#{p.id}" itemLabel = "#{p.nome}"/>
						<ajax listener="#{form.carregarCidades}" render="selCidade" />
					</selectOneMenu></p>
					
					<p><label><i class="fa fa-home"></i> </label>
					<selectOneMenu id ="selCidade" value="#{usuario.user.cidade.id}">
						<selectItem itemValue="#{null}" itemLabel="Selecionar Cidade"/>
						<selectItems value="#{form.cidades}" var="c" itemValue="#{c.id}" itemLabel="#{c.nome}"/>
					</selectOneMenu></p>
					
					<div class="grid-container">
						<div class="grid-item">
							<button type="submit" id="btnEnviar" form="formPerfil" class="btnCustoms" style="margin-left:15px"><i class="fa fa-check"></i> OK</button>
						</div>
						<div class="grid-item">
							<a href="/meuPerfil" class="btnCustoms" style="margin-left:15px"><i class="fa fa-times"></i> Cancelar</a>
						</div>
					</div>	
				</fieldset>
				<br/>
			</form>
		</div>
	<!--              FIM CONTEÚDO PÁGINA               -->
	</div>

	<script>
		$(document).ready(function(){
			  $('.tel-mask').mask('(99) 99999-9999');
		});
	</script>
</body>
@stop