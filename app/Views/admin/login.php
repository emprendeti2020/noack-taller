<?php echo $this->extend("admin/includes/principal.template.php") ?>

<?php echo $this->section("etms_main_page"); ?>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <h3 style="color: white;">Noack Desabolladura y Pintura</h3>
                        </div>
                    </div>
                    <div class="login_form">
                        <form method="post" name="login">
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Usuario</label>
                                    <input type="text" class="form-control" placeholder="usuario" required="true" name="username" value="<?php if (isset($_COOKIE["user_login"])) {
                                                                                                                                                echo $_COOKIE["user_login"];
                                                                                                                                            } ?>">
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" class="form-control" placeholder="password" name="password" required="true" value="<?php if (isset($_COOKIE["userpassword"])) {
                                                                                                                                                    echo $_COOKIE["userpassword"];
                                                                                                                                                } ?>">
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                    <label class="form-check-label"><input class="form-check-input" id="remember" name="remember" <?php if (isset($_COOKIE["user_login"])) { ?> checked <?php } ?> type="checkbox" /> Recuerdame</label>
                                    <a class="forgot" href="<?= url_to('admin/forgot-password'); ?>">Olvidaste tu contraseña?</a>
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <a href="<?= url_to('admin/dashboard'); ?>" class="main_bt">Acceder</a>
                                    <!--<button class="main_bt" name="login" type="submit">Login</button>-->
                                </div>
                            </fieldset>
                            <a class="forgot" href="<?= url_to('/'); ?>">Inicio</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->endSection(); ?>

    <?php echo $this->section("etms_main_js"); ?>
    <script src="<?= base_url('public/admin/js/animate.js'); ?>"></script>
    <!-- select country -->
    <script src="<?= base_url('public/admin/js/bootstrap-select.js'); ?>"></script>
    <!-- nice scrollbar -->
    <script src="<?= base_url('public/admin/js/perfect-scrollbar.min.js'); ?>"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="<?= base_url('public/admin/js/custom.js'); ?>"></script>
    <?php echo $this->endSection(); ?>