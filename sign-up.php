<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Saham - Sign Up</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg">
    <?php include_once("inc/header-layout-2.php") ?>

    <section class="signup">
        <div class="container">
            <h1>Buat <span>Akun</span></h1>
        </div>
        <div class="container">
            <form class="needs-validation" novalidate>
                <div class="row signup__box">
                    <div class="col-12 col-md-5 col-xl-6">
                        <div class="signup__form">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control form__default" placeholder="username" required>
                                <div class="invalid-feedback">
                                        Tolong masukan username anda!
                                </div>  
                            </div>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control form__default" placeholder="nama" required>
                                <div class="invalid-feedback">
                                        Tolong masukan nama anda!
                                </div>  
                            </div>
                            <div class="input-group mb-4">
                                <input type="email" class="form-control form__default" placeholder="email" required>
                                <div class="invalid-feedback">
                                        Tolong masukan email anda!
                                </div>  
                            </div>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control form__default" placeholder="nomor handphone" required>
                                <div class="invalid-feedback">
                                        Tolong masukan nomor telepon anda!
                                </div>  
                            </div>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control form__default" placeholder="buat password" required>
                                <div class="invalid-feedback">
                                        Tolong masukan password anda!
                                </div>  
                            </div>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control form__default" placeholder="ulangi password" required>
                                <div class="invalid-feedback">
                                        Tolong masukan ulangi password anda!
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-xl-6">
                        <div class="signup__form">
                            <div class="input-group">
                                <input type="text" class="form-control form__default" placeholder="kode referral">
                                <button class="btn btn-outline-secondary" type="button">cek kode</button>
                            </div>
                            <span class="labeltext">(boleh dikosongkan)</span>
    
                            <div class="signup__agree">
                                <input class="form-check-input mt-0" type="radio">
                                <label>Anda telah membaca dan menyetujui kebijakan privasi</label>
                            </div>
                            <button type="submit" class="btn__largexl br-1 ">DAFTAR</button>
                            <div class="signup__txt">
                                Sudah punya akun? Silahkan <a class="grn" href="#">log in!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <footer class="footer">
        <div class="footer__box">
            <div class="container">
                <div class="row">
                    <div class="box">
                        <p>Download Our App</p>
                        <div class="img-down">
                            <a href="#">
                                <img src="./img/playstore.png" alt="">
                            </a>
                            <a href="#">
                                <img src="./img/apple.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Term</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Return Policy</a></li>
                        </ul>
                        <p class="copyright">© Copyright Asisten Panensaham 2020. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/slick/slick.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>