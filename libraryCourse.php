<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Course</title>
    <link rel="stylesheet" href="styles/manage2.css">
    <?php
    include "utility/main.php";
    ?>
    <style>
        body {
            box-sizing: border-box;
            scroll-behavior: smooth;
            overflow: scroll;
        }

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
            top: 0;
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
        .container {
            margin-top: 100px;
            padding-left: 140px;
            padding-right: 140px;
        }

        .content-utama {
            /* border: 1px solid black; */
            height: 2000px;
        }

        .sticky-nav {
            /* border: 1px solid green; */
            height: 40px;
            width: 100%;
            /* float: right; */
            justify-content: space-between;
            display: flex;
            align-items: center;
        }

        .kiri span {
            display: inline-block;
            border: 1px solid black;
            padding: 5px 10px;
            margin-right: 10px;
            border-radius: 5px;
            cursor: pointer;

        }

        .kanan {
            width: 40%;
            border: 1px solid black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
        }

        .kanan input {

            width: 100%;
            height: 20px;
            padding: 10px;
            border: none;
            margin-right: 10px;
        }

        .col-course {
            display: flex;
            position: absolute;
            left: 220px;
            top: 250px;
            /* margin: 20px; */
            /* background-color: wheat; */
            padding: 10px;
            width: 70%;
            flex-wrap: wrap;
            margin-right: 20px;
            /* justify-content: space-between; */
        }

        .isi-banner {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
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
    <div class="container">
        <div class="title">
            <h1>Pilihan Kelas Online Pemograman</h1>
            <p>Pilih dan jadilah profesional</p>
        </div>
        <div class="content-utama">
            <div class="sticky-nav">
                <div class="kiri">
                    <span>Level <i class="fa-solid fa-caret-down"></i></span>
                    <span>Urutkan <i class="fa-solid fa-caret-down"></i></span>
                    <span>Tampilkan <i class="fa-solid fa-caret-down"></i></span>
                </div>
                <div class="kanan">
                    <input type="search" placeholder="Cari disini....">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="col col-course">
                <?php
                include "connection.php";

                $sql = "SELECT * FROM course";
                $result = $db_connection->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                ?>
                        <div class="banner-course" onclick="pindahPage('<?= $row['courseid'] ?>')">
                            <div class="isi-banner">
                                <img src="assets/img/<?= $row['photoCourse'] ?>" alt="" width="300" style="border-radius:15px 15px 0 0;">
                                <div class="banner-text">
                                    <h3 class="banner-title"><?= $row['courseName'] ?></h3>
                                    <div class="rank-js">
                                        <span> <i class="fa-solid fa-chart-column"></i> <?= $row['tingkat'] ?></span>
                                        <span><i class="fa-solid fa-clock"></i>3 Jam </span>
                                    </div>
                                    <div class="jam-modul">
                                        <span><i class="fa-solid fa-users"></i>100 Siswa</span>
                                        <span><i class="fa-solid fa-swatchbook"></i>16 modul </span>
                                    </div>
                                    <div class="penilaian">

                                        <span><i class="fa-solid fa-star-half-stroke"></i><span style="color:gold;font-weight:bold;">4.5</span> (234) penilaian </span>
                                    </div>
                                    <div class="beli">
                                        <span>Beli</span>
                                        <span>Rp.<?= $row['price'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {


                    ?>
                    <!-- <div></div> -->
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="js/learn.js"></script>
</body>

</html>