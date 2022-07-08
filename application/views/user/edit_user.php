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
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Edit User</h6>

                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container">
                                <?php echo form_open('user/save') ?>
                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <div class="container">



                                            <div class="row justify-space-between py-2">
                                                <div class="col-lg-4 ml-3">
                                                    <div class="input-group input-group-outline mb-4">
                                                        <label class="form-label">Username</label>
                                                        <input class="form-control" id="username" name="username" value="<?= set_value('username') ?>" type="text">
                                                        <small style="color: red; border:" class="text-right"><?= form_error('username') ?></small>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row justify-space-between py-2">
                                                <div class="col-lg-4 ml-3">
                                                    <div class="input-group input-group-outline mb-4">
                                                        <label class="form-label">Email</label>
                                                        <input class="form-control" id="email" name="email" value="<?= set_value('email') ?>" type="text">
                                                        <small style="color: red; border:" class="text-right"><?= form_error('email') ?></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-space-between py-2">
                                                <div class="col-lg-4 ml-3">
                                                    <div class="input-group input-group-outline mb-4">
                                                        <label class="form-label">Password</label>
                                                        <input class="form-control" id="password" name="password1" value="<?= set_value('password') ?>" type="password">
                                                        <small style="color: red; border:" class="text-right"><?= form_error('password') ?></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-space-between py-2">
                                                <div class="col-lg-4 ml-3">
                                                    <label class="form-label">Role</label> <br>
                                                    <select name="role" id="role" class="custom-select">
                                                        <option hidden>-Pilih Role-</option>
                                                        <option value="public">Public</option>
                                                        <option value="administrator">Administrator</option>
                                                    </select>
                                                    <small style="color: red; border:" class="text-right"><?= form_error('role') ?></small>
                                                </div>
                                            </div>

                                            <div class="row justify-space-between py-2">
                                                <div class="col-lg-4 ml-3">
                                                    <label class="form-label">Status</label> <br>
                                                    <select name="status" id="status" class="custom-select">
                                                        <option hidden>-Pilih Status-</option>
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Nonaktif</option>
                                                    </select>
                                                    <small style="color: red; border:" class="text-right"><?= form_error('status') ?></small>
                                                </div>
                                            </div>

                                            <br><br>
                                            <button type="submit" class="btn btn-success btn-block">Simpan</button>
                                            <a href="<?= base_url('user/data_user') ?>" class="btn btn-primary"> Kembali</a>
                                        </div>
                                    </div>
                                    <?php echo form_close() ?>
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