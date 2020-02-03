@extends('index')

@section('conteudo')
<head>
  	<title>BiteP - Entrar ou Cadastrar</title>
  	
  	<!-- CSS de Página -->
	<link rel="stylesheet" href="{{ asset('css/entrarCadastrar.css') }}"/>
	
	<!-- JavaScript da Página -->
	<script src="{{ asset('js/entrarCadastrar.js') }}"></script>
</head>
	
<body>
	<div class="w3-main">
			<div class="flex-wrap" style="margin-top: 100px">
				<form id="formEntrar" action="/login" method="post">
					@csrf
					<fieldset form="formEntrar">
						<input type="radio" name="in" id="sign-in" value="singin" checked="checked"/>
				        <input type="radio" name="in" id="sign-up" value="signup"/>

						<label id="lblSign1" for="sign-in">Entrar</label>							
				        <label id="lblSign2" for="sign-up">Cadastrar</label>
				
				        <input id="nome" name="nome" class="sign-up hiddeable" type="text" minlength="3" maxlength="40" placeholder="Nome" onkeypress="return validarNaoNumero(event)"/>
				        <input id="email" name="email" class="sign-up sign-in hiddeable" type="email" maxlength="255" placeholder="Email" required="true"/>
				        <input id="telefone" name="telefone" class="sign-up hiddeable tel-mask" type="tel" maxlength="15" placeholder="Telefone"/>
				        
				        <select id="estado" name="estado" class="sign-up hiddeable">
							<option value="">--Estado--</option>
							@foreach($estados as $e)
								<option value="{{$e->id}}">{{$e->nome}}</option>
							@endforeach
						</select>
						
						<select id ="cidade" name="cidade" class="sign-up hiddeable">
							<option value="">--Escolha um estado--</option>
						</select>

				        <input id="psw1" name="senha" class="sign-up sign-in hiddeable" type="password" minlength="6" placeholder ="Senha" required="true" value=""/>
				        <input id="psw2" name="psw2" class="sign-up hiddeable" type="password" minlength="6" placeholder ="Repetir Senha" value=""/>

				        <input type="submit" class="sign-in cmdButton hiddeable" value="Entrar" name="btnEntrar"/>
				        <input type="submit" class="sign-up cmdButton hiddeable" value="Cadastrar" name="btnCadastrar"/>
			       	</fieldset>
		    	</form>
			</div>	
	</div>
	
	<script>
		$(document).ready( function() {
      		$('#estado').change( function() {
				$estado_id = $('#estado').val();
				if ($('#estado').val() != '') {
					$.ajax({
						url: '{{route('loadCidades', 'estadoid')}}'.replace('estadoid', $estado_id),
						type: "GET",
						data: {estado : $('#estado').val()},
						success: function(data) {
							var cities = $('#cidade');
							cities.empty();
							
							$.each (data, function () {
								cities.append($('<option></option>').val(this.id).html(this.nome))
							});
						}
					});
				}
			});
		});
	</script>
	<script>
		$(document).ready(function(){
				  $('.tel-mask').mask('(99) 99999-9999');
		});
	</script>
</body>
@stop