<?php
ob_start();
session_start();
include "db.php";
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Login</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-image:url('assets/img/4kan.jpg');">
  <div class="container">
    <form name="form" method="post" style="margin-top:100px;">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-info" style="border-radius:10px">
            <div class="panel-heading text-center" style="border-radius:10px 10px 0px 0px;">
              <strong>Perpustakaan Ceria</strong>
            </div>
            <div class="panel-body bg-black" style="padding-top:40px; border-radius:0px 0px 10px 10px;">
              <p class="text-center">Silahkan Masukkan Username dan Password</p>
              <div style="padding:5px 125px 70px 125px">
                <form role="form" method="POST">

                  <fieldset>
                    <div class="form-group">
                      <input class="form-control" placeholder="Username Anda" name="username" type="text">
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Password Anda" name="password" type="password">
                    </div>
                 <!--  <div class="checkbox">
                    <label>
                      <input name="remember" type="checkbox"> Save Password
                    </label>
                  </div> -->
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <button class="btn btn-info btn-lg btn-block" name="login" type="submit">Login</button>
                      
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<?php 
if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];



  $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'")or die(mysqli_error($koneksi));

  $result = mysqli_num_rows($query);
  if ($result==1){
    $data_yang_login = $query->fetch_assoc();
    $_SESSION['login_user'] = $data_yang_login;
    header("location:index.php?page=dashbord");
  }else{
    header("login.php");
  }

}

?>




