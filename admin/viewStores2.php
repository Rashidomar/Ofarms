<?php

require_once "../includes/store.php";

require_once "../includes/item.php";

$store = new Store();

$item = new Item();

require_once "../includes/layout/header.php";
?>

<h1>View stores ( Vegetable )</h1>

<div><a href="admin.php" > 
    <button class="btn btn-default"">Back</button></a>
</div>
    


<div class="container"  ng-controller="AddItemDetails" ng-init="load()">
  <div class ="alert alert-light">
  <a href="#" class="btn btn-primary">Vegetables</a>
  <a href="#" class="btn btn-primary">Fruits</a>
</div>
  
  <div class ="row">
    <div class="col-sm-6 bg-info text-white">
      <h2><center>Farm Products</center></h2>
       <div class="col-md-12" ng-repeat="image in images">
       <?php
				 $itemcode = "";
				 
				$result  = $item->select_vegetable();

				while ($row = $result->fetch_assoc()){
					$itemcode = $row['Code'];
					echo '	  
                     <div class="col-md-6">
                       <img ng-hide="showme" src="../module/Items/upload/'.$row['name'].'" width="150" height="150" style="padding:5px; border:1px solid #f1f1f1; margin:16px;" />
                      </div>
                      <div ng-hide="showme" class ="row well" >
                        Code : '.$row['Code'].'
						            <br>
						            Name : '.$row['Name'].'
						            <br>
                        <button class="btn btn-warning btn-xl" ng-click="showme=true ; setDataPopUpViewStoresFP(image.Code)">View .<span class="glyphicon glyphicon-eye-open"></span></button>
                     </div>
          					 ';
          }           
                  echo '        
                     <div>
                   
                            <!--pop up windows -->
                        <div ng-show="showme">
                            <div class="form-popup "   id="myForm" >
                                   '.$itemcode.'


                              <table class="table table-hover">  
                                <tr>  
                                     <th><b>Load Number</b></th>
                                     <th><b>Load Date</b></th>  
                                     <th><b>Amount</b></th> 
                                </tr>  
                               '; 
                           				$result = $store->view_stores($itemcode);

                           				while($row = $result->fetch_assoc()){
                             			echo '
			                           <tr ng-repeat="x in items ">
			                               <td>'.$row['$Load_Num'].'</td>
			                               <td>'.$row['$Load_Date'].'</td> 
			                               <td>'.$row['$Amount'].'</td>    
									                </tr>  
									                ';
										              }
								   	              ?> 	                              
                              </table>  
                              </div>  
                              <button type="button" class="btn btn-warning btn-xs"  ng-click="showme=false ; refreshpage()"><span class="glyphicon glyphicon-remove"></span></button>
                            
                        </div>
                        
                    </div>
                </div> 
    </div>
    <div class="col-sm-6 bg-success text-white"><h2><center>Reg Farmer's Products</center></h2>
       <div class="col-md-12" ng-repeat="image in images">
       <?php
          $name = '';

  				$result  = $item->select_vegetable();

  				while ($row = $result->fetch_assoc()){
                $name = $row['Name'];
			          echo '   
                     <div class="col-md-6">
                       <img ng-hide="showme" src="../module/Items/upload/'.$row['name'].'" width="150" height="150" style="padding:5px; border:1px solid #f1f1f1; margin:16px;" />
                      </div><div ng-hide="showme" class ="row well" >
                          Code :'.$row['Code'].'
							            <br>
							            Name :'.$row['Name'].'
							            <br>
                         <button class="btn btn-warning btn-xl" ng-click="showme=true ; setDataPopUpViewStoresRegFP(image.Code)">View .<span class="glyphicon glyphicon-eye-open"></span></button>
                     </div>
                     ';
                    }
          
                    echo '
                     <div>
                            <!--pop up windows -->
                        <div ng-show="showme">
                            <div class="form-popup "   id="myForm" >
                                   '.$itemcode.'


                             <div class="well"><center><b>'.$itemcode.' <span class="glyphicon glyphicon-hand-right"></span><t>'.$name.'</b></center></div>

                              <table class="table table-hover">  
                                    <tr>  
                                         <th><b>Load Number</b></th>
                                         <th><b>Load Date</b></th>  
                                         <th><b>Amount</b></th>
                                         <th><b>Bill</b></th> 
                                    </tr>  
                                     <tr ng-repeat="x in items ">
                                  ';
                           				    $result = $store->view_stores_reg($itemcode);

                           				    while($row = $result->fetch_assoc()){
                             			  echo '
			                              <tr ng-repeat="x in items ">
			                               <td>'.$row['$Load_Num'].'</td>
			                               <td>'.$row['$Load_Date'].'</td> 
										                 <td>'.$row['$Amount'].'</td> 
                                 <!--<td>{{x.Total}}</td> -->
                                      <td><button type="button" class="btn btn-default btn-sm">
                                        <span class="glyphicon glyphicon-download-alt"></span> <a href=" http://localhost/FmsFarmSide6/Farm-Management-System-IOT/module/Stores/printpdf.php?Load_Num={{x.Load_Num}}&Load_Date={{x.Load_Date}}&Amount={{x.Amount}}&Total={{x.Total}}&Name={{image.Name}}&Code={{itemcode}}">Download</a>
                                        </button>
                                      </td>                
                                    </tr>  
                                    ';
                                  }
                                   ?>                                   
                              </table>  
                              </div>  
                              <button type="button" class="btn btn-warning btn-xs"  ng-click="showme=false ; refreshpage()"><span class="glyphicon glyphicon-remove"></span></button>
                            
                        </div>
                        
                    </div>
                </div> 
    </div></div>
  </div>

<?php
  require_once "../includes/layout/footer.php";
?>