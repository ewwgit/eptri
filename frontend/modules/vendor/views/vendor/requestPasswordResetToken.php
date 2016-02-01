<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Grocer Deals | Reset Password';
$this->params ['breadcrumbs'] [] = $this->title;
?>

<!-- start Sign In -->
<div class="header-slider">
  <div class="innerbanner">
    <div class="container">
      <h3>Reset Password</h3>
    </div>
  </div>
</div>
 <div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px; min-height:500px;">
      <div class="col-sm-4">
        <div class="signup">
             <div class="benefits_menus">
		<p>Please fill out your registered email. A link to reset password will be sent there.</p>
		</div>
        
		 <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="Please enter your email address. You will receive a link to create a new password via email.!" 
            data-html="true" placeholder="password" required >
        	<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                <?= $form->field($model, 'email') ?>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="top" 
            data-original-title="Please enter your email address. You will receive a link to create a new password via email.!" 
            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
        </div>
          <div class="clearfix"></div>
          <div class="reg-bwn"> <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?></div>
          
          
            <?php ActiveForm ::end();?>
          <div class="clearfix"></div>
        </div>
        
        
        
        
      </div>
        <div class="col-sm-7 pull-right">
      <!--    <div class="benefits">
          <h4>Log In with social account</h4>
          <div class="benefits_menus">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis eu mi et pellentesque. Curabitur vestibulum convallis orci, quis dapibus elit fringilla eget. Suspendisse posuere diam ut erat convallis, non dictum quam luctus.</p>
          </div>
          <div class="clearfix"></div>
          <div class="social-icons">
          
           <?php
					
					/* $authAuthChoice = AuthChoice::begin ( [ 
							'baseAuthUrl' => [ 
									'site/auth' 
							],
							'popupMode' => true 
					] ); */
					?>

				<?php //foreach ($authAuthChoice->getClients() as $client): ?>
				
				<?php  //endforeach; ?>
				
				<?php //AuthChoice::end(); ?>
            <div class="button"> 
            
            
              <a class="fa" href="#" > <span>facebook</span> </a>
             <a class="tw" href="#" > <span>Twitter</span></a> 
             <a class="go" href="#"> <span>Google+</span></a>
             
             
              </div>
          </div>
          <div class="clearfix"></div>
          <div class="your">
            <p><span style="color:red">*</span>Your privacy is our top concern</p>
            <p class="we">We will never share your contact information to others without
              your consent</p>
          </div>
        </div>
      </div>-->
    </div>

	<!-- End  Sign In -->
	
	

	
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

}
</style>



