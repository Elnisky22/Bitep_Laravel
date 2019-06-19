<?php $__env->startSection('conteudo'); ?>
<head>
	<title>BiteP - Adoção de Pets</title>

	<!-- CSS da Página -->		
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/home.css')); ?>"/>
</head>

<body>
	<div class="w3-main">
		<?php
			if (isset($_SESSION["usuario"])) {
				echo '' . $_SESSION["usuario"]->nome;
			}else{
				//dd(Session::get('usuario')->nome);
			}
		?>
		<div class="grid-container">
		<?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="grid-item">
				<?php echo e($p->nome); ?>

				<br>
				<a href="<?php echo e(route('pet.show', $p->id)); ?>" class="btnCustoms"><i class="fa fa-paw"></i> Detalhes </a>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Bitep_Laravel\resources\views/home.blade.php ENDPATH**/ ?>