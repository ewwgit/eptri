<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\view;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */

$this->title = 'Grocer deals | Sign Up';
//$this->params ['breadcrumbs'] [] = $this->title;

//echo "<pre>"; print_r($model);


?>
 <!-- start slider -->

 <!-- start slider -->

  <div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px;">
    <div class="sign">
      <h2>Vendor</h2>
    </div>
    <div class="col-sm-4">
    
            <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		?>  
      <div class="signup">
      
      <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true">
           <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'First Name','value' => $model->firstName])->label(false);  ?>
         
            
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true"></i>
        </div>
        
        <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true">
                     <?= $form->field($model, 'middleName')->textInput(['placeholder' => 'Middle Name','value' => $model->middleName])->label(false);  ?>
         
            
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i>
        </div>
        
        <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true">
            <?= $form->field($model, 'lastName')->textInput(['placeholder' => 'Last Name','value' => $model->lastName])->label(false);  ?>
         
            
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i>
        </div>
        <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true">
            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email','value' => $model->email])->label(false);  ?>
         
            
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i>
        </div>
        
         <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true">
            <?= $form->field($model, 'mobile')->textInput(['placeholder' => 'Mobile','value' => $model->mobile])->label(false);  ?>
         
            
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i>
        </div>
        
         <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true">
            <?= $form->field($model, 'mobile2')->textInput(['placeholder' => 'Alternate Contact Num','value' => $model->mobile2])->label(false);  ?>
          <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i>
        </div>
        
        <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" placeholder="username" required >
        	<?= $form->field($model, 'storeName')->textInput(array('placeholder' => 'storeName'))->label(false);  ?>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i>
        </div>
        
         <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" placeholder="username" required >
          <?= $form->field($model, 'storeAddress')->textarea(array('placeholder' => 'storeAddress','value' => $model->storeAddress))->label(false);  ?>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that demonstrates the tooltip arrow misplacement" 
            data-html="true" ></i>
        </div>
        
       
       <div class="form-group" id="file-0b" class="file">
       
        <?= $form->field($model, 'storeImage')->widget(FileInput::classname(), 
						 		['options' => ['accept' => 'image/*'],]); ?>
       <div class="clearfix"></div>
       </div>
      
 
 
 
        <div class="payment" >
        <h3>Payment optiopns</h3>
         <form role="form" style="margin-top:0.5em; margin-bottom:0.5em;">
    <label class="radio-inline">
      <input type="radio" name="optradio"><span style="font-family:Calibri, Arial; font-size:13px; color:#424b54;">Creditcard payment</span>
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio"><span style="font-family:Calibri, Arial; font-size:13px; color:#424b54;">Paypal payment</span>
    </label><br>
    <label class="radio-inline">
      <input type="radio" name="optradio"><span style="font-family:Calibri, Arial; font-size:13px; color:#424b54;">Debit card payment</span>
    </label>
     <label class="radio-inline">
      <input type="radio" name="optradio"><span style="font-family:Calibri, Arial; font-size:13px; color:#424b54;">Checking account payment</span>
    </label>
  </form>
          
        </div>
        <div class="clearfix"></div>
        <div class="reg-bwn" style="margin-top:2em;"><?= Html::submitButton('UPDATE', ['class' => 'btn btn-primary'])?></div>
    
        
        <div class="clearfix"></div>
        
      </div>
    </div>
    <div class="col-sm-7 pull-right">
      <div class="benefits">
        <h3>Faster way to reach customers</h3>
        <div class="benefits_menus">
          <ul>
            <li><i class="fa fa-caret-right"></i><a href="#">Improves ROI (Return on Investment)</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Reduce Overheads</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Getting new customers</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Quick way  of clearing sale Inventory</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Inventory planning on customer interest</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Huge boost up on sales</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Real time visibility on products</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
   

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

   float:right;
	width:0px;
	margin-top:-35px
	/* position: absolute;
    bottom: 8px;
    font-size: 1em;
    left: 363px; */

}
</style>

  	