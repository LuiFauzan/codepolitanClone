<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/learn.css">
    <?php include "utility/main.php" ?>
    <style>
        body {
            background: var(--abu);
        }

        .header {
            left: 0;
            width: 100%;
        }

        .main {
            /* border: 1px solid black; */
            width: auto;
            height: auto;
            /* padding: 20px; */
            margin-top: 80px;
        }

        .head-content {
            /* border: 1px solid black; */
            width: auto;
            height: auto;
            padding: 50px;
            background-color: black;
            color: white;
        }

        .body-content {
            /* border: 1px solid black; */
            height: auto;
            padding: 50px;
            display: flex;
        }

        .card-content {
            border: 1px solid rgba(0, 0, 0, 0.1);
            height: auto;
            background-color: white;
            padding: 20px;
            width: 80%;
            color: grey;
        }

        .play {
            border: 1px solid rgba(0, 0, 0, 0.1);
            height: auto;
            background-color: white;
            /* padding: 20px; */
            width: 30%;
            margin-left: 50px;
            border-radius: 10px;
        }

        video {
            border-radius: 10px 10px 0px 0px;
        }

        .card-content h3 {
            margin: 0;
        }

        .video-text {
            /* border: 1px solid red; */
            display: block;
            height: auto;
            padding: 10px;
            align-items: center;
            text-align: center;

        }

        .video-text button {
            width: 100%;
            padding: 10px;
            margin-top: 30px;
            border-radius: 10px;
            background-color: var(--ijo);
            border: none;
            color: white;
            font-size: 16px;
        }

        button:hover {
            cursor: pointer;
        }

        .video-text span {
            font-size: 20px;
            margin-top: 10px;
            color: grey;
        }

        .text-ah {
            display: block;
            text-align: left;
            color: grey;
        }

        .text-ah span {
            font-size: 15px;
            color: grey;
        }

        .text-ah i {
            color: var(--ijo);
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header>

        <div class="header">
            <div class="header-left">
                <span>Punya Voucher?</span>
                <a href="#"><i class="fa-solid fa-ticket"></i>Klaim disini</a>
            </div>
            <div class="header-right">
                <div class="help">
                    <a href="#"><i class="fa-solid fa-headset"></i>Need Help?</a>
                </div>
                <div class="garis"></div>
                <div class="profile-picture">
                    <span class="dropbtn" onclick="toggleDropdown()"><img src="user/img/<?= $_SESSION['profilePicture'] ?>" alt="" width="50"></span>
                    <div class="drop-profile" id="profileDropdown">
                        <div class="drop-head">
                            <img src="img/rank-1.png" alt="" width="50">
                            <div class="head-profile">
                                <span class="rank">ROOKIE V</span><br>
                                <span class="yourname"><?= $_SESSION['fullname'] ?></span>
                                <div class="bar-out">
                                    <div class="bar-in">
                                        <i class="fa-solid fa-fire"></i>
                                        <span>40 Exp</span>z
                                    </div>
                                </div>

                            </div>
                            <div class="view-profile">
                                <a href="#" class="view">View Profile</a>
                            </div>
                            <div class="point-setting">
                                <a href="#" class="point">
                                    <i class="fa-solid fa-fire-flame-curved"></i>Point History
                                </a>
                                <a href="#" class="point">
                                    <i class="fa-solid fa-file-invoice-dollar"></i>Purchase History
                                </a>
                            </div>
                            <div class="point-setting setting">
                                <a href="#" class="point">
                                    <i class="fa-solid fa-gear"></i>Setting
                                </a>
                            </div>
                            <div class="point-setting user-logout">
                                <a href="logout.php" class="point">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notif">
                    <a href="#"><i class="fa-solid fa-bell"></i></a>
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <?php
        include "connection.php";

        // Pastikan $_GET['courseid'] aman untuk digunakan
        $courseId = mysqli_real_escape_string($db_connection, $_GET['courseid']);

        $query = mysqli_query($db_connection, "SELECT course.*, video_materi.* FROM course INNER JOIN video_materi ON course.courseid = video_materi.courseid WHERE course.courseid = '$courseId'");
        foreach ($query as $row) :
        ?>
            <div class="head-content">
                <h1><?= $row['courseName'] ?></h1>
                <p><?= $row['description'] ?></p>
                <div class="jumlahSiswa">
                    <span>100 siswa</span>
                    <span>Penilaian</span>
                    <span>Level</span>
                </div>
            </div>
            <div class="body-content">
                <div class="card-content">
                    <h3>Tentang Kelas</h3>
                    <p><?= $row['tentangKelas'] ?></p>
                    <h4>Tujuan Kelas</h4>
                    <ul>
                        <li><?= $row['tujuanKelas'] ?></li>
                    </ul>
                    <h4>Silabus</h4>
                    <p><?= $row['silabus'] ?></p>
                    <h4>Jenis Pekerjaan</h4>
                    <p><?= $row['jenisPekerjaan'] ?></p>
                    <h4>Metode Ajar</h4>
                    <ul>
                        <li><?= $row['metode'] ?></li>
                    </ul>
                </div>
                <div class="play">
                    <div class="video">
                        <video src="assets/video/<?= $row['urlvideo'] ?>" width="100%" controls></video>
                    </div>
                    <div class="video-text">
                        <span>Mulai Belajar!!</span><br>
                        <button onclick="window.location.href = 'kelas.php?courseid=<?= $row['courseid'] ?>'">Mulai Belajar</button>
                        <div class="text-ah">
                            <h3>Yang Akan Kamu Dapatkan</h3>
                            <span><i class="fa-solid fa-circle-check"></i>39 Modul</span><br>
                            <span><i class="fa-solid fa-circle-check"></i>39 Jam</span><br>
                            <span><i class="fa-solid fa-circle-check"></i>Forum Tanya Jawab</span><br>
                            <span><i class="fa-solid fa-circle-check"></i>Sertifikat</span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="js/learn.js">
    </script>
</body>

</html>