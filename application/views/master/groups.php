<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>

                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>


                    <?= $this->session->flashdata('message'); ?>
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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Work Groups</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <div class="input-group-append">
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newGroupsModal">
                                    Add New Groups
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Sunday</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($groups as $grp) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $grp['code']; ?></td>
                                    <td><?= $grp['description']; ?></td>
                                    <td><?= $grp['sunday']; ?></td>
                                    <td><?= $grp['monday']; ?></td>
                                    <td><?= $grp['tuesday']; ?></td>
                                    <td><?= $grp['wednesday']; ?></td>
                                    <td><?= $grp['thursday']; ?></td>
                                    <td><?= $grp['friday']; ?></td>
                                    <td><?= $grp['saturday']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="newGroupsModal" tabindex="-1" aria-labelledby="newGroupsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newGroupsModalLabel">Add New Groups</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('master/groups'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="code" name="code" placeholder="Group Code">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label>Sunday</label>
                        <select name="sunday" id="sunday" class="form-control">
                            <option value="">Select Code</option>
                            <?php foreach ($workcode as $w) : ?>
                                <option value="<?= $w['code']; ?>"><?= $w['code']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Monday</label>
                        <select name="monday" id="monday" class="form-control">
                            <option value="">Select Code</option>
                            <?php foreach ($workcode as $w) : ?>
                                <option value="<?= $w['code']; ?>"><?= $w['code']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tuesday</label>
                        <select name="tuesday" id="tuesday" class="form-control">
                            <option value="">Select Code</option>
                            <?php foreach ($workcode as $w) : ?>
                                <option value="<?= $w['code']; ?>"><?= $w['code']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Wednesday</label>
                        <select name="wednesday" id="wednesday" class="form-control">
                            <option value="">Select Code</option>
                            <?php foreach ($workcode as $w) : ?>
                                <option value="<?= $w['code']; ?>"><?= $w['code']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Thursday</label>
                        <select name="thursday" id="thursday" class="form-control">
                            <option value="">Select Code</option>
                            <?php foreach ($workcode as $w) : ?>
                                <option value="<?= $w['code']; ?>"><?= $w['code']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Friday</label>
                        <select name="friday" id="friday" class="form-control">
                            <option value="">Select Code</option>
                            <?php foreach ($workcode as $w) : ?>
                                <option value="<?= $w['code']; ?>"><?= $w['code']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Saturday</label>
                        <select name="saturday" id="saturday" class="form-control">
                            <option value="">Select Code</option>
                            <?php foreach ($workcode as $w) : ?>
                                <option value="<?= $w['code']; ?>"><?= $w['code']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="schedule" name="schedule" placeholder="Schedule">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="daywork" name="daywork" placeholder="Daywork">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="dayoff" name="dayoff" placeholder="Dayoff">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>