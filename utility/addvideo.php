<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['upload'])) {
    include "../connection.php";

    // Jadikan semua data sebagai variabel
    $courseid = $_POST['courseid'];
    $title = $_POST['namavideo'];
    $rand = rand();
    $extensi = array('mp4', 'avi', 'mov', 'mkv');
    $file_name = $_FILES['urlvideo']['name'];
    $folder = '../assets/video/' . $rand . '_' . $file_name;
    $ukuran = $_FILES['urlvideo']['size'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if (!in_array($ext, $extensi)) {
        echo "<script>alert('Ektensi file tidak diizinkan!');</script>";
    } else {
        if ($ukuran < 1000000000) {
            $xnxx = $rand . '_' . $file_name;
            move_uploaded_file($_FILES['urlvideo']['tmp_name'], $folder);

            // Gunakan prepared statement untuk mengamankan nilai
            $query = "INSERT INTO video_materi (namavideo, urlvideo, courseid, create_at) VALUES (?, ?, ?, NOW())";

            // Persiapkan pernyataan SQL
            $stmt = mysqli_prepare($db_connection, $query);

            // Bind parameter ke prepared statement
            mysqli_stmt_bind_param($stmt, 'sss', $title, $xnxx, $courseid);

            // Eksekusi prepared statement
            if (mysqli_stmt_execute($stmt)) {
                header("Location: ../manage.php");
                exit();
            } else {
                die("Error: " . mysqli_error($db_connection));
            }

            // Tutup prepared statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('File size exceeds the limit!');</script>";
        }
    }
}
