<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Saham - Alert Forex</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg">
    <?php include_once("inc/header-layout-4.php") ?>

    <section class="chart">
        <div class="container">
            <div class="row chart__containericon g-0">
                <div class="col-12 col-md-5 col-lg-5 col-xl-4 pe-4">
                    <div class="chart__iconbox3">
                        <div class="chart__headicon bg__3">
                            <h1>Forex Exchange</h1>
                        </div>
                        <div class="row g-0 justify-content-between">
                            <a href="chart-forex.php" class="box-container">
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/chart-icon-plain.png" alt="Icon">
                                    </div>
                                    <p>chart</p>
                                </div>
                            </a>
                            <a href="filter-forex.php" class="box-container">
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/up-icon-plain.png" alt="Icon">
                                    </div>
                                    <p>filter</p>
                                </div>
                            </a>
                            <a href="alert-forex.php" class="box-container">
                                <div class="box-icon active">
                                    <div class="label-info">
                                        <span>20</span>
                                    </div>
                                    <div class="bg-icon">
                                        <img src="img/icon/alert-icon-plain.png" alt="Icon">
                                    </div>
                                    <p>alert</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="alert__infobox">
                        <div class="alert__notification">
                            <h1>Notification</h1>
                        </div>
                        <div class="alert__contentinfobox">
                            <ul>
                                <li>
                                    <p>BotFish : 2021-06-09 02:05:13,</p>
                                    <p>MATICIDR : 21,178 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>Short Sell : 2021-06-08 21:50:13,</p>
                                    <p>VEXIDR : 133 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>BotFish : 2021-06-09 02:05:13,</p>
                                    <p>MATICIDR : 21,178 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>Short Sell : 2021-06-08 21:50:13,</p>
                                    <p>VEXIDR : 133 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>BotFish : 2021-06-09 02:05:13,</p>
                                    <p>MATICIDR : 21,178 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>Short Sell : 2021-06-08 21:50:13,</p>
                                    <p>VEXIDR : 133 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>BotFish : 2021-06-09 02:05:13,</p>
                                    <p>MATICIDR : 21,178 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>Short Sell : 2021-06-08 21:50:13,</p>
                                    <p>VEXIDR : 133 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>BotFish : 2021-06-09 02:05:13,</p>
                                    <p>MATICIDR : 21,178 (Disclaimer On)</p>
                                </li>
                                <li>
                                    <p>Short Sell : 2021-06-08 21:50:13,</p>
                                    <p>VEXIDR : 133 (Disclaimer On)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-7 col-lg-7 col-xl-8">
                    <div class="chart__content">
                        <div class="box">
                            <div class="head__table">
                                <a href="#" class="active">Table</a> <span>|</span>
                                <a href="#">Technical Analysis</a>
                            </div>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Ticker</th>
                                        <th scope="col">Date / Time</th>
                                        <th scope="col">Close</th>
                                        <th scope="col">Persen</th>
                                        <th scope="col">Candle</th>
                                        <th scope="col">Sto-D</th>
                                        <th scope="col">Syariah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EMTK</td>
                                        <td>15/06/2021</td>
                                        <td>2,220</td>
                                        <td>1.83</td>
                                        <td></td>
                                        <td>Down <50 </td> <td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="chart__form">
                        <form action="">
                            <div class="input-group form-box3">
                                <input type="text" class="form-control form__default" placeholder="Masukan perintah">
                                <button class="btn btn-outline-secondary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>


    <?php include_once("inc/footer.php") ?>

    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>