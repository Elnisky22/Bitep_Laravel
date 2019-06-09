<?php $__env->startSection('conteudo'); ?>
<head>
	<title>BiteP - Cadastrar novo Pet</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="css/cadastrarPet.css"/>
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

	<!-- Script da Página -->
	<script src="js/cadastrarPet.js"></script>
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
							<selectOneRadio styleClass="flex-wrap" value="#{petBean.pet.especie}">
								<selectItem itemValue="Cachorro" itemLabel="Cachorro"/>
								<selectItem itemValue="Gato" itemLabel="Gato"/>
							</selectOneRadio>
							
							<label><i class="fa fa-venus-mars"></i> Gênero:</label>
							<selectOneRadio styleClass="flex-wrap" value="#{petBean.pet.genero}">
								<selectItem itemValue="F" itemLabel="Fêmea"/>
								<selectItem itemValue="M" itemLabel="Macho"/>
							</selectOneRadio>
							
							<br/>
							<label><i class="fa fa-paw"></i> </label>
							<input type="text" maxlength="20" onkeypress="return validarNaoNumero(event)" placeholder="Raça do Pet" required="required" title="Raça do Pet"/>
							
							<p><i class="fa fa-calendar"></i><label> Data Nascimento:</label><br/>
							<input type="date" title="Data de Nascimento"/></p>
							
							<p><i class="fa fa-sticky-note"></i><label> Observações:</label><br/>
							<textarea class="w3-border inputText" style="border-radius:7px;border:0" cols="18" rows="3" title="Observações" maxlength="200"></textarea></p>
							
							<panelGrid style="margin-left:10px" columns="2">
								<outputLabel for="img1" styleClass="img btnCustoms">Imagem 1</outputLabel>
								
								<outputLabel for="img2" styleClass="img btnCustoms">Imagem 2</outputLabel>

								<outputLabel for="img3" styleClass="img btnCustoms">Imagem 3</outputLabel>

								<outputLabel for="img4" styleClass="img btnCustoms">Imagem 4</outputLabel>
								
								<inputFile name="image1" id="img1" styleClass="imageUpload" value="#{petBean.img1}"/>
								<inputFile name="image2" id="img2" styleClass="imageUpload" value="#{petBean.img2}"/>
								<inputFile name="image3" id="img3" styleClass="imageUpload" value="#{petBean.img3}"/>
								<inputFile name="image4" id="img4" styleClass="imageUpload" value="#{petBean.img4}"/>
							</panelGrid>
							
							<hr/>
							<div class="grid-container" columns="2">
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
			
		<!--              FIM CONTEÚDO PÁGINA               -->
		</div>
	</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\bitep\resources\views/cadastrarPet.blade.php ENDPATH**/ ?>