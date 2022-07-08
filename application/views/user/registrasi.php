<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-success h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="
										background-image: url('https://img.freepik.com/free-vector/hospital-building-concept-illustration_114360-8240.jpg?w=2000');
										background-size: cover;
									"></div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="font-weight-bolder">Sign Up</h4>
                                <p class="mb-0">
                                    Enter your email and password to register
                                </p>
                            </div>
                            <div class="card-body">
                                <form action="<?php base_url('user/registration') ?>" method="post">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username') ?>">
                                        <small style="color: red; border:" class="text-right"><?= form_error('username') ?></small>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" value="<?= set_value('email') ?>">
                                        <small style="color: red;" class="text-right"><?= form_error('email') ?></small>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password1" name="password1">
                                        <small style="color: red;" class="text-right"><?= form_error('password1') ?></small>
                                    </div>
                                    <div class="form-check form-check-info text-start ps-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree the
                                            <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg bg-gradient-success btn-lg w-100 mt-4 mb-0">
                                            Sign Up
                                        </button>

                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    Already have an account?
                                    <a href="<?php echo base_url('user') ?>" class="text-success text-gradient font-weight-bold">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>

</html>