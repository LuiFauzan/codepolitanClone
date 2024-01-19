<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: formlogin.php");
}

include "connection.php";
$queryCourse = "SELECT * FROM course WHERE courseid = '$_GET[courseid]'";
$course = mysqli_query($db_connection, $queryCourse);
$row = mysqli_fetch_assoc($course);
$queryUser = "SELECT * FROM users";
$user = mysqli_query($db_connection, $queryUser);

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
        body {
            background-color: white;
        }

        .container {
            display: flex;
            height: 97vh;
        }

        .container-left {
            padding: 30px 50px 30px 50px;
            height: 90vh;
            border-right: 2px solid rgba(0, 0, 0, 0.2);
            width: 53%;
        }

        .container-right {
            padding: 30px 50px 30px 50px;
            position: absolute;
            right: 0;
            /* border: 1px solid rgba(0, 0, 0, 0.3); */
            width: 33.7%;
            display: flex;
            float: right;
            height: 90vh;
            background-color: var(--abu);
            top: 0;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }



        input {
            height: 20px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin-top: 10px;
            padding: 10px;
        }

        ::placeholder {
            font-size: 16px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .diskon {

            height: auto;
            width: auto;
            position: absolute;
            top: 170px;
            padding-top: 20px;
            padding-bottom: 20px;

            border-top: 1px solid rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        .diskon>input {
            width: 400px;
            height: 20px;
            border-color: rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .diskon>button {
            height: 30px;
            margin-left: 20px;
            background-color: var(--abu-tua);
            color: var(--abu);
            border: var(--abu-tua);
            /* cursor: pointer; */
            height: 35px;
            width: 60px;
            border-radius: 5px;
        }

        .harga {
            position: absolute;
            top: 310px;
            display: block;
        }

        .harga1,
        .harga2,
        .harga3 {
            display: flex;
            width: 510px;
            justify-content: space-between;
            /* border: 1px solid black; */
        }

        .harga2 {
            margin-top: 30px;
        }

        .harga3 {
            border-top: 1px solid var(--abu-tua);
            margin-top: 20px;
            padding-top: 20px;
        }

        .checkout {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            color: white;
            background-color: var(--ijo);
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .checkout:hover {
            background-color: #09A9A9;
        }
    </style>
</head>

<body>
    <div class="container">

        <form action="utility/transaksi.php" method="post">

            <div class="container-left">
                <h2 style="font-weight: 400;font-size:26px;">Codepolitan Payment</h2>
                <div class="info">
                    <span style="font-size:19px">Informasi Pelangan</span>
                    <span style="color: var(--abu-tua);font-size:15px;">Lengkapi form dibawah ini</span>
                </div>
                <div class="form-beli">
                    <?php foreach ($user as $data) : ?>
                    <?php endforeach; ?>
                    <label for="" style="margin-top: 300px;">Email</label><br>
                    <input type="email" name="email" style="margin-bottom: 40px;" placeholder="Contoh: john@gmail.com" required><br>
                    <span style="font-weight: 400; font-size:19px;">Nama dan Nomor Whatsapp</span><br>
                    <div style="height: 20px;"></div>
                    <label for="">Nama Lengkap</label><br>
                    <input type="text" name="fullname" placeholder="Contoh: john Doe" required><br>
                    <div style="height: 20px;"></div>
                    <label for="">Nomor Whatsapp</label><br>
                    <input type="text" name="whatsapp" placeholder="Contoh: 0983543xxxx" required>
                    <p><strong>NOTE: </strong> Pastikan email dan nomor whatsapp yang kamu masukkan adalah benar. Sebab kami akan gunakan data tersebut untuk mengirimkan voucher aktivasi paket belajar kamu atau melakukan konfirmasi terkait pembayaran.</p>

                    <p>Khusus kamu yang melakukan pembayaran Bootcamp, kaos, merchandise, tidak perlu melakukan aktivasi voucher, kami akan langsung memproses pesanan kamu.</p>
                </div>
            </div>
            <div class="container-right" style="display: flex;">
                <img src="assets/img/<?= $row['photoCourse'] ?>" alt="" width="120" height="60" style="border-radius: 5px;margin-top:30px;">
                <div class="price-title" style="margin-left: 20px;margin-top:30px;">
                    <span style="font-weight: 400;font-size:20px;"><?= $row['courseName'] ?></span><br>
                    <span style="margin-top: 20px;color:var(--abu-tua);">Tipe: Course</span>
                </div>
                <div class="diskon">
                    <input type="text">
                    <button>Check</button>
                </div>
                <div class="harga">
                    <div class="harga1">
                        <span>Harga</span>
                        <span>Rp.<?= $row['price'] ?></span>
                    </div>
                    <div class="harga2">
                        <span>Diskon</span>
                        <span>Rp.0</span>
                    </div>
                    <div class="harga3">
                        <span>Total</span>
                        <span>Rp.<strong style="font-size: 30px;"><?= $row['price'] ?></strong></span>
                    </div>
                    <button type="submit" name="checkout" class="checkout">Checkout</button>
                    <input type="hidden" name="courseid" value="<?= $row['courseid'] ?>">

                </div>
            </div>
        </form>
    </div>
</body>
<script>
</script>

</html>