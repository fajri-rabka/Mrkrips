<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Saham - Filter Commodity</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/datatables.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg">
    <?php include_once("inc/header-layout-4.php") ?>

    <section class="chart">
        <div class="container">
            <div class="row chart__containericon g-0">
                <div class="col-12 col-md-5 col-lg-5 col-xl-4 pe-4">
                    <div class="chart__iconbox2">
                        <div class="chart__headicon bg__2">
                            <h1>Commodity</h1>
                        </div>
                        <div class="row g-0 justify-content-between">
                            <a href="chart-commodity.php" class="box-container">
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/chart-icon-plain.png" alt="Icon">
                                    </div>
                                    <p>chart</p>
                                </div>
                            </a>
                            <a href="filter-commodity.php" class="box-container">
                                <div class="box-icon active">
                                    <div class="bg-icon">
                                        <img src="img/icon/up-icon-plain.png" alt="Icon">
                                    </div>
                                    <p>filter</p>
                                </div>
                            </a>
                            <a data-bs-toggle="modal" data-bs-target="#alert__commodity" class="box-container">
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
                        <div class="chart__headicon bg__2">
                            <h1>Daftar perintah:</h1>
                        </div>
                        <div class="chart__contentinfobox">
                            <p>/f bulang = Filter Bumi - Langit</p>
                            <p>/f swb = Filter Swing Buy & Sell</p>
                            <p>/f hold = Filter Layak Hold</p>
                            <p>/f ps20 = Filter Potensi rebound support 20</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-7 col-xl-8">
                    <div class="chart__content chart__filter">
                        <div class="box">
                            <div class="head__table">
                                <a href="#" class="active">Table</a> <span>|</span>
                                <a href="#">Technical Analysis</a>
                            </div>
                            <table id="data1" class="table table-responsive table-sm">
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
                                    <tr>
                                        <td>EMTK</td>
                                        <td>15/06/2021</td>
                                        <td>2,220</td>
                                        <td>1.83</td>
                                        <td></td>
                                        <td>Down <50 </td> <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EMTK</td>
                                        <td>15/06/2021</td>
                                        <td>2,220</td>
                                        <td>1.83</td>
                                        <td></td>
                                        <td>Down <50 </td> <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EMTK</td>
                                        <td>15/06/2021</td>
                                        <td>2,220</td>
                                        <td>1.83</td>
                                        <td></td>
                                        <td>Down <50 </td> <td>
                                        </td>
                                    </tr>
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
                            <div class="input-group form-box2">
                                <select class="form-select" id="inputGroupSelect02">
                                    <option hidden>Daftar Perintah</option>
                                    <option>/f bulang</option>
                                    <option>/f swb</option>
                                    <option>/f hold</option>
                                    <option>/f ps20</option>
                                </select>
                                <button class="btn btn-outline-secondary" type="button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>


    <?php include_once("inc/footer.php") ?>

    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery-datables.js"></script>
    <script src="./js/jquery-datablesbt4.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>