<?php echo $this->extend("admin/includes/principal.template.php") ?>

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
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Dashboard</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row column1">
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30 blue1_bg">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-users white_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <a href="manage-employee.php">
                                                <p class="total_no">4</p>
                                                <p class="head_couter" style="color:#fff">Total Employees</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30 red_bg">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-file white_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <a href="inprogress-task.php">
                                                <p class="total_no">1</p>
                                                <p class="head_couter" style="color:#fff">Inprogress Task</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30 green_bg">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-file white_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <a href="completed-task.php">
                                                <p class="total_no">3</p>
                                                <p class="head_couter" style="color:#fff">Completed Task</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- footer -->
                     <?php echo view('admin/includes/footer.template.php'); ?>
                </div>
            </div>
        </div>
</body>
<?php echo $this->endSection(); ?>

<?php echo $this->section("etms_main_js"); ?>
<!-- wow animation -->
<script src="<?= base_url('public/admin/js/animate.js'); ?>"></script>
<!-- select country -->
<script src="<?= base_url('public/admin/js/bootstrap-select.js'); ?>"></script>
<!-- owl carousel -->
<script src="<?= base_url('public/admin/js/owl.carousel.js'); ?>"></script>
<!-- chart js -->
<script src="<?= base_url('public/admin/js/Chart.min.js'); ?>"></script>
<script src="<?= base_url('public/admin/js/Chart.bundle.min.js'); ?>"></script>
<script src="<?= base_url('public/admin/js/utils.js'); ?>"></script>
<script src="<?= base_url('public/admin/js/analyser.js'); ?>"></script>
<!-- nice scrollbar -->
<script src="<?= base_url('public/admin/js/perfect-scrollbar.min.js'); ?>"></script>
<script>
    var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="<?= base_url('public/admin/js/custom.js'); ?>"></script>
<script src="<?= base_url('public/admin/js/chart_custom_style1.js'); ?>"></script>
<?php echo $this->endSection(); ?>