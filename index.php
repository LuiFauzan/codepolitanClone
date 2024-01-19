<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website Belajar Coding Bahasa Indonesia - Codepolitan</title>
    <link rel="stylesheet" href="styles/manage2.css">
    <?php
    include "utility/main.php";
    ?>
    <style>
        /* header */

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
        /* main */
        #main {
            border: 1px solid white;
            /* background-color:white; */
            height: 200vh;
        }

        .section-head {
            /* border:1px solid black; */
            height: 70vh;
            background-color: var(--ijo-muda);
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        .head-content {
            /* border:1px solid black; */
            height: 50vh;
            text-align: left;
            align-items: center;
            display: flex;
            width: 60%;
            margin-left: 150px;
            margin-top: 60px;
        }

        .text {
            position: absolute;
            top: 220px;
        }

        .text span {
            font-size: 2.5em;
            font-weight: bold;
            color: white;

        }

        .text p {
            /* font-family:'Roboto', sans-serif; */
            color: white;
        }

        .head-content a {
            position: absolute;
            bottom: 300px;
        }

        .mulai-sekarang {

            border: 1px solid white;
            padding: 10px;
            font-size: 1em;
            border-radius: 10px;
            /* margin-top:20px; */
            background-color: white;
            color: var(--ijo);
            cursor: pointer;
        }

        .tanya-cs {
            border: 0.2px solid white;
            background: none;
            margin-left: 140px;
            padding: 10px;
            font-size: 1em;
            width: 100px;
            ;
            border-radius: 10px;
            /* margin-top:20px; */
            color: white;
            cursor: pointer;
            display: flex;
            justify-content: center;
            /* text-align:center; */
            align-items: center;

        }

        .fa-headset {
            margin-right: 5px;
        }

        .tanya-cs:hover {
            /* transform: scale(1.05); */
            background: white;
            color: var(--ijo);
        }

        .slide-photo {
            display: flex;
            justify-content: right;
            width: 50%;
            /* border:1px solid black; */
            /* background:black; */
            position: absolute;
            right: 130px;
        }

        .container-slide {
            margin: 0 130px;
            margin-top: 70px;
            position: relative;
            /* border:1px solid black; */
            /* margin: 20px auto; */
            overflow: hidden;
        }

        .container-slide h2 {
            font-weight: bold;
            font-size: 32px;
            margin: 48px 0 24px 0;
            color: grey;
            margin-top: 0;
        }

        .slide-inner {
            display: flex;
        }

        .slide-image img {
            width: 470px;
            height: 300px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .btn-prev,
        .btn-next {
            position: absolute;
            top: 50%;
            cursor: pointer;
            background: var(--ijo);
            border: none;
            border-radius: 60%;
            font-size: 40px;
            color: white;
            width: 50px;
            height: 50px;

        }

        .btn-prev {
            left: 2px;
        }

        .btn-next {
            right: 2px;
        }

        /* end main */
        .content {

            width: 100%;
            height: 2000px;
            margin-top: 50px;
            /* padding: 0 130px 0 130px; */
        }

        .col {
            display: flex;
            /* border: 1px solid rgba(0, 0, 0, 0.2); */
            width: 75%;
            /* background-color: rgb(255, 255, 255); */
            /* height: 00px; */
            /* padding: 50px; */
            margin-left: 130px;
            margin-right: 130px;
            /* height{} */
        }

        .col-course {
            display: flex;
            flex-wrap: nowrap;
            /* flex-direction: row; */
        }

        .content1 h2 {
            font-size: 30px;
            margin-left: 130px;
        }

        .banner-course {
            margin-right: 20px;
        }

        .my-course {
            height: auto;
        }

        .sponsor {
            text-align: center;
        }

        .sponsor h2 {
            font-weight: 400;
            color: var(--abu-tua);
            margin: 0;
            margin-top: 50px;
        }

        .logo {

            max-width: 90%;
            display: block;
            align-items: center;
            justify-content: space-between;
            padding: 0;
            margin: 0;
            margin-top: 50px;
            margin-left: 70px;
        }

        .univ {
            max-width: 90%;
            display: block;
            align-items: center;
            text-align: center;
            justify-content: space-between;
            padding: 0;
            margin: 0;
            margin-top: 50px;
            margin-left: 150px;
            flex-wrap: wrap;
            flex-direction: column;
        }

        body {
            background-color: var(--abu);
        }

        .media {
            max-width: 90%;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: space-between;
            padding: 0;
            margin: 0;
            margin-top: 50px;
            margin-left: 100px;
            margin-bottom: 70px;
        }

        .media img {
            margin-right: 10px;
        }

        .univ img {

            margin-right: 150px;
        }


        .univ h2 {
            margin-bottom: 50px;
        }

        .footer {
            border: 1px solid rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 50px 130px 50px 130px;
            /* height: 500px; */
            display: flex;
        }

        .satu {
            display: block;
        }

        .dua {
            margin-left: 150px;
        }

        .dua li {
            list-style-type: none;
            margin-bottom: 5px;
        }

        .dua a {
            text-decoration: none;
            color: var(--abu-tua);
        }

        .a:hover {
            color: black;
        }

        .section-body {
            background-color: var(--abu);
        }

        footer {
            position: relative;
            display: flex;
            justify-content: space-between;
            height: 60px;
            align-items: center;
            margin-left: 130px;
            margin-right: 130px;
            background-color: white;
        }

        footer span {
            font-size: 16px;
            color: var(--abu-tua);
        }

        .sosmed a {
            margin-right: 10px;
            text-decoration: none;
        }

        .sosmed i {
            font-size: 20px;
            color: var(--abu-tua);
        }
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
        <div id="main">
            <div class="section-head">
                <div class="head-content">
                    <div class="text">
                        <span>Belajar Coding</span><br>
                        <span>Seru Sambil PushRank</span>
                        <p>Bonus puluhan kelas coding gratis tentang HTML, CSS, JavaScript, Java, Python,<br> Go-Lang, dll. Klaim sekarang!</p>
                    </div>
                    <a class="mulai-sekarang"><span>Mulai Sekarang</span></a>
                    <a class="tanya-cs"><i class="fa-solid fa-headset"></i><span>Tanya CS</span>
                    </a>
                    <div class="slide-photo">
                        <img src="img/img-hero-1.png" alt="" width="60%">
                    </div>
                </div>
            </div>
            <div class="section-body">
                <div class="container-slide">
                    <div id="container-slide">
                        <h2>Program CODEPOLITAN</h2>
                        <div class="slide-inner">
                            <div class="slide-item active">
                                <a href="#" class="slide-image">
                                    <img src="img/slide-1.png" alt="">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="#" class="slide-image">
                                    <img src="img/slide-2.png" alt="">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="#" class="slide-image">
                                    <img src="img/slide-3.png" alt="">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="#" class="slide-image">
                                    <img src="img/slide-4.png" alt="">
                                </a>
                            </div>
                        </div>
                        <button class="btn-prev" onclick="prevSlide()">&lt;</button>
                        <button class="btn-next" onclick="nextSlide()">&gt;</button>
                    </div>
                </div>
                <div class="content my-course">
                    <div class="content1">
                        <h2>Kelas <span style="color:var(--ijo);">Terbaru</span></h2>
                        <div class="col col-course" id="course-slider">
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
                <div class="sponsor">
                    <div class="content1">
                        <h2>Telah Dipercayai oleh</h2>
                        <div class="logo">
                            <img src="img/sponsor/KEMNAKER_MGfr7cHn61.webp" width="200">
                            <img src="img/sponsor/kemenkeu_p9YQYkw-AI.webp" width="200">
                            <img src="img/sponsor/here_THgKeV7WUz.webp" width="200">
                            <img src="img/sponsor/udemy_DVYNj94zCK14x.webp" width="200">
                            <img src="img/sponsor/samsung_Insf8kassvK.webp" width="200">
                            <img src="img/sponsor/Lenovo_co1GDjBpxV.webp" width="200">
                            <img src="img/sponsor/Alibaba_kBCmKi7O7.webp" width="200">
                            <img src="img/sponsor/Intel_T_cVZHo81M_t.webp" width="200">
                            <img src="img/sponsor/dicoding-header-logo_-yUghUNkx7.webp" width="200">
                            <img src="img/sponsor/IBM_GXVYl92inl905.webp" width="200">
                            <img src="img/sponsor/pixel_YtPl8tvzu.webp" width="200">
                            <img src="img/sponsor/xl_t5bLnDwJn.webp" width="200">
                            <img src="img/sponsor/hacktiv8_Y3L2HUj4K4X.webp" width="200">
                            <img src="img/sponsor/Kudo_oGHxpphEw.webp" width="200">
                            <img src="img/sponsor/Refactory_VO89Fn5BX.webp" width="200">
                            <img src="img/sponsor/ajita_Za3H1pSLYI.webp" width="200">
                        </div>
                        <h2>Mitra Kampus Kami</h2>
                        <div class="univ">
                            <img src="img/sponsor/univ1.png" width="100">
                            <img src="img/sponsor/univ2.png" width="100">
                            <img src="img/sponsor/univ3.png" width="100">
                            <img src="img/sponsor/univ4.png" width="100">
                            <img src="img/sponsor/univ5.png" width="100">
                            <img src="img/sponsor/univ6.png" width="100">
                            <img src="img/sponsor/univ7.png" width="100">
                            <img src="img/sponsor/univ8.png" width="100">
                            <img src="img/sponsor/univ9.png" width="100">
                            <img src="img/sponsor/univ10.png" width="100">
                            <img src="img/sponsor/univ11.png" width="100">
                            <img src="img/sponsor/univ12.png" width="100">
                            <img src="img/sponsor/univ13.png" width="100">
                        </div>
                        <h2>Codepolitan telah diinput di berbagai media ternama</h2>
                        <div class="media">
                            <img src="img/sponsor/inews.png" width="150">
                            <img src="img/sponsor/yaho.png" width="150">
                            <img src="img/sponsor/tc.png" width="150">
                            <img src="img/sponsor/merdeka.png" width="150">
                            <img src="img/sponsor/iz.png" width="150">
                            <img src="img/sponsor/ds.png" width="150">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="satu">
                    <img src="img/codepolitan.png" width="200">
                    <br>
                    <p style="font-size: 16px;color:var(--abu-tua);"><span style="font-weight: bold;color:black;">ADDRESS</span><br>Komp. Permata, Jl. Permata Raya I No.3, Tanimulya,<br> Ngamprah,Kabupaten Bandung Barat, Jawa Barat -<br> 40552</p>
                </div>
                <div class="dua">
                    <h3>JOIN US</h3>
                    <li><a href="#" class="a">About Us</a></li>
                    <li><a href="#" class="a">How to Learn</a></li>
                    <li><a href="#" class="a">FAQ</a></li>
                    <li><a href="#" class="a">Term & Condition</a></li>
                    <li><a href="#" class="a">Privacy Policy</a></li>
                </div>
                <div class="dua">
                    <h3>COMMUNITY</h3>
                    <li><a href="#" class="a">About Us</a></li>
                    <li><a href="#" class="a">How to Learn</a></li>
                    <li><a href="#" class="a">FAQ</a></li>
                    <li><a href="#" class="a">Term & Condition</a></li>
                    <li><a href="#" class="a">Privacy Policy</a></li>
                </div>
                <div class="dua">
                    <h3>PARTNERSHIP</h3>
                    <li><a href="#" class="a">About Us</a></li>
                    <li><a href="#" class="a">How to Learn</a></li>
                    <li><a href="#" class="a">FAQ</a></li>
                    <li><a href="#" class="a">Term & Condition</a></li>
                    <li><a href="#" class="a">Privacy Policy</a></li>
                </div>
            </div>
            <footer>
                <span>
                    &copy; 2024 Codepolitan. All rights reserved. Made with ❤️ in indonesia.
                </span>
                <div class="sosmed">
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>

            </footer>
        </div>
    </div>
    <script src="js/learn.js"></script>
    <script>
        var currentIndex = 0;
        var totalSlides = document.querySelectorAll('.slide-item').length;
        var slideWidth = document.querySelector('.slide-item').clientWidth;
        var slideInner = document.querySelector('.slide-inner');

        function updateSliderPosition() {
            slideInner.style.transform = 'translateX(' + (-currentIndex * slideWidth) + 'px)';
        }

        function nextSlide() {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSliderPosition();
        }

        function prevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalSlides - 1;
            }
            updateSliderPosition();
        }
        document.addEventListener("DOMContentLoaded", function() {
            var courseSlider = document.getElementById("course-slider");
            var courseItems = courseSlider.getElementsByClassName("banner-course");
            var currentIndex = 0;
            var itemsPerPage = 4;

            function showCourses(startIndex) {
                for (var i = 0; i < courseItems.length; i++) {
                    courseItems[i].style.display = (i >= startIndex && i < startIndex + itemsPerPage) ? "block" : "none";
                }
            }

            function nextCourses() {
                currentIndex = (currentIndex + itemsPerPage) % courseItems.length;
                showCourses(currentIndex);
            }
            setInterval(nextCourses, 2000);
            showCourses(currentIndex);
        });
    </script>
</body>

</html>