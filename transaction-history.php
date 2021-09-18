<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Saham - Transaction History</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg">
    <?php include_once("inc/header-layout-2.php") ?>

    <section class="profile">
        <div class="container">
            <div class="container">
                <div class="row profile__box">
                    <div class="col-12 col-md-12 col-xl-4">
                        <div class="profile__img">
                            <img src="img/user.jpg" alt="User">
                            <div class="profile__info">
                                <a href="#">edit profile</a>
                                <span>Technical</span>
                                <span>exp: 31/12/2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-8">
                        <div class="profile__form">
                            <div class="profile__navlink">
                                <a href="profile.php">Edit Profile</a>
                                <a href="change-password.php">Change Password</a>
                                <a href="transaction-history.php" class="active">Transaction History</a>
                            </div>
                            <form class="needs-validation" novalidate>
                                <div class="profile__form history">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pending-tab" data-bs-toggle="tab"
                                                data-bs-target="#pending" type="button" role="tab"
                                                aria-controls="pending" aria-selected="true">Pending</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="success-tab" data-bs-toggle="tab"
                                                data-bs-target="#success" type="button" role="tab"
                                                aria-controls="success" aria-selected="false">Success</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active box-content1" id="pending" role="tabpanel"
                                            aria-labelledby="pending-tab">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NoKode</th>
                                                        <th scope="col">Transaksi</th>
                                                        <th scope="col">Tanggal Transaksi</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1012563</td>
                                                        <td>12546</td>
                                                        <td>30 Agustus 2021</td>
                                                        <td><a class="btn-pay" href="#">Bayar</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade box-content2" id="success" role="tabpanel"
                                            aria-labelledby="success-tab">
                                            <table class="table table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label for="check1" class="check__default">
                                                                <input type="checkbox" name="check1" id="check1"
                                                                    checked>
                                                                <span class="cbx">
                                                                    <img src="img/icon/checked-icon.svg" alt="Icon">
                                                                </span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="history__namebox">
                                                                <div class="history__nametype bg-3">
                                                                    /cah
                                                                </div>
                                                                <div class="history__namedesc">
                                                                    <p class="type">/cal = Chart Buaya</p>
                                                                    <p class="desc">menu Chart Forex</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="price">Rp. 7000</p>
                                                        </td>
                                                        <td>
                                                            <p class="history__expired bg1"><span>exp: 31/12/2021</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="check1" class="check__default">
                                                                <input type="checkbox" name="check1" id="check1"
                                                                    checked>
                                                                <span class="cbx">
                                                                    <img src="img/icon/checked-icon.svg" alt="Icon">
                                                                </span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="history__namebox">
                                                                <div class="history__nametype bg-3">
                                                                    /cah
                                                                </div>
                                                                <div class="history__namedesc">
                                                                    <p class="type">/cal = Chart Buaya</p>
                                                                    <p class="desc">menu Chart Forex</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="price">Rp. 7000</p>
                                                        </td>
                                                        <td>
                                                            <p class="history__expired bg1"><span>exp: 31/12/2021</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="check1" class="check__default">
                                                                <input type="checkbox" name="check1" id="check1"
                                                                    checked>
                                                                <span class="cbx">
                                                                    <img src="img/icon/checked-icon.svg" alt="Icon">
                                                                </span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="history__namebox">
                                                                <div class="history__nametype bg-3">
                                                                    /cah
                                                                </div>
                                                                <div class="history__namedesc">
                                                                    <p class="type">/cal = Chart Buaya</p>
                                                                    <p class="desc">menu Chart Forex</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="price">Rp. 7000</p>
                                                        </td>
                                                        <td>
                                                            <p class="history__expired bg1"><span>exp: 31/12/2021</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="check1" class="check__default">
                                                                <input type="checkbox" name="check1" id="check1"
                                                                    checked>
                                                                <span class="cbx">
                                                                    <img src="img/icon/checked-icon.svg" alt="Icon">
                                                                </span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="history__namebox">
                                                                <div class="history__nametype bg-3">
                                                                    /cah
                                                                </div>
                                                                <div class="history__namedesc">
                                                                    <p class="type">/cal = Chart Buaya</p>
                                                                    <p class="desc">menu Chart Forex</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="price">Rp. 7000</p>
                                                        </td>
                                                        <td>
                                                            <p class="history__expired bg1"><span>exp: 31/12/2021</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="check1" class="check__default">
                                                                <input type="checkbox" name="check1" id="check1"
                                                                    checked>
                                                                <span class="cbx">
                                                                    <img src="img/icon/checked-icon.svg" alt="Icon">
                                                                </span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="history__namebox">
                                                                <div class="history__nametype bg-3">
                                                                    /cah
                                                                </div>
                                                                <div class="history__namedesc">
                                                                    <p class="type">/cal = Chart Buaya</p>
                                                                    <p class="desc">menu Chart Forex</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="price">Rp. 7000</p>
                                                        </td>
                                                        <td>
                                                            <p class="history__expired bg1"><span>exp: 31/12/2021</span></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="check1" class="check__default">
                                                                <input type="checkbox" name="check1" id="check1"
                                                                    checked>
                                                                <span class="cbx">
                                                                    <img src="img/icon/checked-icon.svg" alt="Icon">
                                                                </span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="history__namebox">
                                                                <div class="history__nametype bg-3">
                                                                    /cah
                                                                </div>
                                                                <div class="history__namedesc">
                                                                    <p class="type">/cal = Chart Buaya</p>
                                                                    <p class="desc">menu Chart Forex</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="price">Rp. 7000</p>
                                                        </td>
                                                        <td>
                                                            <p class="history__expired bg1"><span>exp: 31/12/2021</span></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <button type="submit"
                                                class="btn__small bg__secondary2 shadow__xs">Perpanjang
                                                Langganan</button>
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
    <script src="./js/script.js"></script>
</body>

</html>