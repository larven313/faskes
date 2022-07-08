<!DOCTYPE html>
<html lang="en">

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
	<!-- Navbar -->
	<?php $this->load->view('layouts/navbar') ?>
	<!-- End Navbar -->

	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12">
				<div class="card my-4">
					<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
						<div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
							<h6 class="text-white text-capitalize ps-3">Tambah Kecamatan</h6>
						</div>

					</div>
					<form action="<?= base_url('jenis_faskes/fungsi_create_jenis_faskes') ?>" method="post">
						<section class="py-3">
							<div class="container">
								<div class="row justify-space-between py-2">
									<div class="col-lg-4 ml-3">
										<div class="input-group input-group-outline mb-4">
											<label class="form-label">Nama Faskes</label>
											<input class="form-control" name='nama' id='nama' type="text">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-success">Tambah</button>
								<a href="<?= base_url('jenis_faskes') ?>" class="btn btn-primary"> Kembali</a>
							</div>
						</section>
					</form>
				</div>
			</div>
		</div>
		<footer class="footer py-4  ">
			<div class="container-fluid">
				<div class="row align-items-center justify-content-lg-between">
					<div class="col-lg-6 mb-lg-0 mb-4">
						<div class="copyright text-center text-sm text-muted text-lg-start">
							© <script>
								document.write(new Date().getFullYear())
							</script>,
							made with <i class="fa fa-heart"></i> by
							<a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
							for a better web.
						</div>
					</div>
					<div class="col-lg-6">
						<ul class="nav nav-footer justify-content-center justify-content-lg-end">
							<li class="nav-item">
								<a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
							</li>
							<li class="nav-item">
								<a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
							</li>
							<li class="nav-item">
								<a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
							</li>
							<li class="nav-item">
								<a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
</main>