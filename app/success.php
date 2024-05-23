<?php
require_once 'account.php';

$service = isset($_POST['service']) ? $_POST['service'] : '';
$duration = isset($_POST['duration']) ? $_POST['duration'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';

if (empty($service)) {
    header('Location: ../index.php');
    exit();
}

$account = generateAccount($service, $duration);

$bgCard;
switch ($service) {
    case 'Netflix':
        $bgCard = 'Result-Netflix.png';
        break;
    case 'Disney':
        $bgCard = 'Result-Disney.png';
        break;
    case 'Viu':
        $bgCard = 'Result-Viu.png';
        break;
    case 'Bilibili':
        $bgCard = 'Result-Bilibili.png';
        break;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="stylesheet" href="../src/style/success.css">
    <link rel="icon" href="../src/assets/icon-video.png" type="image/x-icon">
    <style>
        .card-container {
            background-image: url("../src/assets/<?php echo $bgCard; ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="container">
            <header>
                <img src="../src/assets/success-icon.png" alt="">
                <h1>Streamkuy</h1>
                <p>
                    <?php
                $date = date('d-m-y h:i:s');
                echo $date;
                ?>
                </p>
            </header>
            <hr>
            <main>
                <p>Nomor Pesanan:
                    <?php
                        echo rand(0, 9999);
                    ?>
                </p>
                <p>Layanan: <?php echo $service; ?></p>
                <p>Durasi: <?php echo $duration; ?> bulan</p>
                <p>Nomor HP: <?php echo $phone; ?></p>
            </main>
            <hr>
            <div class="reminder">
                <p>Jangan lupa di simpan ya Username dan Password-nya</p>
                <br>
                <hr>
            </div>
            <footer>
                <p>Terima kasih telah menyewa akun <?php echo $service; ?> pada platform</p>
                <p>Streamkuy!</p>
                <br>
            </footer>
        </div>

        <div class="card-container">
            <p><?php echo $account->getUsername(); ?></p>
            <p><?php echo $account->getPass(); ?></p>
        </div>
    </div>


</body>

</html>