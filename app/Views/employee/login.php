<?php echo $this->extend("employee/includes/principal.template.php") ?>

<?php echo $this->section("etms_main_page"); ?>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <h3 style="color: white;">Employee Task Management System</h3>
                        </div>
                    </div>
                    <div class="login_form">
                        <form method="post" name="login">
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Employee Id</label>
                                    <input type="text" class="form-control" placeholder="enter your employee id" required="true" name="empid">
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" class="form-control" placeholder="enter your password" name="password" required="true">
                                </div>
                                <a class="forgot" href="forgot-password.php">Forgotten Password?</a>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt" name="login" type="submit">Login</button>
                                </div>
                            </fieldset>
                            <a class="forgot" href="<?= url_to('/'); ?>">Home Page</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->endSection(); ?>