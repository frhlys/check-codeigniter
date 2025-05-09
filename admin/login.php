<?php 
session_start();
include("php/config.php");

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Embedded CSS -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body {
        background: #fff3e0;
    }
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;
    }
    .box {
        background: #fff;
        display: flex;
        flex-direction: column;
        padding: 25px;
        border-radius: 20px;
        box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                    0 32px 64px -48px rgba(0,0,0,0.3);
    }
    .form-box {
        width: 450px;
        margin: 0px 10px;
    }
    .form-box header {
        font-size: 25px;
        font-weight: 600;
        padding-bottom: 10px;
        border-bottom: 1px solid #ffcc80;
        margin-bottom: 10px;
        color: black;
    }
    .form-box form .field {
        display: flex;
        margin-bottom: 10px;
        flex-direction: column;
    }
    .form-box form .input input {
        height: 40px;
        width: 100%;
        font-size: 16px;
        padding: 0 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
        transition: border 0.3s ease;
    }
    .form-box form .input input:focus {
        border-color: #ffa726;
    }
    .btn {
        height: 35px;
        background: #fb8c00;
        border: 0;
        border-radius: 5px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        transition: background 0.3s ease;
        margin-top: 10px;
        padding: 0px 10px;
    }
    .btn:hover {
        background: #ef6c00;
    }
    .submit {
        width: 100%;
    }
    .links {
        margin-bottom: 15px;
    }
    .links a {
        color: #ef6c00;
        text-decoration: none;
    }
    .links a:hover {
        text-decoration: underline;
    }
    .message {
        text-align: center;
        background: #fff8e1;
        padding: 15px 0px;
        border: 1px solid #ffa726;
        border-radius: 5px;
        margin-bottom: 10px;
        color: #e65100;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php 
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $result = mysqli_query($con, "SELECT * FROM admin WHERE Email='$email' AND Password='$password'") or die("Query Failed: " . mysqli_error($con));
				
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    $_SESSION['admin'] = $row['email'];
					$_SESSION['admin_id'] = $row['admin_id'];
          

                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo "<div class='message'><p>Wrong Email or Password</p></div><br>";
                    echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
                }
            } else {
            ?>

            <header>Admin Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
        
				
				 <div class="links">
                   <a href="../index.php">Go Back</a>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
