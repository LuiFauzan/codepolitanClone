<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:formlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles/learn.css">
    <link rel="stylesheet" href="styles/sudahBeli.css">
    <?php
    include "utility/main.php";
    ?>

</head>

<body>
    <div class="root">
        <div class="container">
            <div class="side-nav">
                <div class="img-title">
                    <a href=""><img src="img/codepolitan.png" alt="" width="75%"></a>
                </div>
                <div class="nav">
                    <div class="nav-title">
                        <small>
                            <p>
                                MAIN MENU
                            </p>
                        </small>
                    </div>
                    <div class="nav-list" id="nav-list">

                        <div class="list-item">
                            <!-- class="button" class="fasolid"-->

                            <button class="button" onclick="openContent(event,'dashboard-content')" id="defaultOpen">
                                <i class="fa-solid fa-home "></i>
                                Dasboard
                            </button>
                            <button class="button" onclick="openContent(event,'my-course-content')">
                                <i class="fa-solid fa-swatchbook"></i>
                                My Course
                            </button>
                            <button class="button" onclick="openContent(event,'browse-course-content')">
                                <i class="fa-solid fa-book"></i>
                                Browse Course
                            </button>
                            <button class="button" onclick="openContent(event,'browse-course-content')">
                                <i class="fa-solid fa-comments"></i>
                                Question
                            </button>

                            <button class="button" onclick="openContent(event,'browse-course-content')">
                                <i class="fa-solid fa-gem"></i>
                                For You
                            </button>
                            <button class="button" onclick="openContent(event,'browse-course-content')">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                For Mentor
                            </button>
                        </div>
                        <div class="utility">
                            <hr>
                            <!-- <div class="hr"></div> -->
                            <a href="#" class="list1">
                                <i class="fa-brands fa-telegram"></i>
                                <span>Join Community</span>
                            </a>
                            <a href="#" class="list1">
                                <i class="fa-solid fa-headset"></i>
                                <span>Hubungi CS</span>
                            </a>
                            <a href="#" class="list1">
                                <i class="fa-solid fa-user-graduate"></i>
                                <span>Tanya Member</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
            <!-- Content -->
            <main id="main-content">
                <section id="dashboard-content" class="tabContent">
                    <div class="content">
                        <div class="content1">
                            <h2>Quick Access</h2>

                            <div class="col">
                                <li>
                                    <a class="link" href="#">
                                        <div class="link-title">
                                            <img src="img/fullstack-logo.png" width="25" alt="">
                                            <span>KelasFullstack </span>
                                        </div>
                                        <p>Buka materi KelasFullstack dengan cepat disini.</p>
                                    </a>

                                </li>
                                <li>
                                    <a class="link" href="#">
                                        <div class="link-title">
                                            <i class="fa-brands fa-telegram"></i>
                                            <span>Grup Telegram</span>
                                        </div>
                                        <p>Join grup telegram ekslusif codepolitan disini.</p>
                                    </a>

                                </li>
                                <li>
                                    <a class="link" href="#">
                                        <div class="link-title">
                                            <i class="fa-solid fa-file-invoice-dollar"></i>
                                            <span>Riwayat Pembelian</span>
                                        </div>
                                        <p>Akses riwayat Pembelian dengan cepat disini.</p>
                                    </a>

                                </li>
                            </div>

                        </div>
                        <div class="content2">
                            <h2>Continue Learning</h2>

                            <div class="col">
                                <li>
                                    <a class="link2" href="#">
                                        <div class="progres-title">
                                            <img src="img/Belajar-Dasar-CSS.png" width="50" height="50" alt="">
                                            <span>Belajar dasar dasar css </span>
                                        </div>
                                        <div class="progres">
                                            <div class="progres-bar"></div>
                                        </div>
                                        <div>
                                            <p>Lanjutkan Belajar</p>
                                            <p>10%</p>
                                        </div>
                                    </a>

                                </li>
                            </div>

                        </div>
                        <div class="content3">
                            <h2 class="content3-title">Numbers</h2>

                            <div class="col">
                                <div class="course">
                                    <i class="fa-solid fa-swatchbook"></i>
                                    <div class="jumlah-course">
                                        <?php
                                        include "connection.php";
                                        $userid = $_SESSION['userid'];
                                        $query = "SELECT COUNT(*) courseid FROM purchase WHERE userid = $userid";
                                        $result = mysqli_query($db_connection, $query);

                                        if ($result) {
                                            $row = mysqli_fetch_assoc($result);
                                            $totalCourses = $row['courseid'];

                                        ?>
                                            <h2><?= $totalCourses ?></h2>
                                        <?php } ?>
                                        <p>Course</p>
                                    </div>
                                    <hr>
                                    <div class="see-course">
                                        <a href="#">Lihat Course</a>
                                    </div>
                                </div>
                                <div class="course lr">
                                    <i class="fa-solid fa-map"></i>
                                    <div class="jumlah-course ">
                                        <h2>0</h2>
                                        <p>Roadmap</p>
                                    </div>
                                    <hr>
                                    <div class="see-course">
                                        <a href="#">Lihat Roadmap</a>
                                    </div>
                                </div>
                                <div class="course lc">
                                    <i class="fa-solid fa-award"></i>
                                    <div class="jumlah-course ">
                                        <h2>0</h2>
                                        <p>Certificates</p>
                                    </div>
                                    <hr>
                                    <div class="see-course">
                                        <a href="#">Lihat Certificate</a>
                                    </div>
                                </div>
                                <div class="course lb">
                                    <i class="fa-solid fa-trophy"></i>
                                    <div class="jumlah-course ">
                                        <h2>N/A</h2>
                                        <p>Weekly Ranks</p>
                                    </div>
                                    <hr>
                                    <div class="see-course">
                                        <a href="#">Lihat Leaderboard</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="iklan">
                        <div class="conten">
                            <img src="img/iklan.png" width="300">
                            <h2>Your Level</h2>
                            <div class="your-rank">
                                rookie
                            </div>
                        </div>
                    </div>
                </section>
                <section id="my-course-content" class="tabContent">
                    <div class="content my-course">
                        <div class="content1">
                            <h2>Courses</h2>
                            <div class="col tambahCourse">
                                <?php
                                $userid = $_SESSION['userid'];
                                $courseid = isset($_SESSION['courseid']) ? $_SESSION['courseid'] : null;
                                function sudahBeli($userid, $courseid)
                                {
                                    include "connection.php";
                                    if ($courseid !== null) {
                                        $result = mysqli_query($db_connection, "SELECT * FROM purchase WHERE userid = $userid AND courseid = $courseid");
                                        return mysqli_num_rows($result) > 0;
                                    }
                                    return false;
                                }
                                if (sudahBeli($userid, $courseid)) {
                                ?>
                                    <div class="list-sudah">
                                        <div class="sudah btn-tambah-course">
                                            <button class=" btn-tambah-course" onclick="window.location='libraryCourse.php'">
                                                <i class="fa-solid fa-folder-plus"></i><br>
                                                <span>Tambah Kelas Baru</span>
                                            </button>
                                        </div>
                                        <?php
                                        include "connection.php";
                                        $queryPurchase = mysqli_query($db_connection, "SELECT purchase.*, course.*
                    FROM purchase
                    INNER JOIN course ON purchase.courseid = course.courseid WHERE userid = '$_SESSION[userid]'
                    ");
                                        foreach ($queryPurchase as $data) :
                                        ?>

                                            <div class="sudahh btn-tambah-course">
                                                <div class="im">
                                                    <img src="assets/img/<?= $data['photoCourse'] ?>" width="100%" height="100%">
                                                </div>
                                                <div class="text">
                                                    <?php
                                                    $coursename = $data['courseName'];
                                                    $max_length = 25;
                                                    $filter = (strlen($coursename) > $max_length) ? substr($coursename, 0, $max_length) . '...' : $coursename;
                                                    ?>
                                                    <h3><?= $filter ?></h3>
                                                </div>
                                                <div class="b">
                                                    <span><i class="fa-solid fa-swatchbook"></i>30 Modul</span>
                                                    <span><i class="fa-solid fa-clock"></i>7 Jam</span>
                                                </div>
                                                <div class="lihat">
                                                    <a href="lihatkelas.php?courseid=<?= $data['courseid'] ?>">Lihat kelas<i class="fa-solid fa-arrow-right"></i></a>

                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <img src=" img/icon-not-found.png" alt="" width="130"><br>
                                    <span>Sayang sekali kamu belum memiliki kelas yang bisa di pelajari</span><br>
                                    <button class="btn-tambah-course" onclick="window.location='libraryCourse.php'">
                                        <i class="fa-solid fa-folder-plus"></i><br>
                                        <span>pilih kelas</span>
                                    </button>
                            </div>
                        <?php } ?>
                        </div>
                        <div class="content1 content11">
                            <h2>Roadmap</h2>
                            <div class="col tambahCourse">
                                <img src="img/icon-not-found.png" alt="" width="130"><br>
                                <span>Sayang sekali kamu belum memiliki roadmap yang bisa diikuti</span><br>
                                <button class="btn-tambah-roadmap" onclick="window.location='add_course.html'">
                                    <i class="fa-solid fa-folder-plus"></i><br>
                                    <span>pilih kelas</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </section>
                <section id="browse-course-content" class="tabContent">
                    <p></p>
                </section>
            </main>
        </div>
    </div>
    </div>
    <script src="js/learn.js">


    </script>
</body>

</html>