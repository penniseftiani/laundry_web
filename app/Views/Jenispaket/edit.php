<!DOCTYPE html>
<html>

<head>
    <title>jenis paket</title>
</head>

<body>
    </tbody>
    </table>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">New jenis paket</div>
                        </div>
                        <?= $validation->listErrors(); ?>
                        <form action="<?= base_url('jenispaket/' . $jenis_paket['id_jenis_paket']); ?>" method="post">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="basic-url" class="form-label">jenispaketname</label>
                                    <div class="input-group">
                                        <?= csrf_field(); ?>
                                        <input value="<?= $jenis_paket['nama_jenis_paket']; ?>" type="text" class="form-control" id="nama_jenis_paket" name="nama_jenis_paket" aria-describedby="basic-addon3 basic-addon4" autofocus>
                                    </div>
                                    <button type="submit" class="btn btn-primary my-2">Submit</button>
                                    <a href="<?= base_url('jenispaket'); ?>" class="btn btn-secondary">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>