<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Saham - Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg">
    <?php include_once("inc/header-layout-1.php") ?>

    <section class="login">
        <div class="container">
            <div class="login__box">
                <div class="login__form">
                    <form class="needs-validation" novalidate>
                        <div class="login__group">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><img src="img/icon/user-icon.svg" alt="User"></span>
                                <input type="email" class="form-control form__login" placeholder="Email"
                                    aria-label="Username" aria-describedby="basic-addon1" required>
                                    <div class="invalid-feedback">
                                        Harap masukan email anda dengan benar!
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><img src="img/icon/password-icon.svg"
                                    alt="Password"></span>
                                    <input type="password" class="form-control form__login" placeholder="Password"
                                    aria-label="Password" aria-describedby="basic-addon1" required>
                                    <div class="invalid-feedback">
                                        Harap masukan password anda dengan benar!
                                    </div>
                            </div>
                        </div>
                        <button type="submit" class="btn__large">LOG IN</button>
                    </form>
                    <div class="login__txt">
                        <a href="#">Forgot Password?</a> <a class="grn" href="#">or Sign Up Here!</a>
                    </div>
                </div>
                <img class="people" src="./img/people.png" alt="people">
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