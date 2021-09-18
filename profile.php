<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Saham - Profile</title>
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
                        <div class="profile__form identity">
                            <div class="profile__navlink">
                                <a href="profile.php" class="active">Edit Profile</a>
                                <a href="change-password.php">Change Password</a>
                                <a href="transaction-history.php">Transaction History</a>
                            </div>
                            <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="input-box mb-4">
                                        <label>username</label>
                                        <input type="email" class="form-control form__default shadow__xs">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="input-box mb-4">
                                        <label>name</label>
                                        <input type="text" class="form-control form__default shadow__xs">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="input-box mb-4">
                                        <label>email</label>
                                        <input type="email" class="form-control form__default shadow__xs">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="input-box mb-4">
                                        <label>phone no.</label>
                                        <input type="number" class="form-control form__default shadow__xs">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="input-box mb-4">
                                        <label>gender</label>
                                        <input type="text" class="form-control form__default shadow__xs">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="input-box mb-4">
                                        <label>date of birth</label>
                                        <input type="date" class="form-control form__default shadow__xs">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="input-box mb-4">
                                        <label>location</label>
                                        <input type="text" class="form-control form__default shadow__xs">
                                    </div>
                                    <div class="input-box mb-4">
                                        <label>hobby / interest</label>
                                        <input type="text" class="form-control form__default shadow__xs">
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="input-box mb-4">
                                        <label>address</label>
                                        <textarea cols="30" rows="4"
                                            class="form-control form__default shadow__xs"></textarea>
                                    </div>
                                </div>

                            </div>


                            <div class="profile__btn">
                                <button type="submit" class="btn__small bg__secondary2 shadow__xs">save changes</button>
                            </div>
                            
                        </div>
                    </form>

                        <!-- <div class="profile__form pass">
                            <h1>change password</h1>
                            <div class="box-pass mb-4">
                                <label>old password</label>
                                <input type="text" class="form-control form__default shadow__xs">
                            </div>
                            <div class="box-pass mb-4">
                                <label>new password</label>
                                <input type="text" class="form-control form__default shadow__xs">
                            </div>
                            <div class="box-pass mb-4">
                                <label>confirm new password</label>
                                <input type="email" class="form-control form__default shadow__xs">
                            </div>
                            <button type="submit" class="btn__small bg__secondary2 shadow__xs">update password</button>
                        </div> -->
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