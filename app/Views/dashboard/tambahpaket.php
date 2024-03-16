<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/tp.css') ?>">
</head>
<body>
<div class="container">
    <h2>Tambah Paket</h2>
    <form actiom="paket/create" method="post">
        <label for="nama">Nama Paket:</label>
        <input type="text" id="nama" name="nama" required>
        <span class="error-message" id="error-nama"></span><br>
        
        <label for="no_id">harga Paket:</label>
        <input type="text" id="no_id" name="no_id" required>
        <span class="error-message" id="error-no_id"></span><br>
        
        <label for="user_name">Jenis Paket:</label>
        <select name="id_jenis_paket" id="id_jenis_paket">
        <option value="1">Kiloan</option>
        <option value="2">Selimut</option>
        <option value="3">Bad Cover</option>
        <option value="4">Celana</option>
        <option value="5">Satuan</option></select>
        <input type="text" id="user_name" name="user_name" required>
        <span class="error-message" id="error-user_name"></span><br>
        
        <!-- <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span class="error-message" id="error-password"></span><br> -->
        
        <input type="submit" value="Kirim" class="btn btn-primary"><input type="submit" value="Batal">
        
    </form>
</div>

<script>
    document.getElementById('registration-form').addEventListener('submit', function(event) {
        var isValid = true;
        var nama = document.getElementById('nama').value;
        var noId = document.getElementById('no_id').value;
        var userName = document.getElementById('user_name').value;
        var password = document.getElementById('password').value;
        
        // Validasi Nama
        if (nama.trim() === '') {
            isValid = false;
            document.getElementById('error-nama').innerText = 'Nama tidak boleh kosong';
        } else {
            document.getElementById('error-nama').innerText = '';
        }
        
        // Validasi No. ID
        if (noId.trim() === '') {
            isValid = false;
            document.getElementById('error-no_id').innerText = 'No. ID tidak boleh kosong';
        } else {
            document.getElementById('error-no_id').innerText = '';
        }
        
        // Validasi User Name
        if (userName.trim() === '') {
            isValid = false;
            document.getElementById('error-user_name').innerText = 'User Name tidak boleh kosong';
        } else {
            document.getElementById('error-user_name').innerText = '';
        }
        
        // Validasi Password
        if (password.trim() === '') {
            isValid = false;
            document.getElementById('error-password').innerText = 'Password tidak boleh kosong';
        } else {
            document.getElementById('error-password').innerText = '';
        }
        
        if (!isValid) {
            event.preventDefault();
        }
    });
</script>


</body>
</html>