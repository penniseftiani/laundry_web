`
<!DOCTYPE html>
<html>

<head>
    <title>user</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="<?= base_url('jenispaket/new'); ?>" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
                        <table id="example2" class="table table-bordered table-hover ">
                            <thead class="text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>username</th>
                                </tr>
                            </thead>
                            </thead>
                            <tbody>
                                <?php $a = 1;
                                foreach ($jenis_paket as $j) : ?>
                                    <tr>
                                        <td><?= $a++; ?></td>
                                        <td><?= $j['nama_jenis_paket']; ?></td>
                                        <td>
                                            <a href="<?= base_url('jenispaket') . '/' . $j['id_jenis_paket'] . '/' . ('delete'); ?>" type="button" class="btn btn-danger btn-sm" method="post">Delete</a>
                                            <a href="<?= base_url('jenispaket') . '/' . $j['id_jenis_paket'] . '/' . ('edit'); ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
</body>

</html>`