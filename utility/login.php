<?php
session_start();

if (isset($_POST["login"])) {
    $adminEmail = $_SESSION['email'];
    $codepolitan = "manage@codepolitan.com";
}

include "../connection.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($db_connection, "SELECT * FROM users WHERE email = '$email'");

    // cek email
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // set session
            $_SESSION['login'] = TRUE;
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['whatsapp'] = $row['whatsapp'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['profilePicture'] = $row['profilePicture'];

            $purchaseResult = mysqli_query($db_connection, "SELECT * FROM purchase WHERE userid = '$row[userid]'");
            if (mysqli_num_rows($purchaseResult) > 0) {
                // Simpan data purchase ke session
                $purchaseData = mysqli_fetch_assoc($purchaseResult);
                $_SESSION['purchase'] = $purchaseData; // Simpan semua data purchase dalam satu array

                // Akses data purchase dari session:
                $_SESSION['courseid'] = $purchaseData['courseid'];
                $_SESSION['amountpaid'] = $purchaseData['amountpaid'];
                // ... (akses kolom lain yang diperlukan)
            }
            if ($row['email'] === $codepolitan) {
                header("Location: ../manage.php");
                exit;
            } else {
                header("Location: ../learn.php");
                exit;
            }
        }
    }

    // $error = true;
}
