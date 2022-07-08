<head>
    <?php $this->load->view('partials/kumpulan_css.php'); ?>

</head>

<body class="g-sidenav-show  bg-gray-200">

    <!-- Aside -->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" <?php echo base_url('/') ?>">
                <img src="<?php echo base_url('assets/template/dist/img/logo-ct.png') ?>" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Fasilitas Kesehatan Depok</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo base_url('dashboard') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $menu == "faskes" ? "active bg-gradient-success" : "" ?>" href=" <?php echo base_url('faskes') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-hospital"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Faskes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $menu == "jenis_faskes" ? "active bg-gradient-success" : "" ?>" href="<?php echo base_url('jenis_faskes') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-hospital-user"></i>
                        </div>
                        <span class="nav-link-text ms-1">Jenis Faskes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $menu == "kecamatan" ? "active bg-gradient-success" : "" ?>" href="<?php echo base_url('kecamatan') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Kecamatan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= $menu == "user" ? "active bg-gradient-success" : "" ?>" href="<?php echo base_url('user/data_user') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data User</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-danger mt-4 w-100" href="<?= base_url("user/logout") ?>" type="button"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div>
    </aside>
    <!-- End Aside -->