<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage System</title>
    <link rel="stylesheet" href="styles/manage.css">
    <link rel="stylesheet" href="styles/manage2.css">
    <?php
    include "utility/main.php";
    ?>
    <style>
        td {
            color: black;
            background: var(--abu);
        }
    </style>
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
                                <i class="fa-solid fa-plus"></i>
                                Add Course
                            </button>
                            <button class="button" onclick="openContent(event,'list-course-content')">
                                <i class="fa-solid fa-list-ul"></i>
                                List Course
                            </button>
                            <button class="button" onclick="openContent(event,'add-video-content')">
                                <i class="fa-solid fa-folder-plus"></i>
                                Add Video
                            </button>
                            <button class="button" onclick="openContent(event,'data-purchase-content')">
                                <i class="fa-solid fa-layer-group"></i>
                                Data Purchase
                            </button>

                            <button class="button" onclick="openContent(event,'report-content')">
                                <i class="fa-solid fa-calendar-days"></i>
                                Monthly Report
                            </button>
                            <button class="button" onclick="openContent(event,'mentor-content')">
                                <i class="fa-solid fa-user-plus"></i>
                                Add Mentor
                            </button>
                            <button class="button" onclick="openContent(event,'list-users-content')">
                                <i class="fa-solid fa-users"></i>
                                List User
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="header-left">
                    <span>Your Login as Admin</span>
                </div>
                <div class="header-right">
                    <div class="garis"></div>
                    <div class="profile-picture">
                        <span class="dropbtn" onclick="toggleDropdown()"><img src="user/img/<?= $_SESSION['profilePicture'] ?>" alt="" width="50"></span>
                        <div class="drop-profile" id="profileDropdown">
                            <div class="drop-head">
                                <div class="head-profile">
                                    <span class="rank">Haiiii</span><br>
                                    <span class="yourname"><?= $_SESSION['fullname'] ?></span>
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
                            <h2>Add Courses</h2>
                            <div class="col">
                                <form action="utility/manageSystem.php" enctype="multipart/form-data" method="post">
                                    <label>Nama Kursus:</label><br>
                                    <input class="input-detail course-name" type="text" name="courseName" placeholder="Insert course name" required><br>
                                    <label>Upload Photo:</label><br>
                                    <input class="input-detail photo-course" type="file" name="photoCourse" required><br>
                                    <label>Deskripsi:</label><br>
                                    <textarea class="input-detail" name="description" id="" cols="148" rows="5" required></textarea>
                                    <select class="input-detail" name="tingkat" id=""><br>
                                        <option name="">Pilih Tingkat</option>
                                        <option name="beginner">Beginner</option>
                                        <option name="elementary">Elementary</option>
                                        <option name="intermediate">Intermediate</option>
                                    </select><br>
                                    <label>Tentang Kelas:</label><br>
                                    <textarea class="input-detail" name="tentangKelas" id="" cols="148" rows="5"></textarea><br>
                                    <label>Tujuan Kelas:</label><br>
                                    <textarea class="input-detail" name="tujuan" id="" cols="148" rows="5"></textarea><br>
                                    <label>Silabus:</label><br>
                                    <textarea class="input-detail" name="silabus" id="" cols="148" rows="5"></textarea><br>
                                    <label>Jenis Pekerjaan:</label><br>
                                    <textarea class="input-detail" name="jenisPekerjaan" id="" cols="148" rows="5"></textarea><br>
                                    <label>Metode:</label><br>
                                    <textarea class="input-detail" name="metode" id="" cols="148" rows="5"></textarea><br>
                                    <label>Fasilitas:</label><br>
                                    <textarea class="input-detail" name="fasilitas" id="" cols="148" rows="5"></textarea><br>
                                    <label>Harga:</label><br>
                                    <input class="input-detail" type="number" placeholder="Insert price" min="0" max="10000" step="1" name="price" id="price" required><br>
                                    <label>start Date:</label><br>
                                    <input type="date" class="input-detail" name="startDate"></input><br>
                                    <label>End Date:</label><br>
                                    <input type="date" class="input-detail" name="endDate"></input><br>
                                    <button type="upload" name="upload" class="upload" Value="UPLOAD">UPLOAD</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="list-course-content" class="tabContent">
                    <div class="content my-course">
                        <div class="content1">
                            <h2>List Course</h2>
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
                </section>
                <section id="add-video-content" class="tabContent">
                    <div class="content">
                        <div class="content1">
                            <h2>Video</h2>
                            <div class="col">
                                <form action="utility/addvideo.php" method="post" enctype="multipart/form-data" style="width:100%;">
                                    <label for="">Title Video</label><br>
                                    <input class="input-detail" type="text" name="namavideo"><br>
                                    <label for="">Tambah Video</label><br>
                                    <input class="input-detail" type="file" name="urlvideo"><br>
                                    <?php
                                    include "connection.php";
                                    $query = mysqli_query($db_connection, "SELECT * FROM course");
                                    ?>
                                    <select class="input-detail" name="courseid" id=""><br>
                                        <option value="Select">Select</option>
                                        <?php foreach ($query as $data) : ?>
                                            <option value="<?= $data['courseid'] ?>"><?= $data['courseName'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <button type="upload" name="upload" class="upload" Value="UPLOAD">UPLOAD</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="data-purchase-content" class="tabContent">
                    <div class="content ">
                        <div class="content1">
                            <h2>Data Pembelian</h2>
                            <div class="col">

                                <form action="" method="post" enctype="multipart/form-data" style="position:relative;top:0;width:100%;z-index:1;">
                                    <table border="1" style="border:1px solid rgba(0,0,0, 0.2);background:var(--ijo);z-index:1; position:relative;color:white;  width:100%;">

                                        <tr>
                                            <th>No</th>
                                            <th>FullName</th>
                                            <th>Email</th>
                                            <th>Course Name</th>
                                            <th>Price</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                            <!-- <th>Whatsapp</th> -->
                                        </tr>
                                        <?php
                                        include "connection.php";

                                        $sql = "SELECT 
                                                    purchase.purchasid, 
                                                    purchase.amountpaid, 
                                                    purchase.datePurchase, 
                                                    users.userid, 
                                                    users.email, 
                                                    users.fullname, 
                                                    users.whatsapp, 
                                                    course.courseid, 
                                                    course.price, 
                                                    course.courseName 
                                                FROM 
                                                    purchase
                                                INNER JOIN 
                                                    users ON purchase.userid = users.userid
                                                INNER JOIN 
                                                    course ON purchase.courseid = course.courseid";

                                        $result = $db_connection->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {

                                                $purchasid = $row['purchasid'];
                                                $datePurchase = $row['datePurchase'];
                                                $amountPaid = $row['amountpaid'];
                                                $userId = $row['userid'];
                                                $email = $row['email'];
                                                $fullName = $row['fullname'];
                                                $whatsapp = $row['whatsapp'];
                                                $courseId = $row['courseid'];
                                                $courseName = $row['courseName'];
                                                $price = $row['price'];
                                        ?>

                                                <tr align="center">
                                                    <td><?php echo $purchasid ?></td>
                                                    <td><?= $row['fullname'] ?></td>
                                                    <td><?= $row['email'] ?></td>
                                                    <td><?= $row['courseName'] ?></td>
                                                    <td>Rp.<?= $row['price'] ?></td>
                                                    <td><?= $datePurchase ?></td>
                                                    <td style="font-weight:bold;">Succes</td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td align="center">Data Not Found!</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="report-content" class="tabContent">
                    <div class="content">
                        <div class="content1">
                            <h2>Monthly Report</h2>
                            <div class="col" style="display: block;">
                                <?php
                                $month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
                                $year = date('Y');
                                ?>
                                <form action="" style="width:100%;display:block;justify-content: center;text-align: center;">
                                    <p>Select
                                        <select name="month" required>
                                            <option value="">Month</option>
                                            <?php
                                            for ($m = 1; $m <= 12; $m++) {
                                            ?>
                                                <option value="<?= $m ?>"><?= $month[$m - 1] ?></option>
                                            <?php } ?>
                                        </select>

                                        <select name="year" required>
                                            <option value="">Year</option>
                                            <?php
                                            for ($y = 0; $y <= 2; $y++) {
                                            ?>
                                                <option value="<?= $year - $y ?>"><?= $year - $y ?></option>
                                            <?php } ?>
                                        </select>
                                        <input class="btn" style="width:50%; margin:10px 10px;justify-content: center;" type="submit" value="View Report">

                                    </p>
                                </form>
                                <?php
                                if (isset($_GET['year'])) {
                                    include "connection.php";
                                    $query = "SELECT p.datePurchase, c.courseName, u.username, u.email, c.price FROM purchase AS p, course AS c, users AS u WHERE p.courseId = c.courseId AND p.userid = u.userid AND MONTH(p.datePurchase)='$_GET[month]' AND YEAR(p.datePurchase)='$_GET[year]'";
                                    $report = mysqli_query($db_connection, $query);
                                ?>
                                    <h4>Report Periode <?= $month[$_GET['month'] - 1] ?> - <?= $_GET['year'] ?></h4>
                                    <form action="" style="position:relative;top:0;width:100%;z-index:1;">
                                        <table border="1" style="height:50px;border:1px solid rgba(0,0,0, 0.2);background:var(--ijo);z-index:1; position:relative;color:white;font-weight:700;  width:100%;">
                                            <thead>

                                                <tr>
                                                    <th>No</th>
                                                    <th>Date</th>
                                                    <th>Course Name</th>
                                                    <th>User Name</th>
                                                    <th>Email</th>
                                                    <th>Pay ($)</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            if (mysqli_num_rows($report) > 0) {
                                                $i = 1;
                                                $total = 0;
                                                foreach ($report as $data) :
                                                    $total = $total + $data['price'];
                                            ?>
                                                    <tbody>

                                                        <tr>
                                                            <td><?= $i++ ?></td>
                                                            <td><?= $data['datePurchase'] ?></td>
                                                            <td><?= $data['courseName'] ?></td>
                                                            <td><?= $data['username'] ?></td>
                                                            <td><?= $data['email'] ?></td>
                                                            <td align="right"><?= $data['price'] ?></td>
                                                        </tr>
                                                    </tbody>
                                                <?php endforeach; ?>
                                                <tr>
                                                    <th colspan="7" align="right">Total : $<?= $total ?></th>
                                                </tr>
                                            <?php } else { ?>

                                                <tr>
                                                    <td colspan="6" align="center">Report Not Found!</td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                        <input class="btn" style="width:100%;margin-top:10px;" type="submit" onclick="window.print()" value="print">
                                    <?php } ?>
                                    </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="mentor-content" class="tabContent">
                    <div class="content">
                        <div class="content1">
                            <h2>Mentor</h2>
                            <div class="col">
                                <form action="" style="position:relative;top:0;width:100%;z-index:1;">
                                    <table border="1" style="height:50px;border:1px solid rgba(0,0,0, 0.2);background:var(--ijo);z-index:1; position:relative;color:white;font-weight:700;  width:100%;">
                                        <tr>
                                            <td align="center">Mentor Not Found!</td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="list-users-content" class="tabContent">
                    <div class="content list-user">
                        <div class="content1">
                            <h2>Data Users</h2>
                            <div class="col">
                                <form action="" method="post" enctype="multipart/form-data" style="position:relative;top:0;width:100%;z-index:1;">
                                    <table border="1" style="border:1px solid rgba(0,0,0, 0.2);background:var(--ijo);z-index:1; position:relative;color:white;  width:100%;">
                                        <tr>
                                            <th>No</th>
                                            <th>FullName</th>
                                            <th>UserName</th>
                                            <th>Email</th>
                                            <th>Whatsapp</th>
                                        </tr>
                                        <?php
                                        include 'connection.php';

                                        $result = mysqli_query($db_connection, "SELECT * FROM users");

                                        $i = 1;
                                        foreach ($result as $data) :
                                        ?>
                                            <tr align="center">
                                                <td><?php echo $i++ ?></td>
                                                <td><?= $data['fullname'] ?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= $data['email'] ?></td>
                                                <td><?= $data['whatsapp'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    </div>

    <script src="js/learn.js">
    </script>
</body>

</html>