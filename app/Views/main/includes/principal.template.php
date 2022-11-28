<!DOCTYPE html>
<html>

<head>
	<title>Prototipo Noack Desabolladura y pintura||Home Page</title>
	<!--/tags -->

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="<?= base_url('public/main/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= base_url('public/main/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= base_url('public/main/css/font-awesome.css') ?>" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic" rel='stylesheet' type='text/css'>
</head>

<body>
	<?php echo view("main/includes/header.template.php"); ?>
	<?php echo $this->renderSection("etms_main_page"); ?>
	<?php echo view("main/includes/footer.template.php"); ?>

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="<?= base_url('public/main/js/jquery-2.1.4.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('public/main/js/bootstrap.js'); ?>"></script>

</body>

</html>