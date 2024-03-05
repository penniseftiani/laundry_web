
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #59D5E0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.header {
    width: 100%;
    background-color: #005b96;
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
}

.header h1 {
    margin: 0;
    font-size: 1.8em;
}

.container {
    background-color: #ffffff;
    width: 100%;
    max-width: 400px;
    margin-top: 80px; 
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    z-index: 100;
}

.login-form h2 {
    text-align: center;
    margin-bottom: 24px;
    color: #333;
}

.login-form p {
    text-align: center;
    margin-bottom: 24px;
    color: #666;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.login-form button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 4px;
    background-color: #005b96;
    color: white;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s;
}

.login-form button:hover {
    background-color: #004080;
}

@media (max-width: 768px) {
    .header {
        flex-direction: column;
        padding: 15px;
    }

    .container {
        width: 90%;
        margin-top: 120px; 
    }
}
</style>

<div class="container">
	<div class="row justify-content-center my-2">
		<div class="col-lg-5 mx-5 border border-success rounded bg-info text-white p-5">
			<h1 class="text-center"><b>Permata Laundry</b></h1></br>
			<h2><center><font size="5">Sign in</font></center></h2></br>
			<form method="post" action="<?= base_url('login/auth') ?>"><td>
			  <div class="form-group">
			    <label for="username"><i class="fas fa-fw fa-user"></i> Nama Pengguna</label>
			    <input required type="text" autocomplete="off" id="username" class="form-control rounded-pill" name="username">
			  </div>
              <br>
			  <div class="form-group">
			    <label for="password"><i class="fas fa-fw fa-lock"></i> Kata Sandi</label>
			    <input required type="password" id="password" class="form-control rounded-pill" name="password">
			  </div>
			  <div class="input-field">
			    <input type="submit" class="submit" value="Login">
			  </div>
			</form>
			
		</div>
	</div>
</div>
