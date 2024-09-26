<div class="login-box">
    <div class="login-logo">
        <a href=""><b>PT BERHASIL INDONESIA GEMILANG</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg"></p>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth'); ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user-circle"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-group mt-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="row">
                    <div class="col-4 mb-3 mt-3 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!--
            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="<?= base_url('auth/registration'); ?>" class="text-center">Register a new membership</a>
            </p>
            -->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->