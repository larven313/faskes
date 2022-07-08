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
							<?php
							foreach ($queryDetailViewFaskes as $faskes) {
							?>
								<h3 class="text-white text-capitalize ps-3"><?php echo $faskes->nama_faskes ?></h3>
						</div>

					</div>
					<div class="card-body px-0 pb-2">
						<div class="row container">
							<div class="col-8">
								<div class="row">
									<div class="col-6">
										<span class="text-bold"> Kategori Faskes : </span> <?php echo $faskes->nama_jenis_faskes ?>
									</div>

									<div class="col-6">
										<i class="fa fa-star text-warning"></i>
										<?php echo $faskes->skor_rating ?>
									</div>

								</div>


								<table>
									<tr>
										<td class="text-bold">Deskripsi :</td>
									</tr>
									<tr>
										<td>
											<?php echo $faskes->deskripsi ?>
										</td>
									</tr>
									<tr>
										<td class="text-bold">Alamat :</td>
									</tr>
									<tr>
										<td>
											<?php echo $faskes->alamat ?>, Kecamatan <?php echo $faskes->nama_kecamatan ?>
										</td>
									</tr>
									<tr>
										<td>
											<?php echo $faskes->latlong ?>
										</td>
									</tr>

								</table>

								<div class="row mt-3">
									<div class="col-6">

										<div class="card" style="width: 18rem;">
											<div class="card-body">
												<p class="card-text">
													<i class="fa-solid fa-user-doctor "></i>
													Jumlah Dokter : <?php echo $faskes->jumlah_dokter ?>
												</p>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="card" style="width: 18rem;">
											<div class="card-body">
												<p class="card-text">
													<i class="fa-solid fa-user-tie"></i>
													Jumlah Pegawai : <?php echo $faskes->jumlah_pegawai ?>
												</p>
											</div>
										</div>

									</div>
								</div>
								<div class="row mt-5">
									<div class="col-8">
										<span class="text-bold"> Website :</span> <a href=""><?php echo $faskes->website ?></a>
									</div>
									<div class="col-4">
										<a href="<?= base_url("faskes") ?>" type="button" class="btn btn-warning text-capitalize ps-3">
											<i class="fa-solid fa-arrow-left"></i>
											Kembali</a>
									</div>
								</div>


							</div>

							<div class="col-4">
								<div class="text-bold">Galeri</div>
								<table>
									<tr>
										<td style="padding : 5px;">
											<img style="width: 150px;" src="<?php echo base_url('assets/images/foto1_faskes/') ?><?php echo $faskes->foto1 ?>" alt="">
										</td>
										<td style="padding : 5px;" rowspan='1' valign='bottom'>
											<img style="width: 150px;" src="<?php echo base_url('assets/images/foto1_faskes/') ?><?php echo $faskes->foto2 ?>" alt="">

										</td>
									</tr>
									<tr>
										<td style="padding : 5px;">
											<img style="width: 150px;" src="<?php echo base_url("assets/images/foto1_faskes/") ?><?php echo $faskes->foto3 ?>" alt="">

										</td>
									</tr>
								</table>

							<?php } ?>
							</div>
						</div>
					</div>
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