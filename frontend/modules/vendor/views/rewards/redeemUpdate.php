<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\ListView;
use kartik\date\DatePicker;




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
                
                
                <div class="col-md-10 col-sm-10 b-tabs-vertical ui-tabs ui-tabs-panel">
              <div role="tabpanel" class="tab-pane" id="">
                <div class="clearfix"></div>
                <div class="b-tabs-vertical__content-text" style="margin-top:1.5em;">
                  <h3 class="f-tabs-vertical__title f-primary-b">Redeem Update</h3>
                  <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		?>      
		<div>Available Rewards</div><div>:</div><div><?= $model->availableRewards;?></div>
                  <div class="col-md-12">
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputEmail">Customer Id</label>
                          <?= $form->field($model, 'uId')->textInput(array('placeholder' => 'Customer Id'))->label(false);  ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputPassword">Receipt No</label>
                          <?= $form->field($model, 'receiptNumber')->textInput(array('placeholder' => 'Receipt Number'))->label(false);  ?>
                        </div>
                      </div>
                    
                    
                    
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-group">
                                <label> Receipt Date </label>
                                <div class="input-group date" id="datetimepicker8">
                                  <?= $form->field($model, 'purchaseDate')->widget(DatePicker::classname(),
														[
														'options' => ['placeholder' => 'Receipt Date ...'],
														'name'  => 'from_date',
														'value' => $model->purchaseDate,
														'pluginOptions' => [
																'autoclose'=>true,
																'format' => 'yyyy-m-d',
																'todayHighlight' => true
														]
												])->label(false);
												
												
												?>
                                  <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
                              </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputPassword">Redeem Rewards</label>
                          <?= $form->field($model, 'redeemRewards')->textInput(array('placeholder' => 'Redeem Rewards'))->label(false);  ?>
                        </div>
                      </div>
                    
                    
                    
                    <div class="col-md-6" style="margin-top:1em">
                   
    <div class="form-group">
      <label for="comment">Comment:</label>
      <?= $form->field($model, 'comment')->textArea(array('placeholder' => 'Comment'))->label(false);  ?>
      <p style="float:right; font-size:12px; color:#ccc;">max 1000 characters</p>
    </div>
 
                   </div>
                    
                    
                    
                   </div>
                   
                   
                   
                   
                   <div class="clearfix"></div>
                   
                   
                   
                   <div class="clearfix"></div>
                   
                   
                   <div class="col-md-12 text-center" style="margin-top:1em; margin-bottom:2em;">
                  <?= Html::submitButton('UPDATE', ['class' => 'btn btn-primary'])?>
                   </div>
                   
                </div>
              </div>
            </div>
                <div class="clearfix"></div>
                <?php ActiveForm ::end();?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    
   
    
        
  </div>
 
   <div class="clearfix"></div>






   
     
       
 
    

                    