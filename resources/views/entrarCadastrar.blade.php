@extends('index')

@section('conteudo')
<head>
  	<title>BiteP - Entrar ou Cadastrar</title>
  	
  	<!-- CSS de Página -->
	<link rel="stylesheet" href="css/entrarCadastrar.css"/>
	
	<!-- JavaScript da Página -->
	<script src="js/entrarCadastrar.js"/>
</head>
	
<body>
	<div class="w3-main">
			<div class="flex-wrap" style="margin-top: 100px">
				<form id="formEntrar">
					<fieldset form="formEntrar">
						<input type="radio" name="rg" id="sign-in" checked="checked"/>
				        <input type="radio" name="rg" id="sign-up"/>

						<label id="lblSign1" for="sign-in">Entrar</label>							
				        <label id="lblSign2" for="sign-up">Cadastrar</label>
				
				        <input id="nome" class="sign-up hiddeable" type="text" minlength="3" maxlength="40" placeholder="Nome" jsf:value="#{usuario.user.nome}" onkeypress="return validarNaoNumero(event)"/>
				        <input id="email" class="sign-up sign-in hiddeable" type="email" maxlength="255" name="email" placeholder="Email" required="true" jsf:value = "#{usuario.user.email}"/>
				        <input id="telefone" class="sign-up hiddeable tel-mask" type="tel" maxlength="15" name="telefone" placeholder="Telefone" jsf:value="#{usuario.user.telefone}"/>
				        
				        <selectOneMenu id="selEstado" class="sign-up hiddeable" value="#{usuario.user.cidade.estado.id}">
							<selectItem itemValue="#{null}" itemLabel="Selecionar Estado"/>
							<selectItems value="#{form.estados}" var="p" itemValue = "#{p.id}" itemLabel = "#{p.nome}"/>
							<ajax listener="#{form.carregarCidades}" render="selCidade" />
						</selectOneMenu>
						
						<selectOneMenu id ="selCidade" class = "sign-up hiddeable" value="#{usuario.user.cidade.id}">
							<selectItem itemValue="#{null}" itemLabel="Selecionar Cidade" />
							<selectItems value="#{form.cidades}" var="c" itemValue="#{c.id}" itemLabel="#{c.nome}" />
						</selectOneMenu>

				        <input id="psw1" class="sign-up sign-in hiddeable" type="password" minlength="6" placeholder ="Senha" required="true" jsf:value="#{usuario.user.senha}"/>
				        <input id="psw2" class="sign-up hiddeable" type="password" minlength="6" placeholder ="Repetir Senha" jsf:value="#{usuario.senha2}"/>

				        <commandButton class="sign-in cmdButton hiddeable" value="Entrar" name = "btnEntrar" action="#{usuario.logar()}"/>
				        <commandButton class="sign-up cmdButton hiddeable" value="Cadastrar" name = "btnCadastrar" action="#{usuario.cadastrarUsuario()}"/>
			       	</fieldset>
		    	</form>
			</div>
			
	</div>
	
	<script>		
		$(document).ready(function(){
			  $('.tel-mask').mask('(99) 99999-9999');
		});
	</script>
</body>
@stop