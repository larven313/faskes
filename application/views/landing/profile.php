<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Material Kit 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="blog-author bg-gray-200">
    <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
        <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                Material Kit 2
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <?php
                    if ($this->session->has_userdata('username')) { ?>
                        <li class="nav-item ms-lg-auto">
                            <a class="nav-link nav-link-icon me-2" href="<?php echo base_url('/') ?>">
                                <i class="fa fa-user"></i>
                                <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profil"><?= $this->session->userdata('username'); ?></p>
                            </a>
                        </li>
                    <?php } else { ?>

                    <?php
                    }
                    $this->session->set_userdata('username', $this->session->userdata('username'))
                    ?>


                    <li class="nav-item ms-lg-auto">
                        <a class="nav-link nav-link-icon me-2" href="<?php echo base_url('/') ?>">
                            <i class="fa fa-home"></i>
                            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Beranda">Home</p>
                        </a>
                    </li>

                    <li class="nav-item ms-lg-auto">
                        <a class="nav-link nav-link-icon me-2" href="<?php echo base_url('landing_page/about') ?>">
                            <i class="fa fa-circle-info"></i>
                            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tentang kami">About</p>
                        </a>
                    </li>

                    <?php if (!$this->session->has_userdata('username')) { ?>
                        <li class="nav-item ms-lg-auto">
                            <a class="nav-link nav-link-icon me-2" href="<?php echo base_url('user') ?>">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Masuk">Login</p>
                            </a>
                        </li>
                    <?php } else {  ?>
                        <li class="nav-item ms-lg-auto">
                            <a class="nav-link nav-link-icon me-2" href="<?php echo base_url('user/logout') ?>">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Keluar">Logout</p>
                            </a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
    <header>
        <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');" loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
        </div>
    </header>

    <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <!-- START Testimonials w/ user image & text & info -->

        <section class="py-sm-7 py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="mt-n8 mt-md-n9 text-center">
                            <img class="avatar avatar-xxl  position-relative z-index-2" src="https://img.icons8.com/material-rounded/96/000000/user-male-circle.png" alt="bruce" loading="lazy">
                        </div>
                        <div class="row py-5">
                            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="mb-0"><?= $user->username ?></h3>
                                    <div class="d-block">
                                        <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0" data-bs-toggle="modal" data-bs-target="#modal-form">Edit</button>


                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col-auto">
                                        <span><?= $user->email ?></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- END Testimonials w/ user image & text & info -->
        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="mb-5">Ulasan Saya
                        </h3>
                    </div>
                </div>
                <div class="row">

                    <div class="row mt-1">
                        <?php foreach ($komentar as $item) { ?>

                            <div class="col-lg-4 col-md-8 mt-4">

                                <div class="card card-plain bg-gray-200">
                                    <div class="card-body">
                                        <div class="author  col-md-12">

                                            <div class="name col-md-10">
                                                <h5 class="font-weight-bolder"><?= $item->faskes ?></h5>
                                            </div>

                                            <?php if ($this->session->userdata('id') == $item->users_id) { ?>
                                                <div class="dropdown col-md-2">
                                                    <a class="cursor-pointer float-lg-end" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v text-secondary"></i>
                                                    </a>
                                                    <ul class="dropdown-menu ml-5 px-2 py-3 ms-sm-n2 ms-n5" aria-labelledby="dropdownTable">
                                                        <li><a class="dropdown-item border-radius-md text-danger" href="<?= base_url('komentar/delete_komentar/') . $item->komentar_id ?>"><i class="fa-solid fa-trash-can "></i> Hapus</a></li>
                                                    </ul>
                                                </div>
                                            <?php } ?>

                                        </div>
                                        <div class="name row">
                                            <h6 class="font-weight-bolder"><?= $item->username ?></h6>
                                            <div class="stats">
                                                <i class="far fa-calendar"></i> <?= $item->tanggal ?>
                                            </div>
                                        </div>
                                        <p class="mt-1">"</i><?= $item->isi ?>"</p>
                                        <div class="rating mt-3">
                                            </i> <?php $jumlah = $item->nilai_rating_id ?>


                                            <?php for ($i = 0; $i < $jumlah; $i++) {
                                                echo ' <i class="fas fa-star text-warning"></i>';
                                            } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>
    <div class="col-md-8">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body">
                                <?php echo form_open('landing_page/fungsi_edit_user') ?>

                                <label>Username</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="<?= $user->username ?>" placeholder="Username" aria-label="Username" name="username" aria-describedby="username-addon">
                                </div>
                                <label>Email</label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" value="<?= $user->email ?>" placeholder="Email" aria-label="Email" name="email" aria-describedby="email-addon">
                                </div>
                                <label>Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" value="<?= $user->password ?>" placeholder="Password" aria-label="Password" name="password" aria-describedby="password-addon">
                                </div>
                                <?php echo form_hidden('id', $user->id); ?>
                                <input type="hidden" value="<?= $user->role ?>" name="role">
                                <input type="hidden" value="<?= $user->status ?>" name="status">

                                <div class="text-center">
                                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign in</button>
                                </div>
                                <?php echo form_close() ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="footer py-5">
        <div class="container z-index-1 position-relative">
            <div class="row">
                <div class="col-lg-4 me-auto mb-lg-0 mb-4 text-lg-start text-center">
                    <h6 class="text-dark font-weight-bolder text-uppercase mb-lg-4 mb-3">Material Design</h6>
                    <ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-4 mt-sm-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark opacity-8" href="https://www.creative-tim.com" target="_blank">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark opacity-8" href="https://www.creative-tim.com/presentation" target="_blank">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark opacity-8" href="https://www.creative-tim.com/blog" target="_blank">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark opacity-8" href="https://www.creative-tim.com" target="_blank">
                                Services
                            </a>
                        </li>
                    </ul>
                    <p class="text-sm text-dark opacity-8 mb-0">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> Material Design by Creative Tim.
                    </p>
                </div>
                <div class="col-lg-6 ms-auto text-lg-end text-center">
                    <p class="mb-5 text-lg text-dark font-weight-bold">
                        The reward for getting on the stage is fame. The price of fame is you can’t get off the stage.
                    </p>
                    <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                        <span class="fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                        <span class="fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                        <span class="fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-dark opacity-5">
                        <span class="fab fa-github"></span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="<?= base_url('assets/js/plugins/parallax.min.js') ?>"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="<?= base_url('assets/js/material-kit.min.js?v=3.0.4') ?>" type="text/javascript"></script>
</body>

</html>