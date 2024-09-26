<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/'); ?>dist/img/Logo.png" alt="PT BIG Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HRIS PT BIG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['userid']; ?></a>
            </div>
        </div>


        <!-- QUERY MENU -->

        <?php
        $roleid = $this->session->userdata('roleid');
        $queryMenu = "SELECT `menu`.`idx`, `menu`
                        FROM `menu` JOIN `access_menu`
                          ON `menu`.`idx` = `access_menu`.`menuid`
                       WHERE `access_menu`.`roleid` = $roleid
                    ORDER BY `access_menu`.`menuid` ASC";
        $menu = $this->db->query($queryMenu)->result_array();

        ?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- LOOPING MENU -->
                <?php foreach ($menu as $m) : ?>
                    <li class="nav-header"><?= $m['menu']; ?></li>

                    <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                    <?php
                    $menuid = $m['idx'];
                    $querySubMenu = "SELECT * FROM `sub_menu`
                                      WHERE `menuid` = $menuid
                                        AND `flag` = 1";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <li class="nav-item">
                            <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                                <i class="<?= $sm['icon']; ?>"></i>
                                <p>
                                    <?= $sm['title']; ?>
                                </p>
                            </a>
                        </li>
                    <?php endforeach; ?>

                <?php endforeach; ?>


                <li class="nav-item">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>