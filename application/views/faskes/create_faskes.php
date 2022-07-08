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
							<section>
								<div class="container py-4">
									<div class="row">
										<div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
											<h3 class="text-center">Tambah Faskes</h3>
											<?php echo form_open_multipart('faskes/fungsi_create_faskes'); ?>
											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="input-group input-group-dynamic mb-4">
															<label class="form-label">Nama</label>
															<input class="form-control" aria-label="Nama..." type="text" name="nama" id='nama'>
														</div>
													</div>
													<div class="col-md-4 ps-2">
														<div class="input-group input-group-dynamic">
															<label class="form-label">Latlong</label>
															<input type="text" name="latlong" id="latlong" class="form-control">
														</div>
													</div>
												</div>
												<div class="mb-6">
													<div class="input-group input-group-dynamic">
														<label class="form-label">Alamat</label>
														<input type="text" class="form-control" placeholder="" aria-label="Alamat..." name="alamat" id="alamat">
													</div>
												</div>
												<div>
													<label class="form-label">Jenis Faskes</label><br>
													<select name="jenis_id" id="jenis_id">
														<?php foreach ($queryAllJenis_Faskes as $jenis_faskes) {
														?>
															<option value="<?php echo $jenis_faskes->id ?>"><?php echo $jenis_faskes->nama ?></option>

														<?php } ?>
													</select>
												</div>
												<div class="input-group mb-4 input-group-static">
													<label>Deskripsi</label>
													<textarea name="deskripsi" class="form-control" id="deskripsi" rows="4"></textarea>
												</div>

												<div class="mb-4">
													<div>
														<label class="form-label">Foto 1</label>
														<input type="file" name="foto1" id="foto1" size="20">
													</div>
												</div>
												<div class="mb-4">
													<div>
														<label class="form-label">Foto 2</label>
														<input type="file" name="foto2" id="foto2" size="20">
													</div>
												</div>
												<div class="mb-4">
													<div>
														<label class="form-label">Foto 3</label>
														<input type="file" name="foto3" id="foto3" size="20">
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="input-group input-group-dynamic mb-4">
															<label class="form-label">Jumlah Dokter</label>
															<input class="form-control" aria-label="Jumlah dokter" type="number" name="jumlah_dokter" id='jumlah_dokter' min='0'>
														</div>
													</div>
													<div class="col-md-4 ps-2">
														<div class="input-group input-group-dynamic">
															<label class="form-label">Jumlah Pegawai</label>
															<input type="number" name="jumlah_pegawai" id="jumlah_pegawai" class="form-control" min='0'>
														</div>
													</div>
												</div>
												<div class="mb-4">
													<div class="input-group input-group-dynamic">
														<label class="form-label">Skor Rating</label>
														<input type="number" name="skor_rating" id="skor_rating" class="form-control" min="0.1" max="5" step="0.1">
													</div>
												</div>
												<div class="mb-4">
													<label class="form-label">Kecamatan</label> <br>
													<select name="kecamatan_id" id="kecamatan_id">
														<?php foreach ($queryAllKecamatan as $kecamatan) {
														?>
															<option value="<?php echo $kecamatan->id ?>"><?php echo $kecamatan->nama ?></option>

														<?php } ?>
													</select>
												</div>
												<div class="mb-3">
													<div class="input-group input-group-dynamic">
														<label class="form-label">Website</label>
														<input type="text" class="form-control" placeholder="" aria-label="Website..." name="website" id="website">
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<button type="submit" class="btn bg-gradient-dark w-100">Simpan</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<?php echo form_close(); ?>

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