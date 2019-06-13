<?php $__env->startSection('conteudo'); ?>
<head>
	<title>BiteP - Pet</title>
	
	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="css/pet.css"/>
	
	<!-- JavaScript da Página -->
	<script src="js/pet.js"></script>
</head>
	
<body>
	<div class="w3-main">
		Imagens de <?php echo e($pet->nome); ?>

		<!-- ver como fazer as ibagens -->
		<div class="w3-container">
			<br/><hr/>
				<h4><strong>Descrição</strong></h4>
				<div class="w3-row w3-large">
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-dna"></i> Espécie: <?php echo e($pet->especie); ?></p>
						<p><i class="fa fa-fw fa-paw"></i> Raça: <?php echo e($pet->raca); ?></p>
						<p><i class="fa fa-fw fa-clock"></i> Idade: <?php echo e($pet->idade); ?></p>
					</div>
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-home"></i> Cidade: arrumar o pet</p>
						<p><i class="fa fa-fw fa-paperclip"></i> Observações: <?php echo e($pet->observacao); ?></p>
					</div>
					<div class="w3-col s4">
						<p><i class="fa fa-fw fa-hand-holding-heart"></i> Interessado em me adotar? Contate meu dono!</p>
						<p><i class="fa fa-fw fa-mobile-alt"></i> arrumar o pet</p>
					</div>
				</div>
		</div>
	</div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Bitep_Laravel\resources\views/pet.blade.php ENDPATH**/ ?>