<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="<?= base_url("assets/dist/css/style.css"); ?>">
</head>

<body class="body-login">
    <div class="login-container">
        <div class="login">
            <form action='login/auth' method="post" style="border-sizing: border-box">
                <h1>Login</h1>
                <hr>
                <p>Halaman Login</p>
                <label for="">Username</label>
                <input type="text" id="username" name="username" required placeholder="Username">
                <label for="">Password</label>
                <input type="password" id="password" name="password" required placeholder="Password">
                <button>Login</button>
                <p>
                    <a href="">Forgot password ?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="<?= base_url("assets/dist/img/order_map.png"); ?> " alt="ordermap">
        </div>
    </div>
</body>

</html>