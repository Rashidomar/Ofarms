<?php
require_once "../includes/farmer.php";

require_once "../includes/sessions.php";

$session = new Session();

$farmer = new Farmer();

$messages = array();

if(isset($_POST["submit"])){


	$username = $_POST["username"];
    $password = $_POST["password"];
    
    echo $username;

    $result = $farmer->farmer_authenticate($username,$password);
    
     var_dump($result);

     if($result){

        $Id = "";

        while ($row = $result->fetch_assoc()) {

            $Id = $row['Id'];

        } 

        $session_values = $session->create_session($Id, $username);

        if($session_values['id'] && $session_values['username']){
            
            header("location: farmshop.php");

            $messages[] = "Successful Logged In ";
    
        }
    }else{

        $messages[] = "Wrong Username and password";
    }

	// echo "<script>alert('hello, world')</script>";

}

require_once "layout/header.php";


?>
<style>
            .abc-cccc {
                
                padding: 8px;
            }
            .well {
                
                padding: 40px;
            }
            
</style>
        <div class="container">
           <div class="login-form">
            <form method="POST">
                    <h2 class="text-center"><span class="glyphicon glyphicon-shopping-cart"></span> Farm Shop Login</h2>  
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username" >             
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password" >             
                    </div>
                </div>        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary login-btn btn-block" name="submit" >Sign in</button>
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    
                </div>
                <div class="or-seperator"><i>or</i></div>
                
            </form>
            <p class="text-center text-muted small">Don't have an account? <a href="farmerRegister.php">Sign up here!</a></p>
        </div>
        </div>

        <style type="text/css">
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
        </style>
</div>

<?php
require_once "layout/footer.php";
?>
