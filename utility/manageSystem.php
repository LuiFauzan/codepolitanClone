<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['upload'])) {
    include "../connection.php";

    // Jadikan semua data sebagai variabel
    $courseName = htmlspecialchars($_POST["courseName"]);
    $description = htmlspecialchars($_POST["description"]);
    $tingkat = htmlspecialchars($_POST["tingkat"]);
    $tentangKelas = htmlspecialchars($_POST["tentangKelas"]);
    $tujuan = htmlspecialchars($_POST["tujuan"]);
    $silabus = htmlspecialchars($_POST["silabus"]);
    $jenisPekerjaan = htmlspecialchars($_POST["jenisPekerjaan"]);
    $metode = htmlspecialchars($_POST["metode"]);
    $fasilitas = htmlspecialchars($_POST["fasilitas"]);
    $price = htmlspecialchars($_POST["price"]);
    $startDate = htmlspecialchars($_POST["startDate"]);
    $endDate = htmlspecialchars($_POST["endDate"]);

    $rand = rand();
    $extensi = array('png', 'jpg', 'jpeg', 'gif');
    $file_name = $_FILES['photoCourse']['name'];
    $folder = '../assets/img/' . $rand . '_' . $file_name;
    $ukuran = $_FILES['photoCourse']['size'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if (!in_array($ext, $extensi)) {
        echo "<script>alert('Ektensi file tidak diizinkan!');</script>";
    } else {
        if ($ukuran < 1000000000) {
            // var_dump($folder);
            $xnxx = $rand . '_' . $file_name;
            move_uploaded_file($_FILES['photoCourse']['tmp_name'], $folder);
            $query = mysqli_query($db_connection, "INSERT INTO course VALUES ('', '$courseName', '$xnxx', '$description', '$tingkat', '$tentangKelas', '$tujuan', '$silabus',
            '$jenisPekerjaan', '$metode', '$fasilitas', '$price', '$startDate', '$endDate')");
            // echo "<script>alert('Upload Success!');</script>";
            header("Location: ../manage.php");
        } else {
            echo "<script>alert('File size exceeds the limit!');</script>";
            // header("Location: ../manage.php");
        }
    }
}
