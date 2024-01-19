<?php

session_start();
include 'connection.php';
// Ambil data courseid dari session
$courseid = $_SESSION['courseid'];

// Ambil data user dari database
$user = mysqli_fetch_assoc(mysqli_query($db_connection, "SELECT * FROM users WHERE userid = '$_SESSION[userid]'"));

// Buat sertifikat
$html = '<html lang="en">
<head>
  <title>Sertifikat</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Sertifikat</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Logo_CodePolitan.png/1200px-Logo_CodePolitan.png" width="200px" alt="Logo CodePolitan">
      </div>
      <div class="col-md-6">
        <h2>Pembelajaran<br>
          Kursus: <b>' . $coursename . '</b><br>
          Tanggal: <b>' . date('d-m-Y') . '</b></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>
          Dengan ini, kami memberikan sertifikat kepada
          <b>' . $user['fullname'] . '</b>
          telah menyelesaikan pembelajaran kursus <b>' . $coursename . '</b>.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>
          Semoga ilmu yang telah diperoleh dapat bermanfaat bagi diri sendiri dan orang lain.
        </p>
      </div>
    </div>
  </div>
</body>
</html>';

// Simpan sertifikat ke file
file_put_contents('sertifikat.pdf', $html);

// Arahkan ke halaman sertifikat
header("Location: sertifikat.pdf");
