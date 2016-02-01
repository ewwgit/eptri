<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\view;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */

$this->title = 'Grocer deals | Sign Up';
//$this->params ['breadcrumbs'] [] = $this->title;

//echo "<pre>"; print_r($model);


?>
 <!-- start slider -->

 <!-- start slider -->
<div class="header-slider">
  <div class="innerbanner">
    <div class="container">
      <h3>Sign Up</h3>
    </div>
  </div>
</div>
  <div class="container">
    <div style="background: #8cc251; border-radius:5px 5px; color: #fff; line-height:30px; text-align: center;">
    	<?php echo Yii::$app->getSession()->getFlash('success'); ?>
    </div>
	 <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		?> 
     <div class="col-sm-4">
     
       <div class="signup">
      
      <div>
          <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="username can only contain alphanumeric characters,it must be between 3 to 15 characters." 
            data-html="true" placeholder="username" required >
        	<?= $form->field($model, 'username')->textInput(array('placeholder' => 'User Name'))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="username can only contain alphanumeric characters,it must be between 3 to 15 characters." 
            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
        </div>
        </div>
        <div>
         <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="should be a valid email address" 
            data-html="true" placeholder="username" required >
        	<?= $form->field($model, 'email')->textInput(array('placeholder' => 'Email'))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="should be a valid email address" 
            data-html="true" style="float:right;width:0px;margin-top:-35px"></i>
            </div>
        </div>
       
        <div>
         <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="minimum 6 char with at least 1 letter and 1 number" 
            data-html="true" placeholder="password" required >
        	<?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Password'))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="minimum 6 char with at least 1 letter and 1 number" 
            data-html="true" style="float:right;width:0px;margin-top:-35px"></i>
        </div>
        </div>
        <div>
          <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="minimum 6 char with at least 1 letter and 1 number" 
            data-html="true" placeholder="confirm password" required >
        	<?= $form->field($model, 'confirm')->passwordInput(array('placeholder' => 'Confirm Password'))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="minimum 6 char with at least 1 letter and 1 number" 
            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
        </div>
        </div>
        <div>
        <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="Provide your Business Name" 
            data-html="true" placeholder="storename" required >
        	<?= $form->field($model, 'storeName')->textInput(array('placeholder' => 'Business Name'))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Provide your Business Name" 
            data-html="true" ></i>
        </div>
        </div>
        <div>
        <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="Provide your alternate Business Name" 
            data-html="true" placeholder="storename" required >
        	<?= $form->field($model, 'businessName2')->textInput(array('placeholder' => 'Business Name2'))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Provide your alternate Business Name" 
            data-html="true" ></i>
        </div>
        </div>
        <div>
          <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="Provide your store address" 
            data-html="true" placeholder="storeaddress" required >
          <?= $form->field($model, 'storeAddress')->textInput(array('placeholder' => 'Business Address','value' => $model->storeAddress))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Provide your store address" 
            data-html="true" ></i>
        </div>
        </div>
         <div>
        <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="Provide your alternate store address" 
            data-html="true" placeholder="storeaddress" required >
          <?= $form->field($model, 'address2')->textInput(array('placeholder' => 'Address2','value' => $model->address2))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Provide your alternate store addres" 
            data-html="true" ></i>
        </div>
        </div>
        
      <div>
       <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="Provide your city" 
            data-html="true">
            <?=$form->field($model, 'city')->textInput(['placeholder' => 'City'],
											['itemOptions' => ['class' =>'radio-inline']])->label(false)?>
          </div>
          <div>
          <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="Provide your city" 
            data-html="true" ></i>
        </div>
        </div>
        <div>
         <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="select your state" 
            data-html="true">
           
			<?= $form->field($model, 'state')->widget(DepDrop::classname(), [
        'options' => ['id'=>'states'],
		'data'=>$model->statesData,
         'pluginOptions'=>[
         'depends'=>['countries'],
         'placeholder' => 'Select State',
         'url' => Url::to(['/vendor/vendor/states'])
     ]
 ]);?>
          
          </div>
          <div>
          <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="select your state" 
            data-html="true" ></i>
        </div>
        </div>
        <div>
          <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="select your country" 
            data-html="true">           			
			<?= $form->field($model, 'country')->dropDownList($model->countriesList, ['id'=>'countries']) ?>
          </div>
          <div>
          <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="select your country" 
            data-html="true" ></i>
        </div>
        </div>
      
        <div>
        <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="provide your zip code" 
            data-html="true">
            <?= $form->field($model, 'zip')->textInput(array('placeholder' => 'zip','value' => $model->zip))->label(false);?>
          </div>
          <div>
          <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="provide your zip code" 
            data-html="true" ></i>
        </div>
        </div>
		
		   </div><!--signup-->
     </div><!--end col-sm-4-->
		 <div class="col-sm-4">
     
             <div class="signup">
             
             <div>
             <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="provide your first name" 
            data-html="true" placeholder="firstname" required>
           <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'First Name','value' => $model->firstName])->label(false);  ?>
         </div>
            <div>
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="provide your first name" 
            data-html="true"></i>
        </div>
        </div>
        <div>
        <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="provide your middle name" 
            data-html="true">
             <?= $form->field($model, 'middleName')->textInput(['placeholder' => 'Middle Name','value' => $model->middleName])->label(false);  ?>
         </div>
            <div>
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="provide your middle name" 
            data-html="true" ></i>
        </div>
        </div>
        <div>
        <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="provide your last name" 
            data-html="true" placeholder="lastname" required>
            <?= $form->field($model, 'lastName')->textInput(['placeholder' => 'Last Name','value' => $model->lastName])->label(false);  ?>
         </div>
            <div>
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="provide your last name" 
            data-html="true" ></i>
        </div>
        </div>
        
        <div>
         <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="provide your mobile number" 
            data-html="true" placeholder="mobile" required>
            
<?= $form->field($model, 'mobile')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => ['999-999-9999','99999999999'],
		'clientOptions' => [
				 'clearIncomplete' => true
		],
])->label(false); ?>
         </div>
            <div>
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="provide your mobile number" 
            data-html="true" ></i>
        </div>
        </div>
        <div>
         <div class="form-group btnWithTooltip" data-placement="bottom" 
            data-original-title="provide your alternate mobile number" 
            data-html="true">
            
            <?= $form->field($model, 'mobile2')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => ['999-999-9999','99999999999'],
		'clientOptions' => [
				 'clearIncomplete' => true
		],
])->label(false); ?>
          </div>
          <div>
          <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="provide your alternate mobile number" 
            data-html="true" ></i>
        </div>
        </div>
         <div>
        <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="should be a valid fax address" 
            data-html="true" placeholder="username" required >
        	<?= $form->field($model, 'fax')->textInput(array('placeholder' => 'Fax'))->label(false);  ?>
       		 </div>
       		 <div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="should be a valid fax address" 
            data-html="true" style="float:right;width:0px;margin-top:-35px"></i>
        </div>
        </div>
        <div class="form-group" id="file-0b" class="file">
       
        <?= $form->field($model, 'storeImage')->widget(FileInput::classname(), 
						 		['options' => ['accept' => 'image/*'],]); ?>
       <div class="clearfix"></div>
       
       <div class="login-check">
                  <label>By creating an account, you agree to <a href="#" style="color:#f7941e;"> Grocer-Deals Conditions</a> of Use and <a href="#" style="color:#f7941e;">Privacy Notice</a>.</label>
                   
                  </div>
       
       </div>
      
       
          
        
        <div class="clearfix"></div>
        <div class="reg-bwn" style="margin-top:2em;"><?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary'])?></div>
    
        
        <div class="clearfix"></div>
        
      </div><!--signup-->
     </div><!--end col-sm-4-->
	 <?php ActiveForm ::end();?>
   
  </div><!--container-->
  <div class="clearfix"></div>
   

 <script>
 $(function() {
    $(".btnWithTooltip").tooltip();
});
</script>

<style>
.tooltip-inner {
	width: 200px;
	background: #000;
	font-family:Calibri, Arial;
	font-size:1em;
}
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

  	