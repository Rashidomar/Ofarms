<?php
require_once "../includes/shop.php";

$shop = new Shop();

$messages = array();

if(isset($_POST['submit'])){

	$nic = $_POST['nic'];
	$fn = $_POST['fn'];       
	$ln = $_POST['ln'];
	$pn = $_POST['pn'];       
	$address = $_POST['address'];
	$email = $_POST['email'];
	$un = $_POST['un'];
	$pw = $_POST['pw'];

	$result = $shop->shop_register($nic,$fn,$ln,$pn,$address,$email,$un,$pw);

	if($result){

		$messages[] = "success";
	}else{

		$messages[] = "Failed!";
	}
}

require_once "../includes/layout/header.php";
?>

<div ng-controller="AddshopDetails">
	<div class="container container-fluid">
	  <div class="well">
	  <div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4 col-lg-8"> 
		<div> 
			<a href="admin.php"><button class="btn btn-default">Back</button></a>
		</div>
		<center><h2><b>New Shop Registration</b></h2></center>
		<hr>  
	
		<form method="POST"> 
		<div class="form-group row flex-v-center">
			<div class="col-xs-2 col-sm-4">
				<label for="from">Nic Number</label>
			</div>
			<div class="col-xs-6">
			<!-- <label>First Name</label> -->
				<p class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
					<input type="text" class="form-control" name="nic" placeholder="Nic Number(95336555v)">             
				</p>
			</div>
		</div>
	
		<div class="form-group row flex-v-center">
			<div class="col-xs-2 col-sm-4">
				<label for="from">First Name</label>
			</div>
			<div class="col-xs-6">
			<p class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
				<input type="text" class="form-control" name="fn" placeholder="First Name">             
			</p>
			</div>
		</div>
	
		<div class="form-group row flex-v-center">
			<div class="col-xs-2 col-sm-4">
				<label for="from">Last Name</label>
			</div>
			<div class="col-xs-6">
			<p class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
				<input type="text" class="form-control"
				name="ln" placeholder="Last Name">             
			</p>
			</div>
		</div>
	
		<div class="form-group row flex-v-center">
			<div class="col-xs-2 col-sm-4">
				<label for="from">Phone Number</label>
			</div>
			<div class="col-xs-6">
			<p class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				<input type="text" class="form-control" name="pn" placeholder="Number">             
			</p>
			</div>
		</div>
	
	
		<div class="form-group row flex-v-center">
			<div class="col-xs-2 col-sm-4">
				<label for="from">Address</label>
			</div>
			<div class="col-xs-6">
			<p class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
					<input type="textarea" class="form-control" 
					name="address" placeholder="Address" >             
				</p>
			</div> 
		</div>
	
		<div class="form-group row flex-v-center">
			<div class="col-xs-2 col-sm-4">
				<label for="from">Office Email </label>
			</div>
			<div class="col-xs-6">
			<p class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input type="email" class="form-control"
					name="email" placeholder="Office Email" >            
				</p>
			</div> 
		</div>
	

		<div class="form-group row flex-v-center">
			<div class="col-xs-2 col-sm-4">
				<label for="from">User(shop) Name</label>
			</div>
			<div class="col-xs-6">
			<p class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
					<input type="text" class="form-control"
					name="un" placeholder="User Name" >             
				</p>
			</div> 
		</div>	

		<div class="form-group row flex-v-center">
			<div class="col-xs-2 col-sm-4">
				<label for="from">Password</label>
			</div>
			<div class="col-xs-6">
			<p class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
					<input type="password" class="form-control"
					name="pw" placeholder="Password">             
				</p>
			</div> 
		</div>
		
		

		<div class="form-group">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
			<button type="submit" name="submit" class="btn btn-warning login-btn btn-block">Create Shop 
			<span class="glyphicon glyphicon-send"></span></button>
			</div><div class="col-sm-4"><input type="reset" class="btn btn-danger" value="clear"></div>
		</div>
		</div> 
		</form>
	</div>
	</div>
	</div>
</div>

<?php
require_once "../includes/layout/footer.php";
?>
