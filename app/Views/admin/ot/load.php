<h1>Cargar pdf</h1><?php echo $this->extend("admin/includes/principal.template.php") ?>

<?php echo $this->section("etms_main_css"); ?>
<link rel="stylesheet" href="<?= base_url('public/admin/css/jquery.dataTables.min.css'); ?>">
<style type="text/css">
    #myTable tr td:nth-child(1) {
        text-align: center;
    }
</style>
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
                        <div class="col-md-12 mb-5">
                            <div class="white_shd full margin_bottom_10" style="margin-top: 2rem;">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Cargar PDF</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="upload_pdf" required>
                                                <label class="custom-file-label" for="upload_pdf">Buscar archivo PDF</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button id="save_pdf" type="button" class="btn btn-success">Guardar</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30" style="margin-top: 2rem;">
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table id="myTable" class="table table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Tamaño</th>
                                                    <th>Ruta</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
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

        function loadData() {
            $.get("file-details", function(data) {
                let details = JSON.parse(data);
                let arr = [];

                for (let item of details.data) {
                    let aux = {
                        id: item.id,
                        name: item.name,
                        size: `${item.size} KB`,
                        path: item.path
                    };
                    arr.push(aux);
                }

                $('#myTable').DataTable({
                    "language": {
                        "url": "<?= base_url("public/admin/js/spanish.datatable.json"); ?>"
                    },
                    'data': arr,
                    'columns': [{
                            "data": 'id'
                        },
                        {
                            "data": 'name'
                        },
                        {
                            "data": 'size'
                        },
                        {
                            "data": 'path'
                        },
                        {
                            "data": null,
                            "render": function (data) {
                                let path = "<?= base_url('public/uploads/pdf/'); ?>";
                                let $name = data.path.split('/').pop();
                                return `<a href="${path}/${$name}" target="_blank"><i class="fa fa-eye"></i></a>`
                            }
                        }
                    ],
                    'destroy' : true,
                }).draw();
            });
        }

        $('#upload_pdf').change(function() {
            let el = $('#upload_pdf'),
                label = $('.custom-file-label');

            let files = el[0].files[0];
            let {
                name,
                type
            } = files;
            if (type !== 'application/pdf') {
                alert('El archivo cargado no es PDF');
                label.text('Buscar archivo PDF');
                el.val('');
                return false;
            } else {
                label.text(name);
            }
        })

        $('#save_pdf').click(function() {
            let fd = new FormData();
            let files = $('#upload_pdf')[0].files[0];
            if (!files) {
                alert('No ha seleccionado un archivo');
                return false;
            };

            fd.append('file', files);
            $.ajax({
                url: 'upload',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    let jData = JSON.parse(response);
                    if (jData.success) {
                        loadData();
                    } else {
                        console.log(jData.message);
                    }
                },
            });
        })

        loadData();

    });
</script>
<?php echo $this->endSection(); ?>