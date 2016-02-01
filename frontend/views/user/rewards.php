<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\view;
use kartik\file\FileInput;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */


        
  
      

?>
<div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px; min-height:500px;">
  <div class="sign" >
    <h2 style="color:#434a54; border-bottom:3px #8cc251 solid; ">USER PROFILE</h2>
  </div>
  <div class="user_profile">
    <div class="col-sm-8" style="padding-top:0px; padding-left:0px; padding-right:0px;">
      <div class="l-inner-page-container">
        <div class="b-shortcode-example b-remaining">
          <div  data-active="1" class="b-tabs-vertical b-tabs-vertical--default f-tabs-vertical j-tabs-vertical b-tabs-reset row">
            <div class="col-md-3 col-sm-4 b-tabs-vertical__nav">
              <ul>
                <li><a class="f-primary-l" href="#tabs-1"><i class="fa fa-user"  ></i> My Profile</a></li>
                <li><a class="f-primary-l" href="#tabs-2"><i class="fa fa-gift"  ></i>My Rewards</a></li>
                <li><a class="f-primary-l" href="#tabs-3"><i class="fa fa-list"  ></i> My List</a></li>
                <li><a class="f-primary-l" href="#tabs-4"><i class="fa fa-tags"  ></i> My Store Offers</a></li>
              </ul>
            </div>
            
         
              <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		?>      
            
            <div class="col-md-9 col-sm-8 b-tabs-vertical__content">
              <div id="tabs-1">
              
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b" style="padding-left:13px;">Update Your Profile</h3>
                  
                  
   
            
            
            
            
                  <div class=" form-group col-sm-5 btnWithTooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true"  placeholder="First Name">
               
                    <?= $form->field($model, 'storeId')->textInput(['placeholder' => 'Store Name','value' => $model->storeId])->label(false);  ?>
           
			 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" ></i> <span style="float: right;font-size: 10px; font-family:Arial; color:#CCC;">charcters length 25</span> 
            </div>
            
            
            
            
            
             
            
            
            
            
             <div class="form-group col-sm-5 btnWithTooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true"  placeholder=" Middle Name">
             
            
             
             
             <?= $form->field($model, 'purchaseDate')->widget(DatePicker::classname(),
														[
														'options' => ['placeholder' => 'Purchase date ...'],
														'name'  => 'from_date',
														'value' => $model->purchaseDate,
														'pluginOptions' => [
																'autoclose'=>true,
																'format' => 'yyyy-m-d',
																'todayHighlight' => true
														]
												])->label(false);
												
												
												?>
            
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true" ></i>
                    <span style="float: right;font-size: 10px; font-family:font-family: Arial; color:#CCC;">charcters length 25</span> 
                    </div>
                    
                    
                    
                  <div class=" form-group col-sm-5 btnWithTooltip" data-placement="bottom" 
            data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
            data-html="true"   placeholder="Last Name">
                   
            
            <?= $form->field($model, 'receiptNumber')->textInput(array('placeholder' => 'Receipt Number'))->label(false);  ?>
                    <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i> <span style="float: right;font-size: 10px; font-family:font-family: Arial; color:#CCC;">charcters length 25</span> 
            </div>
            
            
            
                 
                  <div class="gender">
                   
                    <div class=" form-group col-sm-5" id = "optionsRadios3" checked>
                        <span style="color:#999; font-family:Calibri, Arial">
                  
                   
                   
                   		<?= $form->field($model, 'receiptAmount')->textInput(array('placeholder' => 'Receipt Amount'))->label(false);  ?>
    
                    
                    
                    
                    </div>
                  </div>
                  
                  
                  
                  
                  
                  
                  
                     
                  
                 
               
               
                  
                  
                
                
                </div>
              </div>
              
              <div class="update_button">
                <div class="reg-bwn1">
                
               
                
                <?= Html::submitButton('UPDATE', ['class' => 'btn btn-primary'])?>
                </div>
              </div>
            </div>
            		<?php ActiveForm ::end();?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 pull-right">
      <div class="convert">
        <div class="convert_img"><img src="../images/convert.png" class="img-responsive" /></div>
        <p>Do you own grocery store in North America <span style="color:#8cc251">(USA & Canada)</span>?</p>
        <p>Convert as Vendor and grow your business with grocer deals.</p>
        <div class="convert_button">
          <div class="reg-bwn2">  </div>
         
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>

<div class="locator"> <a href="#" class=""></a> </div>


<script>$(document).ready(function(){
$(function ()
{
//  $('#datetimepicker1').datetimepicker();
});
</script>
</body>
</html>
<!--end slider -->
<script>$(function() {
    $(".btnWithTooltip").tooltip();
});
</script>
<style>
.tooltip-inner {
	width: 200px;
	background: #000;
	font-family:Calibri, Arial;
	font-size:1em;}
div.form-group {
	position: relative;
}
div.form-group input  i.fa {
	position: absolute;
	right: -5px;
	bottom: 25px;
	font-size: 1em;
	left:0px !important;
	
	
}
.Qty-symbol-tooltip
{ 
   position: absolute;
	bottom: 41px;
	font-size: 1em;
	left:220px;

}
</style>
</head>

