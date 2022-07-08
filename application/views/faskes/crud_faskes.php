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
							<h6 class="text-white text-capitalize ps-3">Daftar Faskes</h6>

						</div>

					</div>
					<div class="card-body px-0 pb-2">
						<div class="table-responsive p-0">
							<div style="margin-left:30px;">
								<a href="<?= base_url("faskes/create_faskes") ?>" type="button" class="btn btn-success text-capitalize ps-3">
									<i class="fa-solid fa-plus"></i>
									Tambah Faskes</a>


							</div>
							<table class="table align-items-center mb-0">




								<thead>

									<tr>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Faskes</th>
										<!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th> -->
										<!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Latlong</th> -->
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Faskes</th>
										<!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th> -->
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Skor Tertinggi</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kecamatan</th>
										<!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Website</th> -->
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Dokter</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Pegawai</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>

									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($queryAllFaskes as $faskes) {
									?>
										<tr>
											<td>
												<div class="d-flex px-2 py-1">
													<div class="d-flex flex-column justify-content-center">
														<h6 class="mb-0 text-sm"><?php echo $no++ ?></h6>
													</div>
												</div>
											</td>
											<td>
												<p class="text-xs font-weight-bold mb-0"><?php echo $faskes->nama_faskes ?></p>
											</td>
											<!-- <td>
												<p class="text-xs font-weight-bold mb-0">
													<?php
													// echo $faskes->alamat
													?>
												</p>
											</td> -->
											<!-- <td>
												<p class="text-xs font-weight-bold mb-0"><?php echo $faskes->latlong  ?></p>
											</td> -->
											<td>
												<p class="text-xs font-weight-bold mb-0"><?php echo $faskes->nama_jenis_faskes  ?></p>
											</td>


											<!-- <td>
												<p class="text-xs font-weight-bold mb-0">
													<?php
													// echo $faskes->deskripsi 
													?>
												</p>
											</td> -->
											<td>
												<p class="text-xs font-weight-bold mb-0"><?php echo $faskes->skor_rating  ?></p>
											</td>
											<td>
												<p class="text-xs font-weight-bold mb-0"><?php echo $faskes->nama_kecamatan  ?></p>
											</td>
											<!-- <td>
												<p class="text-xs font-weight-bold mb-0">
													<?php
													// echo $faskes->website
													?>
												</p>
											</td> -->
											<td>
												<p class="text-xs font-weight-bold mb-0"><?php echo $faskes->jumlah_dokter  ?></p>
											</td>
											<td>
												<p class="text-xs font-weight-bold mb-0"><?php echo $faskes->jumlah_pegawai  ?></p>
											</td>
											<td class="align-middle">
												<a href="<?= base_url("faskes/detail_faskes") ?>/<?php echo $faskes->faskes_id ?>" type="button" class="btn btn-info btn-sm text-xs "> Detail</a>
												<a href="<?= base_url("faskes/edit_faskes") ?>/<?php echo $faskes->faskes_id ?>" type="button" class="btn btn-info btn-sm text-xs "> Edit</a>
												<a href="<?php echo base_url('faskes/delete_faskes') ?>/<?php echo $faskes->faskes_id ?>" type="button" class="btn btn-primary btn-sm text-xs"> Delete</a>
											</td>

										</tr>
									<?php
									} ?>
								</tbody>
							</table>
							<div class="container mt-3 d-flex justify-content-center">
								<?php echo $this->pagination->create_links(); ?>
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