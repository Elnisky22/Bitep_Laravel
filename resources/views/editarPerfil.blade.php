@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Editar Perfil</title>
	
	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/editarPerfil.css') }}"/>
</head>

<body>
	<div class="w3-main">
		<div class="flex-wrap" style="margin-top:50px">
			<form id="formPerfil">
				<fieldset form="formPerfil">
				<legend>Editar Perfil</legend>
					<i class="fa fa-user-cog" style="font-size:4em"></i>
					<br/><br/>
					<p><label><i class="fa fa-address-card"></i> </label>
					
					<?php
						echo '<input type="text" value="' . Session::get('usuario')->nome . '" placeholder="Novo Nome" maxlength="40" size="30" onkeypress="return validarNaoNumero(event)"/></p>';
						echo '<p><label><i class="fa fa-at"></i> </label>';
						echo '<input type="text" value="' . Session::get('usuario')->email . '" placeholder="Novo Email" maxlength="255" size="30"/></p>';
						echo '<p><label><i class="fa fa-mobile-alt"></i> </label>';
						echo '<input type="tel" value="' . Session::get('usuario')->telefone . '" placeholder="Novo Telefone" maxlength="15" size="30" class="tel-mask"/></p>';
					?>
					
					<p><label><i class="fa fa-life-ring"></i> </label>
					<select id="estado" name="estado">
					
					</select></p>
					
					<?php
						echo '<p><label><i class="fa fa-home"></i> </label>';
						echo '<select id ="cidade" name="cidade">';
						
						$cidade = App\Http\Controllers\UsuarioController::getCidade(Session::get('usuario')->cidade_id);
						$cidades = App\Http\Controllers\UsuarioController::findCidades($cidade);
							
						foreach ($cidades as $c) {
							echo '<option value="' . $c->id . '">' . $c->nome . '</option>';
						}
						echo '</select></p>';
					?>
					
					<div class="grid-container">
						<div class="grid-item">
							<button type="submit" id="btnEnviar" form="formPerfil" class="btnCustoms" style="margin-left:15px"><i class="fa fa-check"></i> Salvar</button>
						</div>
						<div class="grid-item">
							<a href="/meuPerfil" class="btnCustoms" style="margin-left:15px"><i class="fa fa-times"></i> Cancelar</a>
						</div>
					</div>	
				</fieldset>
				<br/>
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
						type: "POST",
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