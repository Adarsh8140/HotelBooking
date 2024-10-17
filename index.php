<!DOCTYPE html>
<html lang="en">
<?php
session_start();


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
// if(!isset($_SESSION['login_id'])){
//   header('location: ../Login/login.php');
// }
include ('header.php');
include ('admin/db_connect.php');

$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
foreach ($query as $key => $value) {
  if (!is_numeric($key))
    $_SESSION['setting_' . $key] = $value;
}



?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js">  
<style>
  header.masthead {
    background: url(assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
    background-repeat: no-repeat;
    background-size: cover;
  }
  /* *{
        margin: 0;
        padding: 0;
box-sizing: border-box;
transition:all .2s linear;
    } */
/* 
.gallery
{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  width: 90%;
  margin: 0 auto;
} */
    

  /* footer---starts */
  footer {
    background: #343434;
    padding-top: 50px;
    margin-top: 80px;
  }

  .container_footer {
    width: 1140px;
    margin: auto;
    display: flex;
    justify-content: center;
    color: white;
  }

  .footer-content {
    width: 33.3%;
  }

  h3 {
    font-size: 28px;
    margin-bottom: 15px;
    text-align: center;
  }

  .footer-content p {
    width: 190px;
    margin: auto;
    padding: 7px;
  }

  .footer-content ul {
    text-align: center;
  }

  .list {
    padding: 0;
  }

  .list li {
    width: auto;
    text-align: center;
    list-style-type: none;
    padding: 7px;
    position: relative;
  }

  .list li::before {
    content: '';
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 100%;
    width: 0;
    height: 2px;
    background: white;
    transition-duration: .5s;
  }

  .list li:hover::before {
    width: 70px;
  }

  .social-icons {
    text-align: center;
    padding: 0;
  }

  .social-icons li {
    display: inline-block;
    text-align: center;
    padding: 5px;
  }

  .social-icons i {
    color: white;
    font-size: 50px;
  }

  a {
    text-decoration: none;
  }

  a:hover {
    color: white;
  }

  .social-icons i:hover {
    color: white;
  }

  .bottom-bar {
    background-color: #C29A3C;
    text-align: center;
    padding: 10px 0;
    margin-top: 50px;
  }

  .bottom-bar p {
    color: white;
    margin: 0;
    font-size: 16px;
    padding: 7px;
  }

  /* footer----ends */

</style>

<body id="page-top">
  <!-- Navigation-->
  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white">
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="./"><?php echo $_SESSION['setting_hotel_name'] ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=list">Rooms</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=contact">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <?php
  $page = isset($_GET['page']) ? $_GET['page'] : "home";
  include $page . '.php';
  ?>

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmation</h5>
        </div>
        <div class="modal-body">
          <div id="delete_content"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id='submit'
            onclick="$('#uni_modal form').submit()">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>




  <!-- Test-footeer -->
  <footer>
    <div class="container_footer ">
      <div class="footer-content">
        <h3>Contact Us</h3>
        <p>royalhotelInfo@example.com</p>
        <p>+91 91926 96969</p>
        <p>Sector 123 C.R Patil street,dindoli,Surat</p>
      </div>
      <div class="footer-content">
        <h3>Quick Links</h3>
        <ul class="list">
          <li class="text-white"><a href="index.php?page=home">Home</a></li>
          <li><a href="index.php?page=list">Rooms</a></li>
          <li><a href="index.php?page=about">About</a></li>
          <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-content">
        <h3>Follow Us</h3>
        <ul class="social-icons">
          <li><a class="btn btn-outline-light btn-floating m-1"
              href="https://www.facebook.com/vicky.indve.7?mibextid=ZbWKwL  " role="button"><i
                class="fab fa-facebook-f"></i></a></li>
          <!-- <li><a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/royalhotel/wikipedia" role="button"><i class="fab fa-google"></i></a></li> -->
          <li><a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/priyanshu_patel.__"
              role="button"><i class="fab fa-instagram"></i></a></li>
          <li><a class="btn btn-outline-light btn-floating m-1" href="https://www.twitter.com/hotel" role="button"><i
                class="fab fa-twitter"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="bottom-bar">
      <p>&copy; 2024 Royal Hotel . All rights reserved</p>
    </div>
  </footer>




  <?php include ('footer.php') ?>
</body>

<?php $conn->close() ?>

</html>