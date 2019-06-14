<?php $__env->startSection('conteudo'); ?>
<head>
	<title>BiteP - Cadastrar novo Pet</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/cadastrarPet.css')); ?>"/>

	<!-- Script da Página -->
	<script src="<?php echo e(asset('js/cadastrarPet.js')); ?>"></script>
</head>
	
<body>
	<div class="w3-main">
		<div id="divCadastro" class="flex-wrap" style="margin-top:80px">
			<form id="formCadastro"  enctype="multipart/form-data">
				<fieldset>
					<legend>Novo Pet</legend>
						<p><label><i class="fa fa-address-card"></i> </label>
							<input type="text" maxlength="20" onkeypress="return validarNaoNumero(event)" placeholder="Nome do Pet" required="required" title="Nome do Pet"/></p>
							
							<label><i class="fa fa-dna"></i> Espécie:</label>
							<br/>
							<label for="cachorro">Cachorro</label>
							<input type="radio" name="especie" id="cachorro" value="cachorro"/>
							<input type="radio" name="especie" id="gato" value="gato">
							<label for="gato">Gato</label>
							<br/>
							<br/>
							<label><i class="fa fa-venus-mars"></i> Gênero:</label>
							<br/>
							<label for="macho">Macho</label>
							<input type="radio" name="genero" id="macho" value="macho"/>
							<input type="radio" name="genero" id="femea" value="femea"/>
							<label for="femea">Fêmea</label>
							
							<br/>
							<label><i class="fa fa-paw"></i> </label>
							<input type="text" maxlength="20" onkeypress="return validarNaoNumero(event)" placeholder="Raça do Pet" required="required" title="Raça do Pet"/>
							
							<p><i class="fa fa-calendar"></i><label> Data Nascimento:</label><br/>
							<input type="date" title="Data de Nascimento"/></p>
							
							<p><i class="fa fa-sticky-note"></i><label> Observações:</label><br/>
							<textarea class="w3-border inputText" style="border-radius:7px;border:0" cols="18" rows="3" title="Observações" maxlength="200"></textarea></p>
							
							VER COMO CARREGAR AS IMAGENS
							<hr/>
							<div class="grid-container">
								<div class="grid-item">
									<button type="button" class="btnCustoms" name="btnCadastrar" action="#{petBean.cadastrarPet()}"><i class="fa fa-check"></i> Cadastrar</button>
								</div>
								<div class="grid-item">
									<a href="/" class="btnCustoms"><i class="fa fa-times"></i> Cancelar</a>
								</div>
							</div>
					</fieldset>
				</form>
			</div>
		</div>
	</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Bitep_Laravel\resources\views/cadastrarPet.blade.php ENDPATH**/ ?>