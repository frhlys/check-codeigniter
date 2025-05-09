<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        * { padding: 0; margin: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: #fff3e0; }
        .container { display: flex; align-items: center; justify-content: center; min-height: 90vh; }
        .box { background: #fff; display: flex; flex-direction: column; padding: 25px; border-radius: 20px; box-shadow: 0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -48px rgba(0,0,0,0.3); }
        .form-box { width: 450px; margin: 0px 10px; }
        .form-box header { font-size: 25px; font-weight: 600; padding-bottom: 10px; border-bottom: 1px solid #ffcc80; margin-bottom: 10px; color: black; }
        .form-box form .field { display: flex; margin-bottom: 10px; flex-direction: column; }
        .form-box form .input input { height: 40px; width: 100%; font-size: 16px; padding: 0 10px; border-radius: 5px; border: 1px solid #ccc; outline: none; transition: border 0.3s ease; }
        .form-box form .input input:focus { border-color: #ffa726; }
        .btn { height: 35px; background: #fb8c00; border: 0; border-radius: 5px; color: #fff; font-size: 15px; cursor: pointer; transition: background 0.3s ease; margin-top: 10px; padding: 0px 10px; }
        .btn:hover { background: #ef6c00; }
        .submit { width: 100%; }
        .links { margin-bottom: 15px; }
        .links a { color: #ef6c00; text-decoration: none; }
        .links a:hover { text-decoration: underline; }
        .message { text-align: center; background: #fff8e1; padding: 15px 0px; border: 1px solid #ffa726; border-radius: 5px; margin-bottom: 10px; color: #e65100; }
    </style>
</head>
<body>
<div class="container">
    <div class="box form-box">
        <?php if (isset($error)) : ?>
            <div class="message"><p><?= $error ?></p></div>
        <?php endif; ?>

        <header>User Login</header>
        <form action="<?= site_url('login/auth') ?>" method="post">
            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required autocomplete="off">
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required autocomplete="off">
            </div>

            <div class="field">
                <input type="submit" class="btn submit" value="Login">
            </div>

            <div class="links">
                Don't have an account? <a href="#">Sign Up Now</a>
            </div>
            <div class="links">
                <a href="admin/login.php">Login as Admin</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
