<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
    include "utility/main.php";
    ?>
    <style>
        body {
            background: var(--abu);
        }

        .header {
            background-color: white;
            display: flex;

            justify-content: space-between;
            align-items: center;
            /* text-align:center; */
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }

        .logo {
            padding-left: 150px;
        }

        .button {
            margin-left: 20px;
            padding-right: 150px;
        }

        .button a {
            text-decoration: none;
            font-size: 15px;
        }

        .btn-login,
        .btn-reg {
            padding: 8px 18px;
            border-radius: 5px;
        }

        .btn-login {
            background-color: var(--abu);
            color: black;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-reg {
            background-color: var(--ijo);
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-reg:hover {
            background: #00A0A0;
        }

        .form {
            /* border:1px solid black; */
            height: 450px;
            width: 35%;
            display: flex;
            position: absolute;
            top: 150px;
            left: 500px;
            background: white;
            box-shadow: 1px 1px 5px black;
            font-family: open-sans, sans-serif;
            border-radius: 10px;
        }

        .form h3 {
            font-size: 28px;
            font-weight: small;
            color: var(--abu-tua);
            margin-top: 0;
        }

        .form2 {
            display: flex;
            /* border:1px solid black; */
            width: 100%;
            margin: 48px;
            justify-content: center;
        }

        form {
            width: 70%;
            height: 500px;
            /* border:1px solid black; */
            position: absolute;
            margin-top: 60px;
        }

        .form-content {
            border: 1px solid var(--abu-tua);
            padding: 8;
            margin-bottom: 16px;
            border-radius: 5px;
        }

        .form-content input {
            padding: 12px 17px;
            width: 75%;
            border: none;
            color: var(--abu-tua);
        }

        .form-content span {
            padding-left: 18px;

            color: var(--abu-tua);
            /* border:1px solid black; */
        }

        .pass input {
            width: 69%;

        }

        input::placeholder {
            font-size: 18px;
        }

        .fa-eye {
            padding-right: 3px;
        }

        .pass .show {
            padding: 0;
            margin-left: 10px;
        }

        .submit {
            width: 100%;
            padding: 10px 16px;
            border-radius: 5px;
            font-size: 17px;
            background: var(--ijo);
            border: none;
            cursor: pointer;
            color: white;
        }

        .login {
            text-align: center;
            width: 100%;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 15px;
            margin-top: 15px;
            background: none;
            border: 1px solid var(--abu-tua);
            color: var(--abu-tua);
        }

        .login:hover {
            background: var(--abu-tua);
            color: white;
        }

        .fa-google {
            margin-right: 10px;
        }

        .have-account {
            margin: 25px;
            text-align: center;
        }

        .have-account a {
            text-decoration: none;
            color: var(--abu-tua);
        }

        .have-account a:hover {
            color: var(--ijo);
        }
    </style>
</head>

<body>
    <div class="regist">
        <div class="header">
            <div class="logo">
                <img src="img/codepolitan.png" alt="" height="45" width="auto">
            </div>

            <div class="button">
                <a href="formlogin.php" type="login" class="btn-login">LOGIN</a>
                <a href="formregister.php" type="register" class="btn-reg">REGISTER</a>
            </div>
        </div>
        <div class="form">
            <div class="form2">
                <h3>Login</h3>
                <form action="utility/login.php" method="post">

                    <div class="form-content">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-content pass">
                        <span><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <span class="show" onclick="showPassword('password', 'showPassword1')"><i id="showPassword1" class="fa-solid fa-eye"></i></span>
                        <!-- <span><i class="fa-solid fa-eye-slash"></i></span> -->
                    </div>
                    <div class="submit-button">
                        <button type="login" name="login" class="submit">Login</button>
                    </div>
                    <div class="reg-google">
                        <button type="login-google" name="login-google" class="login"><i class="fa-brands fa-google"></i>Register With Google</button>
                    </div>
                    <div class="have-account">
                        <a href="#">Forgot Password</a><br>
                        <a href="#">Dont have an account?Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function showPassword(inputId, iconId) {
            var passwordInput = document.getElementById(inputId);
            var icon = document.getElementById(iconId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
    </div>
</body>

</html>