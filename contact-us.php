<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Saham - Contact Us</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg">
    <?php include_once("inc/header-layout-2.php") ?>

    <section class="contact">
        <div class="container">
            <div class="container">
                <div class="row contact__box">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="contact__info">
                        <h1>Komunitas PanenSaham</h1>
                        <p>
                            Gading Bukit Indah Blok A No 27 <br>
                            Kelapa Gading Barat, Kelapa Gading <br>
                            Jakarta Utara 14240
                        </p>
                        <h4>Customer Support</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="img/icon/icon-mail.svg" alt="Icon">
                                    support.krips@panensaham.com
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon/icon-phone.svg" alt="Icon">
                                    021-45852711
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon/icon-wa.svg" alt="Icon">
                                    WA CS 1 082148004900 <br>
                                    WA CS 2 082148005800
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon/icon-pin.svg" alt="Icon">
                                    https://goo.gl/maps/B1N2UNKZrh17aJeD8
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="contact__form">
                            <h1>Contact Form</h1>
                            <form class="needs-validation" novalidate>
                                <div class="mb-4">
                                    <input type="text" class="form-control form__default shadow__xs" placeholder="nama"
                                        required>
                                    <div class="invalid-feedback">
                                        Harap masukan nama anda!
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <input type="text" class="form-control form__default shadow__xs" placeholder="email"
                                        required>
                                    <div class="invalid-feedback">
                                        Harap masukan email anda!
                                    </div>
                                </div>
                                <div class="mb-4">

                                    <input type="email" class="form-control form__default shadow__xs"
                                        placeholder="no Hp" required>
                                    <div class="invalid-feedback">
                                        Harap masukan nomor handphone anda!
                                    </div>

                                </div>
                                <div class="mb-4">
                                    <textarea cols="30" rows="8" class="form-control form__default shadow__xs"
                                        placeholder="pesan" required></textarea>
                                    <div class="invalid-feedback">
                                        Harap masukan pesan anda!
                                    </div>
                                </div>

                                <button type="submit" class="btn__small bg__secondary2 shadow__xs">kirim</button>
                        </div>
                    </div>
                    </form>
                    
                </div>
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