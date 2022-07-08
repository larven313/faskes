<body class="blog-author bg-gray-200">


    <?php $this->load->view('layouts/navbar_landing.php'); ?>

    <header>
        <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');" loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
        </div>
    </header>
    <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <?php foreach ($detailFaskes as $item) { ?>


            <!-- START Testimonials w/ user image & text & info -->
            <section class="py-sm-7 py-5 position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <h3 class="text-center"><?= $detailFaskes[0]->nama_faskes ?></h3>
                            <div class="row py-5">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/foto1_faskes/') . $detailFaskes[0]->foto1 ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                </div>
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/foto1_faskes/') . $detailFaskes[0]->foto2 ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                </div>
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/foto1_faskes/') . $detailFaskes[0]->foto3 ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
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
                            <h3 class="mb-5">Info
                                <?= $detailFaskes[0]->nama_jenis_faskes ?>

                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-plain">
                                <div class="card-body px-0">
                                    <h5>
                                        <a href="javascript:;" class="text-dark font-weight-bold">Deskripsi</a>
                                    </h5>
                                    <p>
                                        <?= $detailFaskes[0]->deskripsi ?>
                                    </p>
                                    <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-plain">

                                <div class="card-body px-0">
                                    <h5>
                                        <a href="javascript:;" class="text-dark font-weight-bold">Alamat</a>
                                    </h5>
                                    <p>
                                        <?= $detailFaskes[0]->alamat ?>

                                    </p>
                                    <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-plain">
                                <div class="card-body px-0">
                                    <h5>
                                        <a href="javascript:;" class="text-dark font-weight-bold">Jumlah Dokter</a>
                                    </h5>
                                    <p>
                                        <?= $detailFaskes[0]->jumlah_dokter ?>

                                    </p>
                                    <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-plain">
                                <div class="card-body px-0">
                                    <h5>
                                        <a href="javascript:;" class="text-dark font-weight-bold">Jumlah Pegawai</a>
                                    </h5>
                                    <p>
                                        <?= $detailFaskes[0]->jumlah_pegawai ?>

                                    </p>
                                    <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- Komentar -->
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="mb-5">Ulasan
                        </h3>
                    </div>
                </div>
                <div class="row">

                    <div class="row mt-1">
                        <?php foreach ($allKomentar as $item) { ?>

                            <div class="col-lg-4 col-md-8">

                                <div class="card card-plain bg-gray-200">

                                    <div class="card-body">
                                        <div class="author  col-md-12">
                                            <div class="name col-md-6">
                                                <h6 class="font-weight-bolder"><?= $item->username ?></h6>
                                                <div class="stats">
                                                    <i class="far fa-calendar"></i> <?= $item->tanggal ?>
                                                </div>
                                            </div>
                                            <?php if ($this->session->userdata('id') == $item->users_id) { ?>
                                                <div class="dropdown col-md-6">
                                                    <a class="cursor-pointer float-lg-end" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v text-secondary"></i>
                                                    </a>
                                                    <ul class="dropdown-menu ml-5 px-2 py-3 ms-sm-n2 ms-n5" aria-labelledby="dropdownTable">
                                                        <li><a class="dropdown-item border-radius-md text-danger" href="<?= base_url('komentar/delete_komentar/') . $item->komentar_id ?>"><i class="fa-solid fa-trash-can "></i> Hapus</a></li>
                                                    </ul>
                                                </div>
                                            <?php } ?>

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
    <section class="py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card box-shadow-xl overflow-hidden mb-5">
                        <div class="row">
                            <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('../assets/img/examples/blog2.jpg')" loading="lazy">
                                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                                    <div class="mask bg-gradient-dark opacity-8"></div>
                                    <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                                        <h3 class="text-white">Contact Information</h3>
                                        <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back to you within 24 hours.</p>
                                        <div class="d-flex p-2 text-white">
                                            <div>
                                                <i class="fas fa-phone text-sm"></i>
                                            </div>
                                            <div class="ps-3">
                                                <span class="text-sm opacity-8">(+40) 772 100 200</span>
                                            </div>
                                        </div>
                                        <div class="d-flex p-2 text-white">
                                            <div>
                                                <i class="fas fa-envelope text-sm"></i>
                                            </div>
                                            <div class="ps-3">
                                                <span class="text-sm opacity-8">hello@creative-tim.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex p-2 text-white">
                                            <div>
                                                <i class="fas fa-map-marker-alt text-sm"></i>
                                            </div>
                                            <div class="ps-3">
                                                <span class="text-sm opacity-8">Dyonisie Wolf Bucharest, RO 010458</span>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                                                <i class="fab fa-twitter"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                                                <i class="fab fa-dribbble"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card-header px-4 py-sm-5 py-3">
                                    <h2>Pendapatmu tentang faskes ini ?</h2>
                                    <p class="lead"> kirim kritik & saranmu !</p>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="row">


                                        <?php echo form_open('landing_page/fungsi_create_komentar/' . $id) ?>
                                        <?php
                                        ?>

                                        <div class="col-md-12 pe-2 mb-3">
                                            <div class="input-group input-group-static mb-4">
                                                <label>Nama Saya adalah</label>
                                                <input type="text" placeholder="Nama lengkap... " class="form-control" value="<?= $this->session->userdata('username') ?>" <?= $this->session->has_userdata('username') ? "readonly" : "" ?>>

                                                <input type="hidden" name="users_id" value="<?= $this->session->userdata('id') ?>">
                                                <input type="hidden" name="faskes_id" value="<?= $this->session->userdata('faskes_id') ?>">
                                                <!-- <?php foreach ($allKomentar as $item) { ?>
                                                    <input type="hidden" name="faskes_id" value="<?= $item->faskes_id ?>">
                                                <?php  } ?> -->
                                                <!-- <?= $this->session->userdata('faskes_id') ?> -->
                                                <input type="date" name="tanggal" value="<?= date("Y-m-d") ?>" hidden>


                                            </div>
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <div class="input-group input-group-static mb-4">
                                                <label>Skor rating</label> <br>
                                                <!-- <input type="number" placeholder="Pendapatmu tentang faskes ini... " class="form-control" id="rating-input" name="nilai_rating_id" min="1" max="5"> -->
                                                <div class="row">
                                                    <select name="nilai_rating_id" id="nilai_rating_id" class="custom-select">
                                                        <option hidden>-Pilih Rating-</option>
                                                        <option value="1">Jelek</option>
                                                        <option value="2">Kurang Bagus</option>
                                                        <option value="3">Biasa Aja</option>
                                                        <option value="4">Bagus</option>
                                                        <option value="5">Sangat Bagus</option>
                                                    </select>
                                                </div>

                                                <!-- <input id="rating-input" type="text" title="" /> -->
                                            </div>
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <div class="input-group input-group-static mb-4">
                                                <label>Komentarmu</label>
                                                <textarea class="form-control" id="isi" name="isi" rows="6" placeholder="Menurut saya faskes ini..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 text-end ms-auto">
                                            <!-- 
                                            <button type="submit" class="btn bg-gradient-info mb-0">
                                                <a href="<?= base_url("landing_page/detail_faskes") ?>/<?php echo $id ?>" type="button" class="btn btn-info">
                                                    Kirim
                                                </a>
                                            </button> -->
                                            <button type="submit" class="btn bg-gradient-info mb-0">

                                                Kirim

                                            </button>
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
        <!-- <script type="text/javascript" src="<?= base_url('assets/template/dist/js/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/template/dist/js/star-rating.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/template/dist/js/bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var $inp = $('#rating-input');

                //$inp.attr('value','4');

                $inp.rating({
                    min: 0,
                    max: 5,
                    step: 1,
                    size: 'sm',
                    showClear: false
                });
                $inp.on('rating.change', function() {
                    alert('Nilai rating : ' + $('#rating-input').val());
                });
            });
        </script> -->
    </section>
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