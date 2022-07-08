<body class="blog-author bg-gray-200">
    <?php $this->load->view('layouts/navbar_landing.php'); ?>
    <header>
        <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');" loading="lazy">
            <span class="mask bg-gradient-success opacity-8"></span>
        </div>
    </header>
    <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <!-- START Testimonials w/ user image & text & info -->

        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="mb-5">Daftar Fasilitas Kesehatan</h3>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($faskes as $item) { ?>
                        <div class="col-lg-3 col-sm-6">


                            <div class="card card-plain">
                                <div class="card-header p-0 position-relative">
                                    <a class="d-block blur-shadow-image">
                                        <img src="<?= base_url('assets/images/foto1_faskes/') . $item->foto1 ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                </div>
                                <div class="card-body px-0">
                                    <h5>
                                        <a href="javascript:;" class="text-dark font-weight-bold"><?= $item->nama_faskes ?></a>
                                    </h5>
                                    <p>
                                        <?= $item->nama_jenis_faskes ?> <br>
                                        Kec.<?= $item->nama_kecamatan ?> <br>
                                        <i class="fa fa-star text-warning"></i> <small><?= $item->skor_rating ?></small>

                                    </p>
                                    <a href="<?= base_url("landing_page/detail_faskes") ?>/<?php echo $item->faskes_id ?>" type="button" class="text-info text-sm icon-move-right">
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                        Selengkapnya
                                    </a>

                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>

    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
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
    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="../assets/js/plugins/parallax.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>