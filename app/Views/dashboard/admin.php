<!DOCTYPE html>
<html>

<head>
    <title>user</title>
</head>

<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-title">New Data user</div>
                            </div>
                            <form action="<?= base_url('user'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">username</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="username" name="username" aria-describedby="basic-addon3 basic-addon4" autofocus>
                                        </div>
                                        <label for="basic-url" class="form-label">password</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="password" name="password" aria-describedby="basic-addon3 basic-addon4" autofocus>
                                        </div>
                                        <label for="basic-url" class="form-label">role</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="role" name="role" aria-describedby="basic-addon3 basic-addon4" autofocus>
                                        </div>
                                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                                        <a href="<?= base_url('mobil'); ?>" class="btn btn-secondary">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
