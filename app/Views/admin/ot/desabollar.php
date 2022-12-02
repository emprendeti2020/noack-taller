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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30" style="margin-top: 2rem;">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Desabollar</h2>
                                        </div>
                                    </div>
                                    <div class="table_section padding_infor_info">
                                        <div class="table-responsive-sm">
                                            <table id="myTable" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Descripción y actividad</th>
                                                        <th>Precio</th>
                                                        <th>% Desc</th>
                                                        <th>Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Espejo lateral izq.</td>
                                                        <td style="text-align:right;">$3.000</td>
                                                        <td></td>
                                                        <td>
                                                            <button id="button" data-finish="0" class="btn btn-danger btn-block">Finalizar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Espejo lateral Der.</td>
                                                        <td style="text-align:right;">$6.000</td>
                                                        <td></td>
                                                        <td>
                                                            <button id="button" data-finish="0" class="btn btn-danger btn-block">Finalizar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mold paso rueda Del. Izq.</td>
                                                        <td style="text-align: right;">$1.000</td>
                                                        <td></td>
                                                        <td>
                                                            <button id="button" data-finish="0" class="btn btn-danger btn-block">Finalizar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mold p/rueda tras izq</td>
                                                        <td style="text-align:right;">$1.000</td>
                                                        <td></td>
                                                        <td>
                                                            <button id="button" data-finish="0" class="btn btn-danger btn-block">Finalizar</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tapiz pta tras Izq.</td>
                                                        <td style="text-align:right;">$5.000</td>
                                                        <td></td>
                                                        <td>
                                                            <button id="button" data-finish="0" class="btn btn-danger btn-block">Finalizar</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td>
                                                            <b>Desmontar y montar</b>
                                                        </td>
                                                        <td style="text-align:right;">$16.000</td>
                                                        <td colspan="2"></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="">Mensaje</label>
                                <textarea class="form-control" cols="30" rows="10" placeholder="Observacion..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button id="btn_finish" class="btn btn-danger btn-block p-3">Finalizar</button>
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
            "paging": false
        });

        $("[id=button]").click(function() {
            let btn = $(this);
            if (!btn.data("finish")) {
                btn
                    .data("finish", 1)
                    .removeClass('btn-danger')
                    .addClass('btn-success')
                    .html('Finalizado')
            } else {
                btn
                    .data("finish", 0)
                    .removeClass('btn-success')
                    .addClass('btn-danger')
                    .html('Finalizar')
            }
        });

        $('#btn_finish').click(function() {
            jQuery.each($('[id=button]'), function(i, val) {
                let $btn = $(val);
                if (!$btn.data("finish")) {
                    $btn
                        .data("finish", 1)
                        .removeClass('btn-danger')
                        .addClass('btn-success')
                        .html('Finalizado')
                }
            });
        })
    });
</script>
<?php echo $this->endSection(); ?>