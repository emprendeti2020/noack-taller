<?php echo $this->extend("admin/includes/principal.template.php") ?>

<?php echo $this->section("etms_main_css"); ?>
<link rel="stylesheet" href="<?= base_url('public/admin/css/jquery.dataTables.min.css'); ?>">
<?php echo $this->endSection(); ?>

<?php echo $this->section("etms_main_page"); ?>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php echo view('admin/includes/sidebar.template.php'); ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php echo view('admin/includes/header.template.php'); ?>

                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30" style="margin-top: 2rem;">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Manage Department</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table id="myTable" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>OT</th>
                                                    <th>Patente</th>
                                                    <th>Compañía</th>
                                                    <th>Modelo</th>
                                                    <th>Marca</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-g44e180881_640.jpg'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>123</td>
                                                    <td>Patente</td>
                                                    <td>Ford</td>
                                                    <td>Modelo 1</td>
                                                    <td>Marca 1</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-ge8f7880fa_640.png'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>456</td>
                                                    <td>Patente</td>
                                                    <td>Toyota</td>
                                                    <td>Modelo 2</td>
                                                    <td>Marca 2</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-ge80e1d212_640.jpg'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>789</td>
                                                    <td>Patente</td>
                                                    <td>Volkswagen</td>
                                                    <td>Modelo 3</td>
                                                    <td>Marca 3</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-g44e180881_640.jpg'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>123</td>
                                                    <td>Patente</td>
                                                    <td>Ford</td>
                                                    <td>Modelo 1</td>
                                                    <td>Marca 1</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-ge8f7880fa_640.png'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>456</td>
                                                    <td>Patente</td>
                                                    <td>Toyota</td>
                                                    <td>Modelo 2</td>
                                                    <td>Marca 2</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-ge80e1d212_640.jpg'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>789</td>
                                                    <td>Patente</td>
                                                    <td>Volkswagen</td>
                                                    <td>Modelo 3</td>
                                                    <td>Marca 3</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-g44e180881_640.jpg'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>123</td>
                                                    <td>Patente</td>
                                                    <td>Ford</td>
                                                    <td>Modelo 1</td>
                                                    <td>Marca 1</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-ge8f7880fa_640.png'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>456</td>
                                                    <td>Patente</td>
                                                    <td>Toyota</td>
                                                    <td>Modelo 2</td>
                                                    <td>Marca 2</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-ge80e1d212_640.jpg'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>789</td>
                                                    <td>Patente</td>
                                                    <td>Volkswagen</td>
                                                    <td>Modelo 3</td>
                                                    <td>Marca 3</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-g44e180881_640.jpg'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>123</td>
                                                    <td>Patente</td>
                                                    <td>Ford</td>
                                                    <td>Modelo 1</td>
                                                    <td>Marca 1</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-ge8f7880fa_640.png'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>456</td>
                                                    <td>Patente</td>
                                                    <td>Toyota</td>
                                                    <td>Modelo 2</td>
                                                    <td>Marca 2</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('public/admin/images/ot/car-ge80e1d212_640.jpg'); ?>" width="100" alt="">
                                                    </td>
                                                    <td>789</td>
                                                    <td>Patente</td>
                                                    <td>Volkswagen</td>
                                                    <td>Modelo 3</td>
                                                    <td>Marca 3</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" title="Pintura" class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
                                                            <a href="<?= url_to("admin/ot/desabollar"); ?>" title="Desabollar" class="btn btn-success"><i class="fa fa-sliders"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php echo $this->endSection(); ?>

<?php echo $this->section("etms_main_js"); ?>
<script src="<?= base_url('public/admin/js/custom.js'); ?>"></script>
<script src="<?= base_url('public/admin/js/jquery.dataTables.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "<?= base_url("public/admin/js/spanish.datatable.json"); ?>"
            },
        });
    });
</script>
<?php echo $this->endSection(); ?>