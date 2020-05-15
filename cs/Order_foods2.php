<?php
require_once "../includes/sessions.php";

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

<body >
<div class="container container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Home.html">DARKO FARM</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="course.php">COURSES</a></li>
                    <li><a href="Order_foods.php">PRICING</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <ul class="nav navbar-nav navbar-right">
                        <!--li><a href="Registration.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li-->
                        <li><div class="dropdown">
                                <a><button class="dropbtn"><span class="glyphicon glyphicon-log-in"></span> Sign in | Sign up</button></a>
                                <div class="dropdown-content">
                                    <div ng-controller="loginbuttonctrl">
                                        <a  href="LoginSh.php" >Registered Shop</a>
                                        <a href="LoginFa.php">Registered Farmer</a>
                                        <a href="LoginSt.php" >Student</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--li><a href="FarmShopLoginForm.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li-->
                    </ul>
                </ul>
            </div>
        </div>

    </nav>

    <div id="myCarousel" class="carousel slide" data-interval="6000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner" role="listbox" style=" width:100%; height:250px !important;">
            <div class="item active">
                <img src="img/y.jpg" alt="First Slide" width="100%">
                <div class="carousel-caption">
                    <h3>Vegetables and Fruits</h3>
                    <p>There are fresh vegetables and fruits</p>
                </div>
            </div>
            <div class="item">
                <img src="img/z.jpg" alt="Second Slide" width="100%" >
                <div class="carousel-caption">
                    <h3>Clean Milk Products</h3>
                    <p>Fresh Milk Products with good condition</p>
                </div>
            </div>
            <div class="item">
                <img src="img/zz.jpg" alt="Third Slide" width="100%">
                <div class="carousel-caption">
                    <h3>Farm House</h3>
                    <p>Vegetables , fruits & beans from farm house</p>
                </div>
            </div>
        </div>


        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <br/>
    <a href="Home.php"><button class="btn btn-default">Back</button></a>

    <div class="row">

        <?php

        $mysqli = new mysqli("localhost", "root", '', "fmsmy");
        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $query = "SELECT * FROM items INNER JOIN tbl_images ON items.Image=tbl_images.id";

        if ($result = $mysqli->query($query)) {

            while($row = $result->fetch_array()){
                echo "
    <div class='col-md-4'>
        <div class='alert alert-success'>
        <div class='thumbnail'>
            <img src='../../module/Items/upload/$row[name]' style='width:100%'>
            <div class='caption'>
            <p>
            <li><b>Code :</b> $row[Code]</li>
            <li><b>Name :</b> $row[Name]</li>
            <li><b>Price :</b> $row[Price]</li>
            <li><b>Quantity :</b> $row[Amount]</li>
            <li><b>Unit :</b> $row[Unit]</li>
            <li><b>Discount :</b> $row[Discount]</li>
            <li><b>Type :</b> $row[Type]</li> 
            </p>
            <a href='shoppingcart_registration.php?Iname=$row[Name]&Icode=$row[Code]'>
            <button class='btn btn-success btn-sq-lg'>Add to cart here!</button></a>
            

            </div>
        </a>
        </div>
        </div>
    </div>";

            }

        }
        ?>
    </div>





    <?php
    // Create connection

    $mysqli = new mysqli("localhost", "root", '', "fmsmy");
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $query = "SELECT * FROM items INNER JOIN tbl_images ON items.Image=tbl_images.id";

    if ($result = $mysqli->query($query)) {

        /* fetch associative array */

        // while ($row = $result->fetch_array()) {
        //     //echo $row['name'];
        //     echo "<div class='well'>";
        //     $a="<img src='../../module/Items/upload/$row[name]'/>";
        //     echo "<ul class='list-unstyled'>";

        //     echo "

        //           <div class='row'><div class='col-sm-4'>$a</div>
        //           <div class='col-sm-8'>
        //           <form action='shoppingcart_registration.php.php' method='get'>
        //           <li>$row[Code]</li>
        //           <li>$row[Name]</li>
        //           <li>$row[Price]</li>
        //           <li>$row[Amount]</li>
        //           <li>$row[Unit]</li>
        //           <li>$row[Discount]</li>
        //           <li>$row[Type]</li>
        //           <br/>
        //           </form>
        //            <a href='shoppingcart_registration.php?Iname=$row[Name]&Icode=$row[Code]'>Add to cart here!</a></div>";

        //     echo("</div>");
        // }
        // "</ul>";
        /* free result set */
        $result->free();
    }

    /* close connection */
    $mysqli->close();
    ?>
</div>

</div>
<?php 
    require_once "layout/footer.php";
?>
