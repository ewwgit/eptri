<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;
use yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<?php
$form = ActiveForm::begin ( [ 
		'id' => 'login-form',
		// 'action' => 'login',
		'fieldConfig' => [ 
				'template' => "{label}\n{input}\n{hint}\n{error}" 
		] 
] );
?>
<style>
.reg-signin {
	background: #85bc3e none repeat scroll 0 0;
	border-radius: 5px;
	border: 2px solid #85bc3e;
	color: #fff;
	font-family: "Segoe UI";
	font-size: 14px;
	font-weight: 500;
	padding: 5px 10px;
	text-transform: none;
	float: left;
	margin: 0px;
}
</style>
 <?php if (Yii::$app->user->isGuest) {?>
 
  <div class="vendor_form">
   <div class="vendor">
										<h3>Vendor Login</h3>
									</div>
   <div class="">
		<form class="form-inline" role="form">
			<div class="form-group user_form">
				<label class="sr-only" for="inputEmail">Email</label>
                  <?= $form->field($model, 'username')->textInput(['placeholder' => 'Eamil (or) Username'])->label(false)?>
            </div>
			<div class="form-group user_form">
				<label class="sr-only" for="inputPassword">Password</label>
                      <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false)?>
            </div>
			<?= Html::submitButton('Sign In', ['class' => 'reg-signin','id'=>'login_btn', 'name' => 'login-button','data-loading-text'=>'Signing In....'])?>
             
				
		</form>
		 <div class="clearfix"></div>
		            <div class="if2"> <p>New to grocer deals?</p><a href="<?= Url::to(['vendor/signup'])?>"> Sign Up</a>
                            <a href="<?= Url::to(['/vendor/vendor/request-password-reset'])?>" style="float:left; margin-left:25px; color:#85bc3e;">Forgot Password</a>
                     </div>
	</div>
</div>


<?php }else {  ?>
	                 	<div class="create_btn2">
		                	<ul class="icon2 sub-icon2 ">
									    <li><a class="active-icon2 " href="#">
										    <i class="fa fa-user"></i> <?php echo StringHelper::truncate (Yii::$app->user->identity->username, 15); ?> <i class="fa fa-caret-down"></i> </a>
											<ul class="sub-icon2 list">
											    <li><a href="<?= Url::to(['vendor/profile'])?>" title="">Vendor Profile</a></li>
											      <li><a href="<?= Url::to(['vendor/packageoptions'])?>" title="">Package Options</a></li>
											      <li><a href="<?= Url::to(['vendor/upload'])?>" title="">Products Upload</a></li>
											      <li><a href="<?= Url::to(['/vendor/rewards'])?>" title="">Manage rewards</a></li>
											      <li><a href="<?= Url::to(['vendor/managereviews'])?>" title="">Manage reviews</a></li>
											      <li><a href="<?= Url::to(['vendor/managereserveitem'])?>" title="">Manage reserve Items</a></li>
											      <li><a href="<?= Url::to(['vendor/inventoryreports'])?>" title="">Inventory Reports</a></li>
											      <li><a href="<?= Url::to(['vendor/customerdynamics'])?>" title="">Customer Dynamics</a></li>
											      <li><a href="<?= Url::to(['vendor/support'])?>" title="">Support</a></li>
											      <li><a href="<?= Url::to(['vendor/signupbundlerequest'])?>" title="">Misc</a></li>
											      <li><a href="<?= Url::to(['/vendor/vendor/logout'])?>"  title="">logout</a></li>
										   </ul>
										</li>
									</ul>	
						</div>	


<?php } ?>

<?php ActiveForm::end(); ?>