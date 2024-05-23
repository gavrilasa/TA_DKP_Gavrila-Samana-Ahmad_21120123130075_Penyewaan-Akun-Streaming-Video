<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>StreamKuy</title>
        <link rel="stylesheet" href="./src/style/style.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <link rel="icon" href="./src/assets/icon-video.png" type="image/x-icon">
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked />
                <label for="c1" id="c1" class="card">
                    <div class="row">
                        <div class="icons">
                            <img src="src/assets/Logo-Netflix.png" alt="">
                        </div>
                        <div class="description">
                            <div class="text">
                                <h4>Netflix</h4>
                                <p>Kalo mau nonton series, si merah ini paling oke</p>
                            </div>
                        </div>
                        <div class="action-area">
                            <form action="app\checkout.php" method="post">
                                <input type="hidden" name="service" value="Netflix">
                                <button type="submit" class="checkout-button" id="netflix">Sewa</button>
                            </form>
                        </div>
                    </div>
                </label>

                <input type="radio" name="slide" id="c2" />
                <label for="c2" id="c2" class="card">
                    <div class="row">
                        <div class="icons">
                            <img src="src/assets/Logo-Disney-Hotstar.png" alt="">
                        </div>
                        <div class="description">
                            <div class="text">
                                <h4>Disney+ Hotstar</h4>
                                <p>Cari marvel atau kartun luar negeri? sini aja udah</p>
                            </div>
                        </div>
                        <div class="action-area">
                            <form action="app\checkout.php" method="post">
                                <input type="hidden" name="service" value="Disney">
                                <button type="submit" class="checkout-button" id="disney">Sewa</button>
                            </form>
                        </div>
                    </div>
                </label>

                <input type="radio" name="slide" id="c3" />
                <label for="c3" id="c3" class="card">
                    <div class="row">
                        <div class="icons">
                            <img src="src/assets/Logo-Viu.png" alt="">
                        </div>
                        <div class="description">
                            <div class="text">
                                <h4>Viu</h4>
                                <p>Mau ngedrakor dengan nyaman, sewa ini aja</p>
                            </div>
                        </div>
                        <div class="action-area">
                            <form action="app\checkout.php" method="post">
                                <input type="hidden" name="service" value="Viu">
                                <button type="submit" class="checkout-button" id="viu">Sewa</button>
                            </form>
                        </div>
                    </div>
                </label>

                <input type="radio" name="slide" id="c4" />
                <label for="c4" id="c4" class="card">
                    <div class="row">
                        <div class="icons">
                            <img src="src/assets/Logo-Bilibili.png" alt="">
                        </div>
                        <div class="description">
                            <div class="text">
                                <h4>Bilibili</h4>
                                <p>Semua anime ada disini, langsung sewa aja</p>
                            </div>
                        </div>
                        <div class="action-area">
                            <form action="app\checkout.php" method="post">
                                <input type="hidden" name="service" value="Bilibili">
                                <button type="submit" class="checkout-button" id="bilibili">Sewa</button>
                            </form>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </body>
</html>
