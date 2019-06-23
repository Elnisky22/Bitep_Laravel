@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Cadastrar novo Pet</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cadastrarPet.css') }}"/>

	<!-- Script da Página -->
	<script src="{{ asset('js/cadastrarPet.js') }}"></script>
</head>
	
<body>
	<div class="w3-main">
		<div id="divCadastro" class="flex-wrap" style="margin-top:80px">
			<form id="formCadastro" method="POST" action="\cadastrarPet" enctype="multipart/form-data">
				@csrf
				<fieldset>
					<legend>Novo Pet</legend>
						<p><label><i class="fa fa-address-card"></i> </label>
							<input name="nome" type="text" maxlength="20" onkeypress="return validarNaoNumero(event)" placeholder="Nome do Pet" required="required" title="Nome do Pet"/></p>
							
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
							<input type="text" name="raca" maxlength="20" onkeypress="return validarNaoNumero(event)" placeholder="Raça do Pet" required="required" title="Raça do Pet"/>
							
							<p><i class="fa fa-calendar"></i><label> Data Nascimento:</label><br/>
							<input type="date" name="dataNascimento" title="Data de Nascimento"/></p>
							
							<p><i class="fa fa-sticky-note"></i><label> Observações:</label><br/>
							<textarea name="observacao" class="w3-border inputText" style="border-radius:7px;border:0" cols="18" rows="3" title="Observações" maxlength="200"></textarea></p>

							<div class="grid-item">
								<input type="file" name ="imagem0" class="btnCustoms" styleclass = "imageUpload"/>
							</div>
							<div class="grid-item">
								<input type="file" name ="imagem1" class="btnCustoms" styleclass = "imageUpload"/>
							</div>
							<div class="grid-item">
								<input type="file" name ="imagem2" class="btnCustoms" styleclass = "imageUpload"/>
							</div>
							<div class="grid-item">
								<input type="file" name ="imagem3" class="btnCustoms" styleclass = "imageUpload"/>
							</div>
							<div class="grid-item">
								<input type="file" name ="imagem4" class="btnCustoms" styleclass = "imageUpload"/>
							</div>	
							<hr/>
							<div class="grid-container">
								<div class="grid-item">
									<button type="submit" class="btnCustoms" name="btnCadastrar" ><i class="fa fa-check"></i> Cadastrar</button>
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
@stop