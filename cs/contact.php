<?php
$mysqli = new mysqli("localhost", "root", '', "fmsmy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];



$sql="INSERT INTO messages VALUES('$name','$email','$message') ";
mysqli_query($mysqli, $sql);
session_start();
$_SESSION['message']="System will reply soon";
// header("Location: contact1.php");
?>

<?php
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

</style>

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
<a href="index.php"><button class="btn btn-default">Back</button></a>
<div class="container-fluid bg" >
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <form class="text-center border border-light p-5" action="contact.php" method="POST">

        <h2>Contact us</h2>
            <!-- Name -->
            <input type="text" name="name" id="defaultContactFormName" 
            class="form-control mb-4" placeholder="Name" required>
            <!-- Email -->
        <input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" 
        placeholder="E-mail" required>

        <!-- Message -->
        <div class="form-group">
        <textarea name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" 
        rows="3" placeholder="Message" required></textarea>
        </div>

        <!-- Send button -->
        <button type="submit" class="btn btn-info btn-sq-lg btn-block" type="submit">
           <i class="fa fa-envelope fa-3x"></i><br/> Send</button>

    </form>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</div>
</div>
<!-- <footer> -->
<?php
require_once "../includes/layout/footer.php";
?>

<script type="text/javascript">
var a='<?php echo $_SESSION['message'];?>';
swal({
    text: 'Messaged Success !',
    footer: a
});
</script>
    