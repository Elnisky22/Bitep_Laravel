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
			<?php $userId = Session::get('usuario')->id; ?>
			<form id="formPerfil" method="post" action="{{route ('index.update', $userId)}}">
				@method ('PUT')
				@csrf
				<fieldset form="formPerfil">
				<legend>Editar Perfil</legend>
					<i class="fa fa-user-cog" style="font-size:4em"></i>
					<br/><br/>
					<p><label><i class="fa fa-address-card"></i> </label>
					
					<?php
						echo '<input type="text" name="nome" value="' . Session::get('usuario')->nome . '" placeholder="Novo Nome" maxlength="40" size="30" onkeypress="return validarNaoNumero(event)"/></p>';
						echo '<p><label><i class="fa fa-at"></i> </label>';
						echo '<input type="text" name="email" value="' . Session::get('usuario')->email . '" placeholder="Novo Email" maxlength="255" size="30"/></p>';
						echo '<p><label><i class="fa fa-mobile-alt"></i> </label>';
						echo '<input type="tel" name="telefone" value="' . Session::get('usuario')->telefone . '" placeholder="Novo Telefone" maxlength="15" size="30" class="tel-mask"/></p>';
					?>
					
					<p><label><i class="fa fa-life-ring"></i> </label>
					<?php
						$estados = App\Http\Controllers\UsuarioController::getEstados();
						$estado_id = App\Http\Controllers\UsuarioController::getEstadoId(Session::get('usuario')->cidade_id);
					?>
					
					<select id="estado" name="estado">
						@foreach ($estados as $e)
							<option value="{{$e->id}}">{{$e->nome}}</option>
						@endforeach
					</select></p>
					
					<p><label><i class="fa fa-home"></i> </label>
					<?php
						$cidadesEstadoAtual = App\Http\Controllers\UsuarioController::loadCidades($estado_id);
					?>

					<select id ="cidade" name="cidade">
						@foreach ($cidadesEstadoAtual as $c)
							<option value="{{$c->id}}">{{$c->nome}}</option>
						@endforeach
					</select></p>
					
					<button type="submit" id="btnEnviar" form="formPerfil" class="btnCustoms" style="margin-left:15px"><i class="fa fa-check"></i> Salvar</button>
					<a href="/meuPerfil" class="btnCustoms" style="margin-left: 5px"><i class="fa fa-times"></i> Cancelar</a>
				</fieldset>
				<br/>
			</form>
		</div>
	</div>

	<script>
		// Atualizar o select da cidade baseado no estado
		$(document).ready(function() {
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

		// Setar o estado atual do usuário
		$(document).ready(function() {
			var estadoId = <?php echo '' . $estado_id ?>;
    		$("#estado").val(estadoId);
		});

		// Setar a cidade atual do usuário
		$(document).ready(function() {
			var cidadeId = <?php echo '' . Session::get('usuario')->cidade_id ?>;
			$("#cidade").val(cidadeId);
		});

		// Máscara para o telefone
		$(document).ready(function() {
			$('.tel-mask').mask('(99) 99999-9999');
		});
	</script>
</body>
@stop