<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Grocer deals | Sign In';
$this->params ['breadcrumbs'] [] = $this->title;
?>

<!-- start Sign In -->
 <div class="container" style=" padding-right:0px; min-height:500px;">
    <div class="sign">
        <h2>Sign In</h2>
    </div>
    
      <!-- *********** login page  ***************-->
    <div class="col-sm-4" style="padding-left: 0px;">
        <div class="signup">
        
		        <?php
					$form = ActiveForm::begin ( [
							'options' => ['enctype' => 'multipart/form-data'] 
										] ); // important
				?>
				
			
        <div>
         <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="please Enter the Username " 
            data-html="true" placeholder="Username" required >
        	<?= $form->field($model, 'username')->textInput(array('placeholder' => 'Email  (or) Username'))->label(false);  ?>
		</div>
          <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="please Enter the Username" 
            data-html="true" style="float:right;width:0px;margin-top:-35px" >
          </i>
        </div>
        
        <div>
         <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="please Enter the Password" 
            data-html="true" placeholder="password" required >
        	<?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Password'))->label(false);  ?>
       	
        </div>
        	 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="please Enter the Password" 
            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
        </div>
         	<div class="clearfix"></div>
         <div class="forgotpassword">   <?= Html::a('forgot password', ['site/request-password-reset']) ?></div>
         <div class="if">
           <p>If you are new to grocer deals?</p><a href="<?= Url::to(['register/register'])?>"> Sign Up</a>
         </div>
          <div class="login-check">
		        <ul>
		          <li>
		            <label class="checkbox">
		              <input type="checkbox">
		              Keep me signed in on this computer (optional)</label>
		          </li>
		          </ul>
     	 </div>
      <div class="clearfix"></div>
      <div class="by"> <p> By signing in you are agreeing to our <a href="#" style="color:#f7941e;"> Conditions of Use and Sale</a> and <a href="#" style="color:#f7941e;">Privacy Notice</a></p></div>
      <div class="clearfix"></div>
      
          <div class="reg-bwn"> 
             <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary'])?>
              <!-- <a href="#">SignIn</a> -->
          </div>
          	<div class="clearfix"></div>
        </div>
		<?php ActiveForm ::end();?>
     </div>
	 
	 
	 
     <div class="col-sm-7 pull-right">
      <div class="benefits">
          <h4>Log In with social account</h4>
          <div class="clearfix"></div>
          <div class="social-icons">
			    <?php
					
					$authAuthChoice = AuthChoice::begin ( [ 
							'baseAuthUrl' => [ 
									'site/auth' 
							],
							'popupMode' => true 
					] );
					?>

				<?php foreach ($authAuthChoice->getClients() as $client): ?>
				
				<?php  endforeach; ?>
				
				<?php AuthChoice::end(); ?>
		</div>
        
          <div class="your">
            <p><span style="color:red">*</span>Your privacy is our top concern</p>
            <p class="we">We will never share your contact information to others without
              your consent</p>
          </div>
        </div>
    </div>
    </div>

	<!-- End  Sign In -->
	
	

	
  <script>$(function() {
    $(".btnWithTooltip").tooltip();
});
</script>

  <!-- *************** css apply **************** -->
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
}
</style>



