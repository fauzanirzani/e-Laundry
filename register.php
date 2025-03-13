<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
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
          <h3 class="mb-2 text-center pt-5">Sign UP</h3>
          <p class="text-center lead">Sign In Untuk Akses</p>
          <form action="cek_register.php" method="post">
            <label class="font-500">Nama Pengguna</label>
            <input  class="form-control form-control-lg mb-3" type="text" name="nama_user" placeholder="Username...">
            <label class="font-500">Username</label>
            <input  class="form-control form-control-lg mb-3" type="text" name="username" placeholder="Username...">
             <label class="font-500">Password</label>
            <input  class="form-control form-control-lg mb-3" type="password" name="password" placeholder="Password...">
            <label for="defaultSelect" class="font-500">Role</label>
                                <select name="role" class="form-control form-control mb-3" id="defaultSelect">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
            <div align="right">                        
            <a href="javascript:void(0)" onclick="window.history.back();" class="btn btn-danger">Batal</a>
            <button type="submit" name="btn-simpan" class="btn btn-success">SIGN UP</button>
            </div>
          </form>
                  
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