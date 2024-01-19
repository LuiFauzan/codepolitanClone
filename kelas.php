<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Course</title>
    <link rel="stylesheet" href="styles/learn.css">
    <?php include "utility/main.php"; ?>
    <style>
        .btn {
            padding: 15px;
            width: 90%;
            display: block;
            text-align: left;
            justify-content: left;
            background-color: var(--abu);
            height: auto;
            border: 1px solid rgba(0, 0, 0, 0.2);
            font-weight: 600;
            color: grey;
            border-radius: 10px;
        }

        .btn:hover {
            cursor: pointer;
        }

        .btn:focus {
            background-color: var(--ijo);
            color: white;
        }

        .btn,
        span i {
            margin-right: 10px;
        }

        .main {
            /* background-color: red; */
            /* border: 1px solid black; */
            margin-left: 250px;
            height: auto;
            padding: 60px;
        }

        .main-video {
            background-color: white;
            width: 100%;
            height: auto;
            margin-top: 30px;
        }

        .main-list>span {
            border-bottom: 3px solid var(--ijo);
            padding: 10px;
        }

        .btn-s {
            width: 30%;
            padding: 10px;
            background-color: var(--ijo);
            border-radius: 10px;
            color: white;
            border: none;
            font-weight: 600;
            margin: 30px;
        }

        .btn-s:hover {
            cursor: pointer;
        }

        video {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include "connection.php";
        $courseId = mysqli_real_escape_string($db_connection, $_GET['courseid']);

        $query = mysqli_query($db_connection, "SELECT course.*, video_materi.* FROM course INNER JOIN video_materi ON course.courseid = video_materi.courseid WHERE course.courseid = '$courseId'");
        foreach ($query as $row) :
        ?>
            <div class="side-nav">
                <div class="img-title">
                    <a href=""><img src="img/codepolitan.png" alt="" width="75%"></a>
                </div>
                <div class="nav">
                    <div class="nav-title">
                        <small>
                            <p>
                                TABLE OF CONTENT
                            </p>
                        </small>
                    </div>
                    <div class="nav-list" id="nav-list">
                        <div class="list-item">
                            <div class="btn">
                                <span><i class="fa-solid fa-video"></i><?= $row['namavideo'] ?></span><br>
                                <span style="margin-top: 20px;font-weight: 400;">03:03</span>
                            </div>
                        </div>
                        <div class="utility">
                            <hr>
                            <a href="get.php?courseid=<?= $row['courseid'] ?>" class="list1">
                                <span>Claim Certificate</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <h1><?= $row['namavideo'] ?></h1>
                <div class="main-list">
                    <span style="color:var(--ijo);border-bottom:1px solid var(ijo);"><i class="fa-solid fa-video"></i>Materi</span>
                    <div class="main-video">
                        <video src="assets/video//<?= $row['urlvideo'] ?>" controls></video>
                        <button class="btn-s">Saya Sudah Paham</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>