<?php
session_start();

if (isset($_POST['checkout'])) {
    include "../connection.php";
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $whatsapp = $_POST['whatsapp'];

    // Get course data
    $courseid = $_POST['courseid'];
    $amountpaid = calculateAmountPaid($courseid);
    $sql = "INSERT INTO purchase (userid, courseid, amountpaid) VALUES ('$_SESSION[userid]', '$courseid', '$amountpaid')";

    if ($db_connection->query($sql) === TRUE) {
        echo "<script>alert('Purchase Succesfull!!');window.location.replace('../learn.php')</script>";
    } else {
        echo "<script>alert('Purchase Failed!!')window.location.replace('../formPembelian.php')</script>";
    }
}


function calculateAmountPaid($courseid)
{
    include "../connection.php"; // Pastikan file ini mencakup koneksi ke database

    // Query untuk mendapatkan harga kursus dari tabel kursus
    $query = "SELECT price FROM course WHERE courseid = '$courseid'";
    $result = $db_connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row['price'];
        return $price;
    } else {
        return 0;
    }
}
