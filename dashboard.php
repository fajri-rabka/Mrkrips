    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panen Saham - Dashboard</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body class="bg">
        <?php include_once("inc/header-layout-4.php") ?>

        <section class="dashboard">
            <div class="container">
                <div class="row dashboard__box">
                    <div class="col-12">
                        <div class="dashboard__img">
                            <img src="img/user.jpg" alt="User">
                            <div class="dashboard__info">
                                <h1>Halo!</h1>
                                <div class="dashboard__boxinfo">
                                    <div>
                                        <p>Laysha</p>
                                        <p>085661788122</p>
                                    </div>
                                    <span>Technical</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row dashboard__containericon g-0">
                    <div class="dashboard__iconbox col-12 col-md-6 col-lg-6 xl-6 pr-50">
                        <div class="dashboard__headicon bg__1">
                            <h1>Crypto Currency</h1>
                        </div>
                        <div class="row g-0 justify-content-between">
                            <a href="chart-crypto.php" class="box-container">
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/chart-icon-plain.png" alt="Icon">
                                    </div>
                                    <p>chart</p>
                                </div>
                            </a>
                            <a href="filter-crypto.php" class="box-container">
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/up-icon-plain.png" alt="Icon">
                                    </div>
                                    <p>filter</p>
                                </div>
                            </a>
                            <a href="alert-crypto.php" class="box-container">
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
                    <div class="dashboard__iconbox col-12 col-md-6 col-lg-6 xl-6 pl-50">
                        <div class="dashboard__headicon bg__2">
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
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/up-icon-plain.png" alt="Icon">
                                    </div>
                                    <p>filter</p>
                                </div>
                            </a>
                            <a href="alert-commodity.php" class="box-container">
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
                    <div class="dashboard__iconbox col-12 col-md-6 col-lg-6 xl-6 pr-50">
                        <div class="dashboard__headicon bg__3">
                            <h1>Forex</h1>
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
                    <div class="dashboard__iconbox col-12 col-md-6 col-lg-6 xl-6 pl-50">
                        <div class="dashboard__headicon bg__4">
                            <h1>Manage Account</h1>
                        </div>
                        <div class="row g-0 justify-content-between">
                            <a href="profile.php" class="box-container">
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/username-icon.svg" alt="Icon">
                                    </div>
                                    <p>edit profile</p>
                                </div>
                            </a>
                            <a href="cart-checkout.php" class="box-container">
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/payment.svg" alt="Icon">
                                    </div>
                                    <p>shop / subscribe</p>
                                </div>
                            </a>
                            <a href="tutorials.php" class="box-container">
                                <div class="box-icon">
                                    <div class="bg-icon">
                                        <img src="img/icon/how.svg" alt="Icon">
                                    </div>
                                    <p>how to / tutorials</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

        </section>


        <?php include_once("inc/footer.php") ?>

        <script src="./js/jquery.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/slick/slick.min.js"></script>
        <script src="./js/script.js"></script>
    </body>

    </html>