<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\Url;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = 'Updateprofile: ';
$this->params['breadcrumbs'][] = ['label' => 'profile', 'url' => ['profile']];
$this->params['breadcrumbs'][] = 'Update';

?>
<!-- *********** start slider ***************** -->


<div class="container">
	<div class="sign" style="margin-top: 6em;">
		<h2 style="color:#434a54;  ">USER PROFILE</h2>
	</div>
	<div class="user_profile">
		<div class="col-sm-8" style="padding-top:0px; padding-left:0px; padding-right:0px;">
			<div class="l-inner-page-container">
				<div class="b-shortcode-example b-remaining">
					<div  data-active="1" class="b-tabs-vertical b-tabs-vertical--default f-tabs-vertical j-tabs-vertical b-tabs-reset row">
						<div class="col-md-4 col-sm-4 b-tabs-vertical__nav">
							<ul>
								<li><a class="f-primary-l" href="#tabs-1"><i class="fa fa-user"  ></i> Edit user Profile</a></li>
								<li><a class="f-primary-l" href="#tabs-2"><i class="fa fa-gift"  ></i>My Rewards</a></li>
								<li><a class="f-primary-l" href="#tabs-3"><i class="fa fa-list"  ></i> My List</a></li>
								<li><a class="f-primary-l" href="#tabs-4"><i class="fa fa-tags"  ></i> My Store Offers</a></li>
								<li><a class="f-primary-l" href="#tabs-5"><i class="fa fa-cog"  ></i> Settings</a></li>
								<li><a class="f-primary-l" href="#tabs-6"><i class="fa fa-life-ring"  ></i> Support</a></li>
								<li><a class="f-primary-l" href="#tabs-7"><i class="fa fa-folder"  ></i> Misc</a></li>
							</ul>
						</div>
						
							<?php
							$form = ActiveForm::begin ( [
								'options' => ['enctype' => 'multipart/form-data'] 
											] ); // important
							?>   
						<div class="col-md-8 col-sm-8 b-tabs-vertical__content">
							<div id="tabs-1">
								<div class="b-tabs-vertical__content-text">
									<h3 class="f-tabs-vertical__title f-primary-b" style="padding-left:13px;">Update Your Profile</h3>
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
										  <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'First Name','value' => $model->firstName])->label(false);  ?>
										<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> 
									</div>
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
										 <?= $form->field($model, 'lastName')->textInput(['placeholder' => 'Last Name','value' => $model->lastName])->label(false);  ?>
										<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> 
									</div>
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name">
												 <?= $form->field($model, 'middleName')->textInput(['placeholder' => 'Middle Name','value' => $model->middleName])->label(false);  ?>
							 
												<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> 
									</div>
									<div class="gender">
										<p>Gender</p>
										<div class=" form-group col-sm-8 ">
										  <?= $form->field($model, 'gender',['enableAjaxValidation' => true])->radioList(array('Male'=>'Male','Female'=>'Female'))->label(false); ?>
										</div>
									</div>
									<div class="form-group col-sm-6 btnWithTooltip">
										<div class='input-group date' id='datetimepicker1' data-placement="top" 
											data-original-title="This will help us to send special offers on your birthday" 
											data-html="true"  placeholder="DOB">
													  <?php 
											   
												
												echo $form->field($model, 'dob')->widget(DatePicker::classname(),
														[
														'options' => ['placeholder' => 'Enter birth date ...'],
														'name'  => 'from_date',
														'value' => $model->dob,
														'pluginOptions' => [
																'autoclose'=>true,
																'format' => 'yyyy-m-d',
																'todayHighlight' => true
														]
												])->label(false);
												
												
												?>
												<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
											data-original-title="This will help us to send special offers on your birthday" 
											data-html="true"  style="bottom:-2px; top:9px; right:-20px;"></i>
										</div>
										
									</div>
									<div class=" form-group col-sm-6 btnWithTooltip" data-placement="top" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true"  placeholder="First Name" style="margin-top: 28px;">
										<?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false);  ?>
										<i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
										data-original-title="Name & address details will help us to send  gifts on app rewards and other gifts" 
										data-html="true" ></i> 
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
									
									<div class=" form-group col-sm-6 ">
										 <?= $form->field($model, 'address1')->textarea(array('placeholder' => ' Address  line 1','value' => $model->address1))->label(false);  ?>
									   
										 
									</div>
									<div class=" form-group col-sm-6 ">
										<?= $form->field($model, 'address2')->textarea(array('placeholder' => ' Address  line 2','value' => $model->address2))->label(false);  ?>
									   
										 
									</div>
									<!--  <div class=" form-group col-sm-6 " >
										<select id="exampleInputName2" class="form-control btnWithTooltip" name="RegisterForm[city]" data-placement="bottom" 
											data-original-title=" default to 50 miles" >
										  <option value="">Radius search</option>
										  <option value="">Radius search </option>
										  <option value="">Radius search </option>
										</select>
									  </div> -->
									  
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
									  <div class="update_button" style="margin-top: 7em;">
								<div class="reg-bwn1"><?= Html::submitButton('UPDATE', ['class' => 'btn btn-primary'])?></div>
							</div>
								</div>
							</div>
							<div id="tabs-2">
								<div class="b-tabs-vertical__content-text">
								  <h3 class="f-tabs-vertical__title f-primary-b">My Rewards</h3>
								  <p align="justify">Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat nunc at augue tincidunt vehicula.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan. Pellentesque gravida mauris ac aliquam consequat. Vivamus accumsan mi a metus euismod vulputate. Ut imperdiet, nunc suscipit volutpat feugiat, quam odio luctus dolor, condimentum faucibus velit tellus nec risus. Nam auctor tellus ut lorem ultricies, vitae commodo eros pretium. Curabitur facilisis bibendum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum eget nisi viverra, adipiscing purus a, placerat erat. Praesent hendrerit, tellus id dapibus porta, ante velit fringilla mi, eget pellentesque nulla mauris interdum mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum nisl convallis tincidunt ornare. In a interdum orci. Fusce id nibh cursus, pulvinar mi ac, auctor ipsum. In hac habitasse platea dictumst. Curabitur porttitor suscipit mi, ac cursus mauris egestas at. Nulla leo mi, placerat non rutrum nec, consequat eget metus. </p>
								</div>
							</div>
							<div id="tabs-3">
								<div class="b-tabs-vertical__content-text">
								    <h3 class="f-tabs-vertical__title f-primary-b"> My List</h3>
									<div id="products">
										<div class="item list-group-item  col-md-7">
											<div class="thumbnail"> <img class="group list-group-image" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/1.jpg" alt="" class="img-responsive" />
												<div class="caption2">
													  <h4>GROCERY STORE NAME</h4>
													  <p> Banjara Hills Road No:10<br />
														Hyderabad </p>
													<div class="row">
														<div class=" productinfo" style=" padding-left:10px;">
														  <p style="">Sale Items <span class="no">25</span></p>
														  <a href="#" class=""><i class="fa fa-map-marker" style="border-left:none !important;"></i> </a> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="item list-group-item  col-md-7">
											<div class="thumbnail"> <img class="group list-group-image" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/1.jpg" alt=""  class="img-responsive"/>
												<div class="caption2">
												    <h4>GROCERY STORE NAME </h4>
													<p> Banjara Hills Road No:10<br />
													Hyderabad </p>
													<div class="row">
														<div class=" productinfo" style=" padding-left:10px;">
														  <p style="">Sale Items <span class="no">25</span></p>
														  <a href="#" class=""><i class="fa fa-map-marker" style="border-left:none  !important;"></i> </a> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="item list-group-item  col-md-7">
											<div class="thumbnail"> <img class="group list-group-image" src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/1.jpg" alt="" class="img-responsive" />
												<div class="caption2">
													<h4>GROCERY STORE NAME</h4>
													<p> Banjara Hills Road No:10<br />
														Hyderabad </p>
													<div class="row">
														<div class=" productinfo" style=" padding-left:10px;">
															<p style="">Sale Items <span class="no">25</span></p>
															<a href="#" class=""><i class="fa fa-map-marker" style="border-left:none  !important;"></i> </a> 
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tabs-4">
								<div class="b-tabs-vertical__content-text">
								  <h3 class="f-tabs-vertical__title f-primary-b"> My Store Offers</h3>
								  <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>
								</div>
							</div>
							<div id="tabs-5">
								<div class="b-tabs-vertical__content-text">
								  <h3 class="f-tabs-vertical__title f-primary-b"> Settings</h3>
								  <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>
								</div>
							</div>
							<div id="tabs-6">
								<div class="b-tabs-vertical__content-text">
								  <h3 class="f-tabs-vertical__title f-primary-b"> Support</h3>
								  <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>
								</div>
							</div>
							<div id="tabs-7">
								<div class="b-tabs-vertical__content-text">
								  <h3 class="f-tabs-vertical__title f-primary-b"> Misc</h3>
								  <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			  </div>
		</div>
		
		<div class="col-sm-4 pull-right">
			<div class="convert">
				<div class="convert_img"><img src="<?php echo Yii::getAlias('@userUploadPics/') ?>images/convert.png" class="img-responsive" /></div>
				<p>Do you own grocery store in North America <span style="color:#8cc251">(USA & Canada)</span>?</p>
				<p>Convert as Vendor and grow your business with grocer deals.</p>
				<div class="convert_button">
					<div class="vendor-reg-bwn2" hidden><?= Html::a('convert', ['vendor','id' => Yii::$app->user->id]) ?></div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<!-- container -->
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





