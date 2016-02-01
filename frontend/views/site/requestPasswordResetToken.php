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
 <div class="container" style="padding-top:0px; padding-left:0px; padding-right:0px; min-height:500px;">
      <div class="sign">
        <h2>Reset Password</h2>
      </div>
      <div class="col-sm-6">
        <div class="signup">
             <div class="benefits_menus">
		<p>Please fill out your registered email. A link to reset password will be sent there.</p>
		</div>
        
		 <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="this is a tooltip that your registered email" 
            data-html="true" placeholder="password" required >
        	<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                <?= $form->field($model, 'email') ?>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="this is a tooltip that your registered email" 
            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
        </div>
          <div class="clearfix"></div>
          <div class="reg-bwn"> <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?></div>
          
          
            <?php ActiveForm ::end();?>
          <div class="clearfix"></div>
        </div>
        
        
        
        
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



