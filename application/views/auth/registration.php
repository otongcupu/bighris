<div class="register-box">
    <div class="register-logo">
        <a href=""><b>PT BIG Registration</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new employee</p>

            <form action="<?= base_url('auth/registration'); ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-id-card"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group mt-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group mb-3 mt-3">
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3 mt-3">
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-3 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?= base_url('auth'); ?>" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->