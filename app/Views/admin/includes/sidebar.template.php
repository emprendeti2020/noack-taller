<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="dashboard.php"><img class="logo_icon img-responsive" src="<?= base_url('public/admin/images/logo/logo_icon.png'); ?>" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="<?= base_url('public/admin/images/layout_img/user_img.jpg'); ?>" alt="#" /></div>
                <div class="user_info">
                    <h6>Admin</h6>
                    <p><span class="online_animation"></span> Admin</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">

            <li><a href="<?= url_to('admin/dashboard'); ?>"><i class="fa fa-dashboard yellow_color"></i> <span>Inicio</span></a></li>
            <li class="active">
                <a href="#dashboard1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-files-o orange_color"></i> <span>Ot</span></a>
                <ul class="collapse list-unstyled" id="dashboard1">
                    <li>
                        <a href="<?= url_to('admin/ot/manage'); ?>">> <span>Agregar</span></a>
                    </li>
                    <li>
                        <a href="manage-dept.php">> <span>Consultar</span></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users purple_color"></i> <span>Procesos</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li><a href="add-employee.php">> <span>Pintura</span></a></li>
                    <li><a href="manage-employee.php">> <span>Desabolladura</span></a></li>
                    <li><a href="manage-employee.php">> <span>Mecánica</span></a></li>
                    <li><a href="manage-employee.php">> <span>Lavado</span></a></li>

                </ul>
            </li>

            <li>
                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Task</span></a>
                <ul class="collapse list-unstyled" id="apps">
                    <li><a href="add-task.php">> <span>Add Task</span></a></li>
                    <li><a href="manage-task.php">> <span>Manage Task</span></a></li>

                </ul>
            </li>



            <li class="active">
                <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span> Pages</span></a>
                <ul class="collapse list-unstyled" id="additional_page">
                    <li>
                        <a href="aboutus.php">> <span>About Us</span></a>
                    </li>
                    <li>
                        <a href="contactus.php">> <span>Contact Us</span></a>
                    </li>

                </ul>
            </li>
            <li><a href="search-employee.php"><i class="fa fa-map purple_color2"></i> <span>Consultar OT</span></a></li>
            <li>
                <a href="#apps1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-briefcase blue1_color"></i> <span>Mantención</span></a>
                <ul class="collapse list-unstyled" id="apps1">
                    <li><a href="inprogress-task.php">> <span>Marca</span></a></li>
                    <li><a href="completed-task.php">> <span>Modelo</span></a></li>
                    <li><a href="completed-task.php">> <span>C. Seguros</span></a></li>
                    <li><a href="completed-task.php">> <span>Liquidadores</span></a></li>
                    <li><a href="completed-task.php">> <span>Clientes</span></a></li>
                    <li><a href="completed-task.php">> <span>Usuarios</span></a></li>
                    <li><a href="completed-task.php">> <span>Tarifas</span></a></li>
                    <li><a href="completed-task.php">> <span>Comisiones</span></a></li>

                </ul>
            </li>

            <li>
                <a href="#apps2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bar-chart-o green_color"></i> <span>Informes</span></a>
                <ul class="collapse list-unstyled" id="apps2">
                    <li><a href="inprogress-task.php">><span>Comisiones por pagar</span></a></li>
                    <li><a href="completed-task.php">> <span>Comisiones pagadas</span></a></li>

                </ul>
            </li>

        </ul>
    </div>
</nav>