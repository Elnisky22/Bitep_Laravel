<?php $__env->startSection('conteudo'); ?>
<head>
	<title>BiteP - Meu Perfil</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/meuPerfil.css')); ?>"/>
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
			<form id="formPerfil">
				<fieldset form="formPerfil">
				<legend>Meu Perfil</legend>
					<br/>
					<i class="fa fa-user-cog" style="font-size:4em"></i>
					<br/><br/>

					<?php
					if (Session::has('usuario')) {
						echo '<p><i class="fa fa-address-card"></i><label> Nome: </label>' . Session::get('usuario')->nome . '<br/></p>';
						echo '<p><i class="fa fa-at"></i><label> Email: </label>' . Session::get('usuario')->email . '<br/></p>';
						echo '<p><i class="fa fa-mobile-alt"></i><label> Telefone: </label>' . Session::get('usuario')->telefone . '<br/></p>';
						echo '<p><i class="fa fa-home"></i><label> Cidade: </label>' . App\Http\Controllers\UsuarioController::getCidade(Session::get('usuario')->cidade_id)->nome . '<br/></p>';
					}
					?>
					
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Bitep_Laravel\resources\views//meuPerfil.blade.php ENDPATH**/ ?>