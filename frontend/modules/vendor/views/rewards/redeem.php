<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\ListView;




$this->title = 'Rewards';
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- Yii::$app->getSession()->setFlash('info', 'hello'); -->
<!-- return $this->redirect(array('site/index')); -->


 <div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px;">
    <div class="sign">
     <h2><?= Html::encode($this->title) ?></h2>  
    </div>
    
    <div class="row">
        <div class="user_profile">
          <div class="col-sm-2 col-md-2" style="padding:0px;">
            <div id="cssmenu">
<ul>
   <li class="active"><a href="vendor-profile.html"><span>Vendor Profile</span></a></li>
   <li class="has-sub"><a href="vendor-package-options.html"><span>Package Options</span></a></li>
   <li class="has-sub"><a href="#"><span>Products upload  <i class="fa fa-chevron-down"></i></span> </a>
      <ul>
         <li><a href="vendor-upload-products.html"><span>Upload Products</span></a></li>
         <li><a href="vendor-add-sale-item.html"><span>Add Sale Item</span></a></li>
         <li><a href="vendor-update-items.html"><span>Update Items</span></a></li>
         <li class=""><a href="vendor-delete-items.html"><span>Delete Items</span></a></li>
      </ul>
   </li>
   <li class="has-sub"><a href="#"><span>Manage rewards <i class="fa fa-chevron-down"></i></span></a>
   <ul>
         <li><a href="vendor-display-rewards.html"><span>Display Rewards</span></a></li>
         <li><a href="vendor-confirm-rewards.html"><span>Confirm Rewards</span></a></li>
        
      </ul>
   </li>
   <li><a href="vendor-manage-reviews.html"><span>Manage reviews</span></a></li>
   <li><a href="vendor-manage-reserve-items.html"><span>Manage reserve Items</span></a></li>
   <li><a href="vendor-inventory-reports.html"><span>Inventory Reports</span></a></li>
   <li><a href="vendor-customer-dynamics.html"><span>Customer Dynamics</span></a></li>
   <li><a href="vendor-support.html"><span>Support</span></a></li>
   <li class="has-sub"><a href="#"><span>Misc <i class="fa fa-chevron-down"></i></span></a>
   <ul>
   <li> <a href="vendor-sign-up-bundle-request.html"><span>Sign up bundle request</span></a></li>
    <li> <a href="vendor-tutorial.html"><span>Tutorial</span></a></li>
   </ul>
   </li>
</ul>
</div>
          </div>
          <div class="b-tabs-vertical ui-tabs ui-tabs-panel">
            <div class="col-md-10 col-sm-10 b-tabs-vertical ui-tabs ui-tabs-panel">
              <div role="tabpanel" class="tab-pane" id="">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Confirm rewards</h3>
                  <div class="col-md-4">
                    <div class="radio_buttons">
                      <form role="form">
                        <label class="radio-inline">
                          <input type="radio" name="optradio">
                          Customer Id </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">
                          All </label>
                      </form>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-7" style="margin-top:1em;">
                    <form class="form-inline">
                      <div class="form-group">
                        <label for="usr">Customer Id</label>
                        <input type="email" class="form-control" id="usr" placeholder="">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  
                  <div class="display_rewards_table">
                  <table class="table table-bordered">
                    <thead>
                      <tr style="background:#f5f5f5;">
                        <th><b>Customer Id</b></th>
                        <th><b>Rewards</b></th>
                        <th><b>Redeem</b></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
echo ListView::widget( [
		'dataProvider' => $dataProvider,
		'itemView' => '_redeemListview',
] );
?>  
                      
                     
                      
                    </tbody>
                  </table>
                  </div>
                </div>
                <div class="clearfix"></div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    
   
    
        
  </div>
 
   <div class="clearfix"></div>






   
     
       
 
    

                    