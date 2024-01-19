<?php
include "../connection.php";
if (isset($_POST['register'])) {
    function register($data)
    {
        global $db_connection;

        $fullname = htmlspecialchars($data["fullname"]);
        $username =  strtolower(stripcslashes($data["username"]));
        $email =  mysqli_real_escape_string($db_connection, $data["email"]);
        $whatssap =  htmlspecialchars($data["whatsapp"]);
        $password =  mysqli_real_escape_string($db_connection, $data["password"]);
        $password2 =  mysqli_real_escape_string($db_connection, $data["retype_password"]);
        $profilePicture =  isset($data["profilePicture"]) ? $data["profilePicture"] : "default.png";

        //cek uemail terdaftar atau belum
        $result = mysqli_query($db_connection, "SELECT email from users WHERE email= '$email'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>alert('Email Sudah Terdaftar!')</script>";
            return false;
        }
        //cek konfirmasi password
        if ($password != $password2) {
            echo "<script>alert('Konfirmasi password tidak cocok !!')</script>";
            return false;
        }
        //hashing the password
        $password = password_hash($password, PASSWORD_BCRYPT);
        //insert new user
        mysqli_query($db_connection, "INSERT INTO users VALUES('','$fullname','$username','$email','$whatssap','$password','$profilePicture')");
        return mysqli_affected_rows($db_connection);
        //cek apabila berhasil akan mencetak 1/TRUE dan jika gagal maka akan -1/FALSE    
    }

    if (register($_POST) > 0) {
        echo "<script>alert('Register Succceesfull');window.location.replace('../learn.php')</script>";
    } else {
        echo "<script>alert('Daftar Gagal !!!!!!!!!');window.location.replace('formregister.php')</script>";
    }
}
