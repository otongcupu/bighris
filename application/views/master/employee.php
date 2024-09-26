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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employee List</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <div class="input-group-append">
                                <a href="<?= base_url('master/addemployee'); ?>" class="btn btn-primary">
                                    Add Employee
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="location" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Religion</th>
                                <th>Join Date</th>
                                <th>Status</th>
                                <th>Birth Place</th>
                                <th>Birth Date</th>
                                <th>Division</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($employee as $emp) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $$emp['empid']; ?></td>
                                    <td><?= $emp['fullname']; ?></td>
                                    <td><?= $$emp['gender']; ?></td>
                                    <td><?= $$emp['religion']; ?></td>
                                    <td><?= $$emp['hiredate']; ?></td>
                                    <td><?= $$emp['status']; ?></td>
                                    <td><?= $$emp['birthplace']; ?></td>
                                    <td><?= $emp['birthdate']; ?></td>
                                    <td><?= $emp['division']; ?></td>
                                    <td><?= $emp['position']; ?></td>
                                    <td><a class="btn btn-warning btn-sm" href="#">
                                            <i class="fas fa-search"></i>
                                            Detail
                                        </a></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->