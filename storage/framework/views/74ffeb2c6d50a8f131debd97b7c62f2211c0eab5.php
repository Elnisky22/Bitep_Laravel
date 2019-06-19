<?php
	if (("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" !== "http://local.bitep.com/login")) {
		session_start();
	}
?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<title>BiteP - Adoção de Pets</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
		<!-- CSS Padrão -->
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/w3.css')); ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/util.css')); ?>"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
		
		<!-- Script Padrão -->
		<script src="<?php echo e(asset('js/util.js')); ?>"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
		<script type="text/javascript">
			function start(){window.onload = start;}
		</script>
	</head>
	
	<body>
		<!--                      SIDEBAR                -->
		<nav id="mySidebar" class="w3-sidebar w3-collapse w3-top">
			<div class="w3-container w3-display-container w3-padding-16">
				<i onclick="w3_close()"	class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
				<a href="<?php echo e(route('index.index')); ?>"><img src="<?php echo e(asset('images/logobitep.png')); ?>" style="width:150px" alt="Ocorreu um erro ao carregar a imagem."/></a><br/>

				<?php
					if (Session::has('usuario')) {
						echo '<p>Bem vindo, ' . Session::get('usuario')->nome .'!</p><hr/>';
						echo '<a href="/cadastrarPet" class="sidebarButton fill" style="width:226px"><i class="fa fa-plus" style="margin-left:-110px"></i> Cadastrar Pet</button></a>';
						echo '<a href="/meuPerfil" class="sidebarButton fill" style="width:226px"><i class="fa fa-user" style="margin-left:-138px"></i> Meu perfil</a><br/>';
						echo '<a href="/meusPets" class="sidebarButton fill" style="width:226px"><i class="fa fa-paw" style="margin-left:-134px"></i> Meus Pets</a>';
					} else {
						echo '<p>Olá, visitante!</p>';
						echo '<p>Entre ou cadastre-se para poder doar seus pets!</p>';
						echo '<a href="signin" class="sidebarButton fill" style="width:226px"><i class="fa fa-sign-in-alt" style="margin-left:-87px"></i> Entrar/Cadastrar</a>';
					}
				?>
				
				<!-- LOGADO E NÃO LOGADO -->
		    	<hr/>
				<p><button type="button" id="btnSearch" class="btnCustoms" onclick="openBusca()"><i class="fa fa-search"></i> Buscar Pet</button></p>
				<div id="buscaPet" style="display:none">
					<form>
						<input type="text" maxlength="40" placeholder="Nome do Pet" onkeypress="return validarNaoNumero(event)"/><br/>
						
						<br/><label style="font-weight:bold"><i class="fa fa-dna"></i> Espécie</label><br/>
						<label for="ckbDog">Cachorro </label><input name="isDog" type="checkbox" id="ckbDog"/>
						<input type="checkbox" id="ckbCat" name="isCat" value=""/><label for="ckbCat"> Gato</label>
						<br/>
						<br/><label style="font-weight:bold"><i class="fa fa-venus-mars"></i> Gênero</label><br/>
						<label for="ckbMacho">Macho </label><input name="isM" type="checkbox" id="ckbMacho"/>
						<input name="isF" type="checkbox" id="ckbFemea"/><label for="ckbFemea"> Fêmea</label>
						<br/><br/>
						<input name="raca" type="text" maxlength="40" placeholder="Raça do Pet" onkeypress="return validarNaoNumero(event)"/>
						
						<p><button type="button" class="btnCustoms" name="btnBuscar" action=""><i class="fa fa-search"></i> Buscar</button></p>
					</form>
				</div>
				<hr/>	
				
				<!-- LOGADO -->
				<?php
					if (Session::has('usuario')) {
						echo '<a href="/logout" class="sidebarButton fill" style="width:226px"><i class="fa fa-sign-out-alt" style="margin-left:-110px"></i> Desconectar </a>';
					}
				?>
			</div>
		</nav>
		
		<!--                      MENU NO TOPO EM TELAS PEQUENAS                    -->
		<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
		  	<a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i> Menu</a>
		  	<img src="<?php echo e(asset('images/logobitep.png')); ?>" id="imgLogo" width="60px" alt="Ocorreu um erro ao carregar a imagem."/>
		</header>
		
		<!--                 EFEITO DE OVERLAY COM A SIDEBAR ABERTA EM TELAS PEQUENAS         -->
		<div id="myOverlay" class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="fechar menu lateral"></div>
	
		<!--                  AJUSTAR CONTEÚDO EM TELAS PEQUENAS                        -->
		<div class="w3-hide-large" style="margin-top:80px"></div>
	
		<!--                  CONTEÚDO DA PÁGINA                         -->
		<div class="w3-main" style="margin-left:260px">
			<?php echo $__env->yieldContent('conteudo'); ?>
		</div>
		
		<!--                 FOOTER                       -->
		<footer class="w3-hide-small w3-container w3-padding-16" style="margin-left:260px">
			<hr/>
			<p>Feito com <i class="fa fa-heart"></i> e <i class="fa fa-coffee"></i> por © Pinguim tem Joelho, 2019</p>
		</footer>
	</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\Bitep_Laravel\resources\views/index.blade.php ENDPATH**/ ?>