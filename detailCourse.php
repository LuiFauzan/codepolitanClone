<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Belajar Coding Bahasa Indonesia - Codepolitan</title>
    <link rel="stylesheet" href="styles/detailCourse.css">
    <?php
    include "utility/main.php";
    ?>
    <style>
        /* header */
        .header {
            background-color: white;
            display: flex;
            position: fixed;
            width: 100%;
            z-index: 100;
            justify-content: space-between;
            align-items: center;
            /* text-align:center; */
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }

        .logo {
            padding-left: 130px;
        }

        .search {
            border-radius: 5px;
            display: flex;
            align-items: center;
            border: 1px solid rgba(0, 0, 0, 0.2);

        }

        .search1 input {
            padding: 8px;
            min-width: 15em;
            float: right;
            /* border:1px solid */
            border: none;
            outline: none;
            margin: 4px;


        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            /* position:relative; */
        }

        .navbar li {
            margin-right: 15px;
        }

        .navbar a {
            text-decoration: none;
            color: black;
            display: block;
            padding: 10px;
            position: relative;
            color: var(--abu-tua);
            font-weight: 500;

        }

        .navbar a:hover {
            color: black;
            transition: color 0.3 ease-in-out;
        }

        .dropdown {
            position: relative;
            /* border:1px solid; */
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            z-index: 1;
            left: 0;
            background-color: white;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
            width: 300px;
            border-radius: 10px;
        }

        .dropdown-content h3 {
            padding-left: 10px;

        }

        hr {
            width: 90%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .button {
            margin-left: 20px;
            padding-right: 130px;
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

        .search-outline {
            padding-left: 10px;
            --ionicon-stroke-width: 70px;
            color: var(--abu-tua);
        }

        .down {
            position: relative;
            top: 1px;
            left: 1px;
            color: var(--abu-tua);
            font-size: 13px;
        }

        /* end header */
    </style>
</head>

<body>
    <div id="_next">
        <div class="header">
            <div class="logo">
                <img src="img/codepolitan.png" alt="" height="45" width="auto">
            </div>
            <div class="search">
                <ion-icon name="search-outline" class="search-outline"></ion-icon>
                <div class="search1">
                    <input type="text" placeholder="Cari disini...">
                </div>
            </div>
            <div class="navbar">
                <ul>
                    <div class="dropdown">
                        <a href="">COURSES<ion-icon name="caret-down-outline" class="down"></ion-icon></a>
                        <div class="dropdown-content">

                            <h3>Kategori</h3>
                            <hr>
                            <a href="#">Web Development</a>
                            <a href="#">Mobile Development</a>
                            <a href="#">Front End</a>
                            <a href="#">Back End</a>
                            <h3>Teknologi Populer</h3>
                            <hr>
                            <a href="#">Laravel</a>
                            <a href="#">PHP</a>
                            <a href="#">Kotlin</a>
                            <a href="#">Android</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="">COMMUNITY<ion-icon name="caret-down-outline" class="down"></ion-icon></a>
                        <div class="dropdown-content">
                            <a href="">Question</a>
                            <a href="">Leaderboard</a>
                        </div>
                    </div>
                    <li><a href="#">UPDATES</a></li>
                    <li><a href="#">EVENTS</a></li>
                </ul>
            </div>
            <div class="button">
                <a href="formlogin.php" type="login" class="btn-login">LOGIN</a>
                <a href="formregister.php" type="register" class="btn-reg">REGISTER</a>
            </div>
        </div>
        <!-- konten -->
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM course WHERE courseid = '$_GET[courseid]'";
        $result = $db_connection->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

        ?>
                <div class="container">
                    <div class="row">
                        <div class="col1">
                            <div class="col-head">
                                <img src="assets/img/<?= $row['photoCourse'] ?>" width="150" alt="">
                                <h1 style="margin-top:20px;"><?= $row['courseName'] ?></h1>
                                <p style="margin-top:20px;"><?= $row['description'] ?></p>

                                <div class="penilaian">
                                    <span class="tingkat"><?= $row['tingkat'] ?></span>
                                    <div>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>0 penilaian</span>
                                    <span>3 Peserta</span>
                                    <span>
                                        <i class="fa-solid fa-share"></i>
                                        Share
                                    </span>
                                </div>
                            </div>
                            <div class="col-body">
                                <h4>Tentang Kelas</h4>
                                <p><?= $row['tentangKelas'] ?></p>
                                <strong>Tujuan Umum dan Kursus Pelatihan:</strong>
                                <ul>
                                    <li>
                                        <p><?= $row['tujuanKelas'] ?></p>
                                    </li>
                                </ul>
                                <strong>silabus:</strong>
                                <ol>
                                    <li>
                                        <p><?= $row['silabus'] ?></p>
                                    </li>
                                </ol>
                                <strong>Jenis Pekerjaan: </strong>
                                <p><?= $row['jenisPekerjaan'] ?></p>
                                <strong>Metode Ajar:</strong>
                                <ul>
                                    <li>
                                        <p><?= $row['metode'] ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col2">
                            <div class="materi" onclick="pagePembelian('<?= $row['courseid'] ?>')">
                                <img src="assets/img/<?= $row['photoCourse'] ?>" width="390" alt="">
                                <div class="harga"><span style="font-weight:bold;">Beli</span> <br>
                                    <span>Rp.<?= $row['price'] ?></span>
                                </div>
                                <span class="harga-beli">Rp.<?= $row['price'] ?></span><br>
                                <span class="detil-beli">Beli Kelas Akses Selamanya</span>
                                <button type="name" name="beli" class="cs">BELI SEKARANG</button>
                                <div class="item">
                                    <strong>Yang Akan Kamu dapatkan:</strong><br>
                                    <span><i class="fa-solid fa-swatchbook"></i>19 Modul</span><br>
                                    <span><i class="fa-solid fa-clock"></i>2 Jam Durasi</span><br>
                                    <span><i class="fa-solid fa-circle-question"></i>Forum Diskusi Tanya jawab</span><br>
                                    <span><i class="fa-solid fa-medal"></i>Klaim Sertifikat Digital</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
        <?php } ?>
        <script>
            function pagePembelian(courseid) {
                window.location.href = 'formPembelian.php?courseid=' + courseid;
            }
        </script>
</body>

</html>