<!DOCTYPE html>
<html lang="en">

<head>

    <title>Prototipo Noack Desabolladura y pintura || Login Page</title>

    <link rel="stylesheet" href="<?= base_url('public/admin/css/bootstrap.min.css'); ?>" />
    <!-- site css -->
    <link rel="stylesheet" href="<?= base_url('public/admin/css/style.css'); ?>" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url('public/admin/css/responsive.css'); ?>" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="<?= base_url('public/admin/css/bootstrap-select.css'); ?>" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="<?= base_url('public/admin/css/perfect-scrollbar.css'); ?>" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url('public/admin/css/custom.css'); ?>" />

</head>
<?php echo $this->renderSection("etms_main_page"); ?>

<!-- jQuery -->
<script src="<?= base_url('public/admin/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('public/admin/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('public/admin/js/bootstrap.min.js'); ?>"></script>

<?php echo $this->renderSection("etms_main_js"); ?>
</body>

</html>