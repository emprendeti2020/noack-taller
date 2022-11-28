<!DOCTYPE html>
<html lang="en">

<head>

   <title>Prototipo Noack Desabolladura y pintura || Login Page</title>

   <link rel="stylesheet" href="<?= base_url('public/employee/css/bootstrap.min.css'); ?>" />
   <!-- site css -->
   <link rel="stylesheet" href="<?= base_url('public/employee/css/style.css'); ?>" />
   <!-- responsive css -->
   <link rel="stylesheet" href="<?= base_url('public/employee/css/responsive.css'); ?>" />
   <!-- color css -->
   <link rel="stylesheet" href="<?= base_url('public/employee/css/colors.css'); ?>" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="<?= base_url('public/employee/css/bootstrap-select.css'); ?>" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="<?= base_url('public/employee/css/perfect-scrollbar.css'); ?>" />
   <!-- custom css -->
   <link rel="stylesheet" href="<?= base_url('public/employee/css/custom.css'); ?>" />
   <!-- calendar file css -->
   <link rel="stylesheet" href="<?= base_url('public/employee/js/semantic.min.css'); ?>" />

</head>

<?php echo $this->renderSection("etms_main_page"); ?>

<!-- jQuery -->
<script src="<?= base_url('public/employee/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('public/employee/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('public/employee/js/bootstrap.min.js'); ?>"></script>

<?php echo $this->renderSection("etms_main_js"); ?>
</body>

</html>