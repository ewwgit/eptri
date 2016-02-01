<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\authclient\widgets\AuthChoice;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Grocer deals | Reset Password';
$this->params ['breadcrumbs'] [] = $this->title;
?>

<!-- start Sign In -->
 <div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px; min-height:500px;">
      <div class="sign">
        <h2>Reset Password</h2>
      </div>
      
         <!-- *********** Reset Password Form  ***************-->
      <div class="col-sm-4">
        <div class="signup">
             <!-- <div class="benefits_menus">
		       <p>Please choose your new password:</p>
		    </div> -->
		    
		     <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
        
				 <div class="form-group btnWithTooltip"  data-placement="top" 
		            data-original-title="this is a tooltip that New Password" 
		            data-html="true" placeholder="password" required >
		        		<?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'password')) ?>
		              <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
		            data-original-title="this is a tooltip that New Password" 
		            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
		        </div>
		        
		        <div class="form-group btnWithTooltip"  data-placement="top" 
		            data-original-title="this is a tooltip that Confirm New Password" 
		            data-html="true" placeholder="password" required >
		        	    <?= $form->field($model, 'confirmPassword')->passwordInput(array('placeholder' => 'confirmPassword')) ?>
		       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
		            data-original-title="this is a tooltip that Confirm New Password" 
		            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
		        </div>
        
        
		          <div class="form-group">
		                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
		                </div>
          
          
            <?php ActiveForm ::end();?>
          <div class="clearfix"></div>
        </div>
        
        
        
        
      </div>
 	  <div class="col-sm-7 pull-right">
       <!-- <div class="benefits">
		            <h4>Log In with social account</h4>
		          <div class="benefits_menus">
		            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis eu mi et pellentesque. Curabitur vestibulum convallis orci, quis dapibus elit fringilla eget. Suspendisse posuere diam ut erat convallis, non dictum quam luctus.</p>
		          </div>
		          <div class="clearfix"></div>
		          <div class="social-icons">
		          
		           <?php
							
							/*$authAuthChoice = AuthChoice::begin ( [ 
									'baseAuthUrl' => [ 
											'site/auth' 
									],
									'popupMode' => true 
							] );*/
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
        </div>-->
      </div>
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




