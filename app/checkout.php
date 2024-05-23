<?php

require_once 'ServiceColor.php';

$service = isset($_POST['service']) ? $_POST['service'] : '';
if (empty($service)) {
    header('Location: ../index.php');
    exit();
}

$serviceColor = new ServiceColor($service);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout <?php echo htmlspecialchars($service); ?></title>

    <style>
        .input-area button {
            background-color: <?= $serviceColor->getColorIdentity() ?> ;
            color: #ffffff;
        }
        .input-area button:hover {
            background-color: <?= $serviceColor->getColorHover() ?> ; 
        }
        .duration-option:hover{
            background-color: <?= $serviceColor->getColorIdentity() ?>;
            color: #ffffff;
        }
    </style>

    <link rel="stylesheet" href="../src/style/checkout.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="icon" href="./src/assets/icon-video.png" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="image-area">
                <?php
                    echo $serviceColor->getCardImage();
                ?>
            </div>

            <div class="input-area">
                <form action="success.php" method="post">
                    <input type="hidden" name="service" value="<?php echo htmlspecialchars($service); ?>">
                    <div class="duration-options">
                        <div class="row">
                            <label class="duration-option">
                                <input type="radio" name="duration" value="1" checked>
                                <span>1 Bulan</span>
                                <p>Rp. 20.000</p>
                            </label>
                            <label class="duration-option">
                                <input type="radio" name="duration" value="3">
                                <span>3 Bulan</span>
                                <p>Rp. 50.000</p>
                            </label>
                        </div>

                        <div class="row">
                            <label class="duration-option">
                                <input type="radio" name="duration" value="6">
                                <span>6 Bulan</span>
                                <p>Rp. 90.000</p>
                            </label>
                            <label class="duration-option">
                                <input type="radio" name="duration" value="12">
                                <span>12 Bulan</span>
                                <p>Rp. 120.000</p>
                            </label>
                        </div>

                        <div class="phone-number">
                            <label for="phone">Nomor Handphone</label>
                            <input type="text" name="phone" id="phone" placeholder="Minta nomor HP dong"required>
                            <p>*Nomor Handphone hanya digunakan untuk mengirimkan detail struk pembayaran</p>
                        </div>

                        <button type="submit">Sewa</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
