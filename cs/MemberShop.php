<?php
require_once "../includes/sessions.php";

$session = new Session();

if(isset($_GET["link"]))
{
   $link = $_GET["link"];

   if($link == "logout")
   {
      $result = $session->logout();
      if($result == false){
         header('Location: LoginSh.php');
      }
   }
}
require_once "../includes/layout/header.php";
?>
<style>
    body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
    }
    .navbar {
        margin-bottom: 0;
        background-color: #1b1818;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
    }
    .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #1b1818 !important;
        background-color: #fff !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
    }
    .dropbtn {
        background-color: #1b1818;
        color: #ffffff;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #1b1818;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #534d53;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #8a848a;}
    .carousel-inner img {

        width: 100%; /* Set width to 100% */
        height: 100%;
        margin: auto;
    }
    .container-fluid {
        padding: 60px 50px;
    }
    .bg-grey {
        background-color: #ffffff;
    }

    .logo {
        color: #51bf28;
        font-size: 200px;
    }
    h4 {
        font-size: 19px;
        line-height: 1.375em;
        color: #1b1818;
        font-weight: 400;
        margin-bottom: 30px;
    }
    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
    }
    .thumbnail img {
        width: 400px;
        height: 200px;
        margin-bottom: 10px;
    }
    footer {
        background-color: #1b1818;
        color: #ffffff;
        padding: 32px;
    }

    footer a {
        color: #ffffff;
    }

    footer a:hover {
        color: #777;
        text-decoration: none;
    }
    .login-form {
        width: 385px;
        margin: 30px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .login-btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .input-group-addon .fa {
        font-size: 18px;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
    .social-btn .btn {
        border: none;
        margin: 10px 3px 0;
        opacity: 1;
    }
    .social-btn .btn:hover {
        opacity: 0.9;
    }
    .social-btn .btn-primary {
        background: #507cc0;
    }
    .social-btn .btn-info {
        background: #64ccf1;
    }
    .social-btn .btn-danger {
        background: #df4930;
    }
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }

    .abc-cccc {

        padding: 8px;
    }
    .well {

        padding: 40px;
    }

    .btn-group button {
        background-color: #4CAF50; /* Green background */
        border: 1px solid green; /* Green border */
        color: white; /* White text */
        padding: 10px 24px; /* Some padding */
        cursor: pointer; /* Pointer/hand icon */
        width: 10%; /* Set a width if needed */
        display: block; /* Make the buttons appear below each other */
    }

    .btn-group button:not(:last-child) {
        border-bottom: none; /* Prevent double borders */
    }

    /* Add a background color on hover */
    .btn-group button:hover {
        background-color: #3e8e41;
    }
</style>
<body>
<div class="container container-fluid">
<!-- navbar -->
<?php
require_once "../includes/layout/navbar.php";
?>
<!-- SlideShoe -->
<?php
require_once "../includes/layout/slideshow.php";
?>
<br/>
<a href="LoginSh.php"><button class="btn btn-default">Back</button></a>
<hr>
<div class="col-sm-11"></div>
    <?php
    if($session->is_logged_in()) {
        echo '
        <div class="col-sm-1">
        <div class="dropdown">
          <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" 
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user fa-2x"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="Shop_accountInterface.php">MyAccount</a><br/>
            <a class="dropdown-item" href="MemberShop.php?link=logout">Logout</a>
          </div>
        </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
            <a href="AuctionHomeShop.php">
                <button class="btn btn-primary btn-block btn-sq-lg" >
                <i class="fa fa-balance-scale fa-5x"></i><br/>Auctions</button>
            </a></div>
            <div class="col-sm-4">
            <a href="shopingcart_review.php">
                <button class="btn btn-success btn-block btn-sq-lg">
                <i class="fa fa-shopping-cart fa-5x"></i><br/>Shopping cart details</button>
            </a></div>
        </div>
        ';
    }
    else {
        header('Location: LoginSh.php');
    }
?>
</div>
</div>

<?php 
    require_once "../includes/layout/footer.php";
?>

