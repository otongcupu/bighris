<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="name" placeholder="" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="docdate" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-2">
                    <div class="input-group date" id="docdate" data-target-input="nearest">
                        <input type="text" class="form-control" data-target="#docdate" placeholder="<?= date('d M Y'); ?>" disabled>
                        <div class="input-group-append" data-target="#docdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="startdate" class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-2">
                    <div class="input-group date" id="startdate" data-target-input="nearest">
                        <input type="text" class="form-control" data-target="#startdate">
                        <div class="input-group-append" data-target="#startdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <label for="endDate" class="col-form-label">End Date</label>
                <div class="col-sm-2">
                    <div class="input-group date" id="endDate" data-target-input="nearest">
                        <input type="text" class="form-control" data-target="#endDate">
                        <div class="input-group-append" data-target="#endDate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <label for="doctype" class="col-sm-2 col-form-label">Doc Type</label>
                <div class="col-sm-2">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="idt" name="personal">
                            <label class="form-check-label">Izin Datang Terlambat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="ipa" name="personal">
                            <label class="form-check-label">Izin Pulang Awal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="dlk" name="personal">
                            <label class="form-check-label">Dinas Luar Kota</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="tck" name="personal">
                        <label class="form-check-label">Tidak Ceklok Keluar</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="tcm" name="personal">
                        <label class="form-check-label">Tidak Ceklok Masuk</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="tmk" name="personal">
                        <label class="form-check-label">Tidak Ceklok Pagi dan Sore</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="reason" class="col-sm-2 col-form-label">Reason</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="reason" name="reason" placeholder="Keterangan">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <a href="" class="btn btn-primary">SAVE</a>
                    <a href="<?= base_url('user'); ?>" class="btn btn-danger">CANCEL</a>
                </div>
            </div>
        </div>
</div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->