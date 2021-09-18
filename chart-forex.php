<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Saham - Chart Forex</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/magnific-popup.css">
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
                            <h1>Forex Currency</h1>
                        </div>
                        <div class="row g-0 justify-content-between">
                            <a href="chart-forex.php" class="box-container">
                                <div class="box-icon active">
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
                            <a data-bs-toggle="modal" data-bs-target="#alert__forex" class="box-container">
                                <div class="box-icon">
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
                    <div class="chart__infobox">
                        <div class="chart__headicon bg__3">
                            <h1>Daftar perintah:</h1>
                        </div>
                        <div class="chart__contentinfobox">
                            <p>/cma = Chart Moving Average</p>
                            <p>/cco = Chart Bulang</p>
                            <p>/cal = Chart Buaya</p>
                            <p>/cah = Chart Good Swing</p>
                            <p>/ctl = Chart Multi Trendline</p>
                            <p>/odt = Chart Ode-Ode</p>
                            <p>/psl = Chart Triangle Line</p>
                            <p>/cfr = Chart Performance</p>
                        </div>
                    </div>
                    <div class="chart__infobox">
                        <div class="chart__headicon bg__3">
                            <h1>Daftar interval:</h1>
                        </div>
                        <div class="chart__contentinfobox">
                            <p>05 = 5 minutes</p>
                            <p>15 = 15 minutes</p>
                            <p>30 = 30 minutes </p>
                            <p>hh = Hourly</p>
                            <p>4h = 4 Hours</p>
                            <p>dd = Daily</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-7 col-lg-7 col-xl-8">
                    <div class="chart__content">
                        <div class="box">
                            <img class="show2" src="img/chart-forex.png" data-mfp-src="img/chart-forex.png" alt="Chart">
                        </div>
                    </div>
                    <div class="chart__form">
                        <form action="">
                            <div class="row align-items-stretch g-1">
                                <div class="col-6 col-md-12 col-lg-6 col-xl-4">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option value="0" disable selected>Daftar Perintah</option>
                                            <option>/cma</option>
                                            <option>/cco</option>
                                            <option>/cal</option>
                                            <option>/cah</option>
                                            <option>/ctl</option>
                                            <option>/odt</option>
                                            <option>/psl</option>
                                            <option>/cfr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-lg-6 col-xl-4">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option value="0" disable selected>Interval</option>
                                            <option>05</option>
                                            <option>15</option>
                                            <option>30</option>
                                            <option>hh</option>
                                            <option>4h</option>
                                            <option>dd</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12 col-xl-4">
                                    <div class="input-group form-box3">
                                        <input type="text" class="form-control form__default"
                                            placeholder="Masukan simbol">
                                        <button class="btn btn-outline-secondary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>


    <?php include_once("inc/footer.php") ?>

    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>