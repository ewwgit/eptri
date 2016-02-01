<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = 'Update Vendor Profile';
$this->params['breadcrumbs'][] = ['label' => 'profile', 'url' => ['profile']];
$this->params['breadcrumbs'][] = 'Update';

?>
<style>
.control-label {
	background: none;
	text-transform: none;
}
</style>
  
   <h3 class="f-tabs-vertical__title f-primary-b"> Update Vendor Profile</h3>
     
<!-- *********** start slider ***************** -->

                      <?php
							$form = ActiveForm::begin ( [
								'options' => ['enctype' => 'multipart/form-data'] 
											] ); // important
							?>   
						<div class="col-md-8 col-sm-8 b-tabs-vertical__content">
							<div id="tabs-1">
								<div class="b-tabs-vertical__content-text">
								
									 <div class="form-group col-sm-6" >
										<?= $form->field($model, 'vendor_unique_id')->textInput(['placeholder' => 'vendor_unique_id','value' => $model->vendor_unique_id,'readonly'=>'readonly'])->label(false);  ?>
										
									 </div>
									 <div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
										  <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'Business Contact  First Name','value' => $model->firstName])->label(false);  ?>
										<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> <span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span>
									</div>
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
										 <?= $form->field($model, 'lastName')->textInput(['placeholder' => 'Last Name','value' => $model->lastName])->label(false);  ?>
										<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> <span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span>
									</div>
									
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
												 <?= $form->field($model, 'middleName')->textInput(['placeholder' => 'Middle Name','value' => $model->middleName])->label(false);  ?>
							 
												<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> <span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span>
									</div>
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
										<?= $form->field($model, 'email')->textInput(['placeholder' => 'Email Id','value' => $model->email])->label(false);  ?>
							 
												<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> <span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span>
									</div>
									
									 
									 
									 <div class="form-group col-sm-6" >
										<?= $form->field($model, 'storeName')->textInput(array('placeholder' => ' Store Name','value' => $model->storeName))->label(false);?>
										
									 </div>
									 <div class="form-group col-sm-6" >
										<?= $form->field($model, 'businessName2')->textInput(array('placeholder' => ' Store Name2','value' => $model->businessName2))->label(false);?>
										
									 </div>
									 
									  <div class=" form-group col-sm-6 ">
										<?= $form->field($model, 'storeAddress')->textarea(array('placeholder' => ' Store Address  line 1','value' => $model->storeAddress))->label(false);  ?>
									 </div>
									
									<div class=" form-group col-sm-6 ">
										<?= $form->field($model, 'address2')->textarea(array('placeholder' => ' Store Address  line 2','value' => $model->address2))->label(false);  ?>
									   
										<span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span> 
									</div>
									
									 <div class=" form-group col-sm-6" >
										<?=$form->field($model, 'city')->textInput(['placeholder' => 'City'],
											['itemOptions' => ['class' =>'radio-inline']])->label(false)?>
									</div>
									
									
									<div class=" form-group col-sm-6" >
										<?= $form->field($model, 'state')->widget(DepDrop::classname(), [
										     'options' => ['id'=>'states'],
												'data'=>$model->statesData,
										     'pluginOptions'=>[
										         'depends'=>['countries'],
										         'placeholder' => 'Select State',
										         'url' => Url::to(['/vendor/vendor/states'])
										     ]
										 ])->label(false);?>
									</div>
									
									 <div class="form-group col-sm-6" >
										<?= $form->field($model, 'country',['enableAjaxValidation' => true])->dropDownList($model->countriesList, ['id'=>'countries'])->label(false) ?>
									</div>
									
									
									 <div class="form-group col-sm-6" >
										<?= $form->field($model, 'zip')->textInput(array('placeholder' => 'zip','value' => $model->zip))->label(false);?>

									  </div>
									
								
									
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
										
										<?= $form->field($model, 'mobile')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => ['999-999-9999','99999999999'],
		'clientOptions' => [
				 'clearIncomplete' => true
		],
])->label(false); ?>
										<span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span>
									</div>
									
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
										
										<?= $form->field($model, 'mobile2')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => ['999-999-9999','99999999999'],
		'clientOptions' => [
				 'clearIncomplete' => true
		],
])->label(false); ?>
										<span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span>
									</div>
									 <div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
										<?= $form->field($model, 'fax')->textInput(['placeholder' => 'Fax','value' => $model->fax])->label(false);  ?>
										<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> <span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span>
									</div>
										
									
								
										 
										 
									<!-- <div class=" form-group col-sm-6 btnWithTooltip" >
										<?php
										// $form->field($model, 'secondLanguage')->dropDownList(['Telugu' => 'Telugu', 'Hindi' => 'Hindi'],
										//['prompt' => 'Second Language'],['itemOptions' => ['class' =>'radio-inline']])->label(false)
										
										?>
									 </div> --> 
								 
									<!--  <div class=" form-group col-sm-6 btnWithTooltip" >
										 <?php
										 
										//$form->field($model, 'thirdLanguage')->dropDownList([ 'English' => 'English', 'Marati' => 'Marati',],
										//['prompt' => 'Third Language'],['itemOptions' => ['class' =>'radio-inline']])->label(false)
										 
										 ?>
									  </div>  -->
									
									<!-- <div class=" form-group col-sm-6 ">
										 <?php // $form->field($model, 'address1')->textarea(array('placeholder' => 'address1','value' => $model->address1))->label(false);  ?>
									   
										<span style="float: right;font-size: 10px; font-family: 'Open Sans', sans-serif; color:#CCC;margin-top:-13px;"></span> 
									</div> -->
									
									
									<!--  <div class=" form-group col-sm-6 " >
										<select id="exampleInputName2" class="form-control btnWithTooltip" name="RegisterForm[city]" data-placement="bottom" 
											data-original-title=" default to 50 miles" >
										  <option value="">Radius search</option>
										  <option value="">Radius search </option>
										  <option value="">Radius search </option>
										</select>
									  </div> -->
									  
									 
									  
									 
									 
									  <div class=" form-group col-sm-12 ">
									 <?= $form->field($model, 'storeImage')->widget(FileInput::classname(), 
						 		     ['options' => ['accept' => 'image/*'],]); ?>
									</div>
									<div class=" form-group col-sm-12 ">
									 <?php if($model->storeImage != ''){?>											
										<img alt="User Pic" src="<?php echo Yii::getAlias('@userUploadPics/').$model->storeImage ; ?>" width="150px"; height="150px" > 
										 <?php } else { ?>
										 
										 <img alt="User Pic" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/store-pic.png" width="150px"; height="150px"> 
										 
										 
										  <?php } ?> 	
									</div>
									 <div class="clearfix"></div>

									

								</div>
							</div>
							
						
							<div class="update_button">
								<div class="reg-bwn1"><?= Html::submitButton('Update', ['class' => 'btn btn-primary'])?></div>
							</div>

<div class="clearfix"></div>


<!-- container -->
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
/*     position: absolute; */
/*     bottom: 27px; */
/*     font-size: 1em; */
/*     left: 225px; */

		float:right;
		width:0px;
		margin-top:-35px

}
</style>
<style>

</style>


