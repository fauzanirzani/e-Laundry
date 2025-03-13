<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
</head>

<body>

    <!-- <div class="limiter">
        <div class="container-login100" style="background-image: url('assets/login/images/bg.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Aplikasi Laundry
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" action="cek_login.php" method="post">
                    <?php if (isset($_GET['message'])) : ?>
                        <div class="row justify-content-center">
                            <small class="alert alert-danger" role="alert">
                                <?= $_GET['message']; ?>
                            </small>
                        </div>
                    <?php endif ?>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div> -->


<div class="container-login" style="background-image: url('assets/login/images/bg.jpg');">
<div class="demo-container">
  <div class="container">
    <div class="row">
        
      <div class="col-lg-5 col-12 mx-auto" >
        <div class="text-center image-size-small position-relative">
        <img src="https://annedece.sirv.com/Images/user-vector.jpg" class="rounded-circle p-2 bg-white">
        <div class="icon-camera">
        <a href="" class="text-primary"><i class="lni lni-camera"></i></a>
        </div>
        </div>
        <div class="p-5 bg-white rounded shadow-lg">
          <h3 class="mb-2 text-center pt-5">Sign In</h3>
          <p class="text-center lead">Sign In Untuk Akses</p>
          <form action="cek_login.php" method="post">
          
            <label class="font-500">Username</label>
            <input  class="form-control form-control-lg mb-3" type="text" name="username" placeholder="Username...">
             <label class="font-500">Password</label>
            <input  class="form-control form-control-lg" type="password" name="password" placeholder="Password...">
            <p class="m-0 py-4"><a href="" class="text-muted">Forget password?</a></p>
            <button class="btn btn-primary btn-lg w-100 shadow-lg" type="submit">SIGN IN</button>
          </form>
         <div class="text-center pt-4">
          <p class="m-0">Belum punya akun? <a href="register.php" class="text-dark font-weight-bold">Sign Up</a></p>
        </div>          
        </div>        
      </div>
    </div>
  </div>
</div>
</div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/login/vendor/animsition/js/animsition.min.js"> </script>
    <script src="assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="assets/login/js/main.js"></script>

</body>

</html>