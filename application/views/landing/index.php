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

  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/template/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png') ?>">

  <title>
    Fasilitas Kesehatan Depok
  </title>



  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('assets/template/css/nucleo-icons.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/template/css/nucleo-svg.css') ?>" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->



  <link id="pagestyle" href="<?php echo base_url('assets/template/css/material-kit.css?v=3.0.4') ?>" rel="stylesheet" />



</head>

<body class="index-page bg-gray-200">


  <!-- Navbar -->
  <?php $this->load->view('layouts/navbar_landing.php'); ?>



  <header class="header-2">
    <!-- landing page -->

    <div class="page-header min-vh-75 relative" style="background-image: url('https://cdn.antaranews.com/cache/730x487/2020/03/27/pemkotdepok.jpg')">
      <span class="mask bg-gradient-success opacity-4"></span>

      <div class="container">

        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Sehat-in Depok</h1>
            <p class="lead text-white mt-3">Memberikan informasi mengenai fasilitas kesehatan di kota Depok <br />Ayo bergabung untuk memberikan kritik & saran yang membangun. </p>
          </div>
        </div>
      </div>
    </div>

  </header>


  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">



    <section class="my-5 py-5">
      <div class="container">
        <section class="pt-3 pb-4" id="count-stats">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 mx-auto py-3">
                <div class="row">
                  <div class="col-md-12 align-center" style="align-items: center;">
                    <hr class="vertical dark">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-primary"> <span id="state2" countTo="<?= $jmlhFaskes ?>"><?= $jmlhFaskes ?></span></h1>
                      <h5 class="mt-3">Jumlah Faskes</h5>
                      <p class="text-sm font-weight-normal">Fasilitas kesehatan yang tersedia di kota Depok</p>
                      <a href="<?= base_url('landing_page/index') ?>" class="btn btn-success">Selengkapnya</a>
                    </div>
                    <hr class="vertical dark">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="row align-items-center">
          <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
            <div class="rotating-card-container">
              <div class="card card-rotate card-background card-background-mask-success shadow-success mt-md-0 mt-5">
                <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                  <div class="card-body py-7 text-center">
                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                    <h3 class="text-white">Feel the <br /> Material Kit</h3>
                    <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white">Discover More</h3>
                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                    <a href=".//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ms-auto">
            <div class="row justify-content-start">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-gradient text-success text-3xl">content_copy</i>
                  <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                  <p class="pe-5">Mencatat seluruh informasi fasilitas kesehatan di kota Dpeok.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-gradient text-success text-3xl">flip_to_front</i>
                  <h5 class="font-weight-bolder mt-3">Fact & Reliable</h5>
                  <p class="pe-3">Informasi yang diberikan akurat dan tidak dimanipulasi.</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-5">
              <div class="col-md-6 mt-3">
                <i class="material-icons text-gradient text-success text-3xl">price_change</i>
                <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
                <p class="pe-5">Hemat waktu dan uang dalam mencari informasi fasilitas kesehatan di Depok.</p>
              </div>
              <div class="col-md-6 mt-3">
                <div class="info">
                  <i class="material-icons text-gradient text-success text-3xl">devices</i>
                  <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                  <p class="pe-3">Admin responsif terhadap kritik & saran dari warga.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




  </div>



  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="row text-center my-sm-5 mt-5">
          <div class="col-lg-6 mx-auto">
            <span class="badge bg-success mb-3">Stay Safe !</span>
            <h2 class="">Dengan pelayanan Kami</h2>
            <p class="lead">Warga Depok diharapkan menjadi warga yang sehat jasmani dan rohani.<br /></p>
          </div>
        </div>
      </div>
    </div>

  </section>


  <!-- -------- START Content Presentation Docs ------- -->
  <div class="container mt-sm-5">
    <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');" loading="lazy">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ms-lg-5">
            <h4 class="text-white">Built by developers</h4>
            <h1 class="text-white">Complex Documentation</h1>
            <p class="lead text-white opacity-8">From colors, cards, typography to complex elements, you will find the full documentation. Play with the utility classes and you will create unlimited combinations for our components.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
              Read docs
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="info-horizontal bg-gradient-success border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-white text-3xl">flag</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5 class="text-white">Getting Started</h5>
            <p class="text-white">Check the possible ways of working with our product and the necessary files for building your own project.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
              Let's start
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
          <i class="material-icons text-gradient text-success text-3xl">precision_manufacturing</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5>Plugins</h5>
            <p>Get inspiration and have an overview about the plugins that we used to create the Material Kit.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit" class="text-success icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
          <i class="material-icons text-gradient text-success text-3xl">receipt_long</i>
          <div class="ps-0 ps-md-3 mt-3 mt-md-0">
            <h5>Utility Classes</h5>
            <p>Material Kit is giving you a lot of pre-made elements. For those who want flexibility, we included many utility classes.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit" class="text-success icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -------- END Content Presentation Docs ------- -->


  <section class="py-7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <h2 class="mb-0">Telah melayani</h2>
          <h2 class="text-gradient text-success mb-3">1,679,477+ Pasien di Depok</h2>
          <p class="lead">dan terus memberikan pelayanan yang terbaik untuk warga Depok.</p>
        </div>
      </div>
      <div class="row mt-6">
        <div class="col-lg-4 col-md-8">
          <div class="card card-plain">
            <div class="card-body">
              <div class="author">
                <div class="name">
                  <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                  <div class="stats">
                    <i class="far fa-clock"></i> 1 day ago
                  </div>
                </div>
              </div>
              <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things done more efficiently."</p>
              <div class="rating mt-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-8 ms-md-auto">
          <div class="card bg-gradient-success">
            <div class="card-body">
              <div class="author align-items-center">
                <div class="name">
                  <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                  <div class="stats text-white">
                    <i class="far fa-clock"></i> 1 week ago
                  </div>
                </div>
              </div>
              <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I use them as a freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</p>
              <div class="rating mt-3">
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-8">
          <div class="card card-plain">
            <div class="card-body">
              <div class="author">
                <div class="name">
                  <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                  <div class="stats">
                    <i class="far fa-clock"></i> 3 weeks ago
                  </div>
                </div>
              </div>
              <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the components within instead of starting from scratch. I highly recommend for developers who want to spend more time on the backend!."</p>
              <div class="rating mt-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>

      </div>
      <hr class="horizontal dark my-5">

    </div>
  </section>


  <section class="py-sm-7" id="download-soft-ui">
    <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
      <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
      <div class="container py-7 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <h3 class="text-white mb-0">Do you love this awesome</h3>
            <h3 class="text-white">UI Kit for Bootstrap 5?</h3>
            <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
            <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-success btn-lg mb-3 mb-sm-0">Download HTML</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto">
          <div class="text-center">
            <h3 class="mt-5 mb-4">Available on these technologies</h3>
            <div class="row justify-content-center">
              <div class="col-lg-2 col-4">
                <a href="https://www.creative-tim.com/product/soft-ui-design-system" target="_blank">
                  <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/bootstrap5.jpg" class="img-fluid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bootstrap 5 - Most popular front-end component library">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;">
                  <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/icon-tailwind.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;">
                  <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;">
                  <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;">
                  <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
              <div class="col-lg-2 col-4">
                <a href="javascript:;" target="_blank">
                  <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-auto">
          <h4 class="mb-1">Thank you for your support!</h4>
          <p class="lead mb-0">We deliver the best web products</p>
        </div>
        <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit" class="btn btn-twitter mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit" class="btn btn-facebook mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1"></i> Share
          </a>
          <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit" class="btn btn-pinterest mb-0 me-2" target="_blank">
            <i class="fab fa-pinterest me-1"></i> Pin it
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

  </div>




  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="https://www.creative-tim.com/product/material-kit">
              <img src="<?= base_url('assets/template/dist/img/logo-ct-dark.png') ?>" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">Material Kit 2</h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                  Freebies
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                  Premium Tools
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                  Blog
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Resources</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                  Illustrations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                  Bits & Snippets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                  Affiliate Program
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Help & Support</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                  Knowledge Center
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                  Custom Development
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                  Sponsorships
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-sm">Legal</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                  Terms & Conditions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                  Privacy Policy
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                  Licenses (EULA)
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>





















  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/template/dist/js/core/popper.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/template/dist/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/template/dist/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="<?= base_url('assets/template/dist/js/plugins/countup.min.js') ?>"></script>
  <script src="<?= base_url('assets/template/dist/js/plugins/choices.min.js') ?>"></script>



  <script src="<?= base_url('assets/template/dist/js/plugins/prism.min.js') ?>"></script>
  <script src="<?= base_url('assets/template/dist/js/plugins/highlight.min.js') ?>"></script>



  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="<?= base_url('assets/template/dist/js/plugins/rellax.min.js') ?>"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js') ?>/ -->
  <script src="<?= base_url('assets/template/dist/js/plugins/tilt.min.js') ?>"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="<?= base_url('assets/template/dist/js/plugins/choices.min.js') ?>"></script>


  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="<?= base_url('assets/template/dist/js/plugins/parallax.min.js') ?>"></script>











  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="<?= base_url('assets/template/dist/js/material-kit.min.js?v=3.0.4') ?>" type="text/javascript"></script>


  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>



























</body>

</html>