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
                            <form class="p-3" id="contact-form" method="post">
                                <div class="card-header px-4 py-sm-5 py-3">
                                    <h2>Pendapatmu tentang faskes ini ?</h2>
                                    <p class="lead"> kirim kritik & saranmu !</p>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="row">
                                        <!-- <form action="<?= base_url('landing_page/fungsi_create_komentar') ?>" method="post"> -->
                                        <form action="<?= base_url('komentar/fungsi_create_komentar') ?>" method="post">

                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>Nama Saya adalah</label>
                                                    <input type="text" placeholder="Nama lengkap... " class="form-control" value="<?= $this->session->userdata('username') ?>" <?= $this->session->has_userdata('username') ? "readonly" : "" ?>>
                                                    <input type="hidden" name="users_id" value="<?= $this->session->userdata('id') ?>">
                                                    <?php foreach ($allKomentar as $item) { ?>
                                                        <input type="hidden" name="faskes_id" value="<?= $item->faskes_id ?>">
                                                    <?php  } ?>

                                                    <input type="hidden" name="tanggal" value="<?= date("Y-m-d") ?>">


                                                </div>
                                            </div>
                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>Skor rating</label>
                                                    <input type="number" placeholder="Pendapatmu tentang faskes ini... " class="form-control" id="rating-input" name="nilai_rating_id" min="1" max="5">
                                                    <!-- <input id="rating-input" type="text" title="" /> -->


                                                </div>
                                            </div>
                                            <div class="col-md-12 pe-2 mb-3">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>Komentarmu</label>
                                                    <textarea name="message" class="form-control" id="isi" name="isi" rows="6" placeholder="Menurut saya faskes ini..."></textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 text-end ms-auto">
                                            <button type="submit" class="btn bg-gradient-info mb-0">Kirim</button>
                                        </div>
                            </form>

                        </div>
                    </div>
                    </form>
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