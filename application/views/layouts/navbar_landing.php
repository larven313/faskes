<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
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
                                    <a class="nav-link nav-link-icon me-2" href="<?php echo base_url('landing_page/profile/') . $this->session->userdata('id') ?>">
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
            <br> <br> <br>
            <?php
            echo $this->session->flashdata('message');
            ?>
            <!-- End Navbar -->
        </div>

    </div>

</div>