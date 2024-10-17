<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Hotel Management System</title>
  <link href="assets/login-css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/login-css/font-awesome.min.css" rel="stylesheet">


  <?php include('./header.php'); ?>
  <?php include('./db_connect.php'); ?>
  <?php
  session_start();
  if (isset($_SESSION['login_id']))
    header("location:index.php?page=home");

  $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
  foreach ($query as $key => $value) {
    if (!is_numeric($key))
      $_SESSION['setting_' . $key] = $value;
  }
  ?>

</head>
<!-- <link href="assets/login-css/bootstrap.min.css" rel="stylesheet"> -->
<link href="assets/login-css/font-awesome.min.css" rel="stylesheet">
<title>hotel menegment</title>
<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700);
  @import url(https://fonts.googleapis.com/css?family=Arimo:300,400,400italic,700,700italic);

  * {
    margin: 0px;
    padding: 0px;
    list-style: none;
    box-sizing: border-box;
  }

  body {
    width: 100%;
    height: calc(100%);
    background: #007bff;
  }

  body,
  html {
    height: 100%;
  }



  .bg-image {
    /* The image used */
    background: url(../assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    z-index: 2;
    overflow: hidden;
    /* background-image: url("../assets/images/<?php echo $_SESSION['setting_cover_img'] ?>"); */

    /* Add the blur effect */
    filter: blur(10px);
    -webkit-filter: blur(2px);

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /* Position text in the middle of the page/image */
  .container {
    box-sizing: border-box;
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.5);
    /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    border: 3px solid #f1f1f1;
    border-radius: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 25%;
    height: auto;
    padding: 20px;
    text-align: center;
  }




  img {
    max-width: 100%;
  }

  a {
    text-decoration: none;
    outline: none;
    color: #444;
  }

  a:hover {
    color: #444;
  }

  ul {
    margin-bottom: 0;
    padding-left: 0;
  }

  ol,
  ul {
    margin: 0px;
    padding: 0px;
  }

  a:hover,
  a:focus,
  input,
  textarea {
    text-decoration: none;
    outline: none;
  }

  /* .form-02-main{
 
} */

  ._lk_de {

    background-repeat: no-repeat;
    background-size: cover;
    padding: 40px 0px;
    position: relative;

  }

  .form-03-main {
    width: 500px;
    display: block;
    margin: 20px auto;
    padding: 25px 50px 25px;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 6px;
    z-index: 9;
  }

  .logo {
    display: block;
    margin: 20px auto;
    width: 100px;
    height: 100px;
  }

  .form-group {
    padding: 20px 0px;
    display: inline-block;
    width: 100%;
    position: relative;
  }

  .form-group p {
    margin: 0px;
  }

  .form-control {
    min-height: 45px;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 10px 15px;
    border-radius: 20px;
    border: 1px solid#2b3990;
  }

  .checkbox {
    display: flex;
    justify-content: space-around;
  }

  ._btn_04 {
    display: inline-block;
    width: 100%;
    padding: 12px 0px;
    background: #2b3990;
    border-radius: 20px;
    text-align: center;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
  }

  ._btn_04:hover {
    background-color: green;
    transform: scale(1.05);
  }

  ._btn_04 a {
    font-size: 15px;
    color: #fff;
  }

  ._social_04 {
    display: block;
    width: 100%;
    padding: 15px 0px;
    text-align: center;
  }

  ._social_04 ol li {
    display: inline-block;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    transition: 0.2s;
    background: #fff;
    border-radius: 50px;
    border: 1px solid#2b3990;
    margin: 0 0 0 10px;
    transition: 0.2s;
  }

  ._social_04 ol li:nth-child(1):hover {
    background: #3b5998;
    border: 1px solid#3b5998;
    color: #fff;
    transition: 0.2s;
  }

  ._social_04 ol li:nth-child(2):hover {
    background: #00aced;
    border: 1px solid#00aced;
    color: #fff;
    transition: 0.2s;
  }

  ._social_04 ol li:nth-child(3):hover {
    background: #c32f10;
    border: 1px solid#c32f10;
    color: #fff;
    transition: 0.2s;
  }

  ._social_04 ol li:nth-child(4):hover {
    background: #E1306C;
    border: 1px solid#E1306C;
    color: #fff;
    transition: 0.2s;
  }

  ._social_04 ol li:nth-child(5):hover {
    background: #0177b5;
    border: 1px solid#0177b5;
    color: #fff;
    transition: 0.2s;
  }

  ._social_04 ol li:hover,
  ._social_04 ol li:hover i {
    color: #fff;
  }

  ._social_04 ol li i:nth-child(1):hover {
    color: #fff;
  }

  ._social_04 ol li i {
    font-size: 15px;
    color: #2b3990;
  }

  .nm_lk {
    text-align: center;
  }

  @media screen and (max-width: 600px) {
    .form-03-main {
      width: 100%;
    }
  }
</style>

<body>
  <div class="bg-image"></div>
  <main id="main" class=" alert-info">
    <form class="container" id="login-form">
      <div class="row">
        <div class="col-md-12">
          <div class="_lk_de">
            <div class="logo">
              <img src="assets/img/user.png">
            </div>
          </div>
        </div>
      </div>
      <div>
        <p style="font-size: 22px;">Admin</p>
      </div>
      <div class="form-group">
        <input type="text" for="username" id="username" name="username" class="form-control _ge_de_ol" placeholder="Enter Username" required="" aria-required="true">
      </div>

      <div class="form-group">
        <input type="password" for="password" id="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
      </div>
      <div class="form-group">
        <button class="_btn_04" type="submit">Login</button>
      </div>
      </div>
      </div>
      </div>
    </form>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
  $('#login-form').submit(function(e) {
    e.preventDefault()
    $('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
    if ($(this).find('.alert-danger').length > 0)
      $(this).find('.alert-danger').remove();
    $.ajax({
      url: 'ajax.php?action=login',
      method: 'POST',
      data: $(this).serialize(),
      error: err => {
        console.log(err)
        $('#login-form button[type="button"]').removeAttr('disabled').html('Login');

      },
      success: function(resp) {
        if (resp == 1) {
          location.href = 'index.php?page=home';
        } else if (resp == 2) {
          location.href = 'voting.php';
        } else {
          $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
          $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
        }
      }
    })
  })
</script>

</html>