<?php echo $this->extend("employee/includes/principal.template.php") ?>

<?php echo $this->section("etms_main_page"); ?>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <h3 style="color: white;">Prototipo Noack Desabolladura y pintura</h3>
                        </div>
                    </div>
                    <div class="login_form">
                        <form method="post" name="chngpwd" onSubmit="return valid();">
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" required="true" name="email">
                                </div>
                                <div class="field">
                                    <label class="label_field">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Mobile Number" required="true" name="mobile" maxlength="10" pattern="[0-9]+">
                                </div>
                                <div class="field">
                                    <label class="label_field">New Password</label>
                                    <input type="password" class="form-control" name="newpassword" placeholder="New Password" required="true">
                                </div>
                                <div class="field">
                                    <label class="label_field">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="true">
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt" name="submit" type="submit">RESET</button>
                                </div>
                            </fieldset>
                            <a class="forgot" href="<?= url_to('employee'); ?>">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->endSection(); ?>

    <?php echo $this->section("etms_main_js"); ?>
    <!-- wow animation -->
    <script src="<?= base_url('public/employee/js/animate.js'); ?>"></script>
    <!-- select country -->
    <script src="<?= base_url('public/employee/js/bootstrap-select.js'); ?>"></script>
    <!-- nice scrollbar -->
    <script src="<?= base_url('public/employee/js/perfect-scrollbar.min.js'); ?>"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="<?= base_url('public/employee/js/custom.js'); ?>"></script>
    <?php echo $this->endSection(); ?>