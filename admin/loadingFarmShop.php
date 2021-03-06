<?php
require_once "../includes/shop.php";

$shop = new Shop();

 if(isset($_POST['submit'])){

  //$shopname = $_POST['shopname'];
  $itemcode = $_POST['itemcode'];       
  $amount = $_POST['amount'];
  
  $result = $shop->load_farm_shop($itemcode,$amount);

 }
require_once "../includes/layout/header.php";
?> 

<div class ="container container-fluid">
<div><a href="admin.php" > 
    <button class="btn btn-default"">Back</button></a>
</div>
<div class="container container-fluid"><h2><b> Load Items To The Farm Shop 
  <span class="glyphicon glyphicon-shopping-cart"> </span></b></h2>

</div>
<div ng-controller="AddItemDetails" ng-init="load()">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<form class="navbar-form" role="search">

<div class="input-group add-on">
<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
<span class="input-group-btn">
    <button class="btn btn-default" type="button">
      <i class="fa fa-search"></i>
    </button>
</span>
</div>
</form>
</div></div>

<div class="row"><center><h3><b>Vegetables</b></h3></center></div>
<div class="col-md-2" ng-repeat="image in images">  
  <img  ng-hide="showme" ng-src="../module/Items/upload/{{image.name}}" width="150" height="150" style="padding:5px; border:1px solid #f1f1f1; margin:16px;" />
  <div ng-hide="showme" class ="row well" > 
    Code :{{image.Code}}
    <br>
    Name :{{image.Name}}
    <br>
    Amount :{{image.Amount}}{{image.Unit}} 
    <br>
    Price : Rs {{image.Price}}
    <br>
    <button class="btn btn-warning btn-xs" ng-click="setDataPopUpWindFarmShop(image.Code)">ADD</button> </div>
<div>
    <!--pop up windows -->
<div ng-show="showme">
    <div class="form-popup "   id="myForm" >
    <form  class="form-container" method="POST">
      <h2>Add Items.. </h2>

      <label for="" class="mr-sm-2"><b>Farm Shop:</b></label>
      <input type="text" class="form-control mb-2 mr-sm-2"  name="shopname">

              <label for="" class="mr-sm-2"><b>Item code :</b></label>
              <input type="text" class="form-control mb-2 mr-sm-2"  name="itemcode" >

              <label for="psw"><b>Amount :</b></label>
              <input type="text" class="form-control mb-2 mr-sm-2" placeholder="eg-: 20Kg" name="amount" >

              <button type="submit" class="btn btn-success btn-xs" type="submit" name="submit" >Add </button>
          </form>
      </div>  
      <button type="button" class="btn btn-warning btn-xs"  ng-click="showme=false ; refreshpage()">Close</button>  
</div>

</div>

<br />
</div>

<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <form class="navbar-form" role="search">
    
    <div class="input-group add-on">
    <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
    <span class="input-group-btn">
        <button class="btn btn-default" type="button">
          <i class="fa fa-search"></i>
        </button>
    </span>
    </div>
    </form>
    </div>
</div>

<div class ="row ">
<center><h3><b>Fruits</b></h3></center></div> 
<div class="col-md-2" ng-repeat="image in imagesFruit">  
  <img ng-hide="showme" ng-src="module/Items/upload/{{image.name}}" width="150" height="150" style="padding:5px; border:1px solid #f1f1f1; margin:16px;" />
    <div ng-hide="showme" class ="row well" > 
      Code :{{image.Code}}
      <br>
      Name :{{image.Name}}
      <br>
      Amount :{{image.Amount}}{{image.Unit}} 
      <br> 
      Price : Rs {{image.Price}}
      <br>
      <button class="btn btn-warning btn-xs" ng-click="showme=true ; setDataPopUpWindFarmShop(image.Code)">ADD</button>
  </div>

  <div>
        <!--pop up windows -->
      <div ng-show="showme">
        <div class="form-popup "   id="myForm" >
        <form  class="form-container" ng-controller="AddItemDetails">
          <h2>Add Items.. </h2>

          <label for="" class="mr-sm-2"><b>Farm Shop:</b></label>
          <input type="text" class="form-control mb-2 mr-sm-2"  name="shopname" required>

                  <label for="" class="mr-sm-2"><b>Item code :</b></label>
                  <input type="text" class="form-control mb-2 mr-sm-2"  name="itemcode" required>

                  <label for="psw"><b>Amount :</b></label>
                  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="eg-: 20Kg " name="amount" required>

                  <button type="submit" class="btn btn-success btn-xs" name="submit" >Add </button>
              </form>
          </div>  
          <button type="button" class="btn btn-warning btn-xs"  ng-click="showme=false ; refreshpage()">Close</button>
        
          
    </div>

    
</div>
</div>  
</div> 

</fieldset>
</form>

</div>  

<?php
require_once "../includes/layout/footer.php";
?>


