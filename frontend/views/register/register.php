<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\view;
use kartik\file\FileInput;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */

$this->title = 'Grocer deals | Sign Up';
$this->params ['breadcrumbs'] [] = $this->title;

?>
  <!-- start Sign UP -->
  
  
  <div class="container" style=" padding-right:0px;">
    <div class="sign">
    <div style="background: #8cc251; border-radius:5px 5px; color: #fff; line-height:30px; text-align: center;">
    	<?php echo Yii::$app->getSession()->getFlash('success'); ?>
    </div>
      <h2>Create an account</h2>
    </div>
    
    <div class="col-sm-4" style="padding-left: 0px;">
    	  
      <div class="signup">
            
          <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		  ?>
      
		<div>
		     <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="username can only contain alphanumeric characters,it must be between 3 to 15 characters." 
            data-html="true" placeholder="username" required >
        	<?= $form->field($model, 'username')->textInput(array('placeholder' => 'Username'))->label(false);  ?>
       		
            </div>
	         <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
	            data-original-title="username can only contain alphanumeric characters,it must be between 3 to 15 characters." 
	            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
        </div>
        
        <div>
        	<div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="should be a valid email address" 
            data-html="true" placeholder="username" required >
        	<?= $form->field($model, 'email')->textInput(array('placeholder' => 'Email'))->label(false);  ?>
       		</div>
       		 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="should be a valid email address" 
            data-html="true" style="float:right;width:0px;margin-top:-35px"></i>
        </div>
         
        
        <div>
	         <div class="form-group btnWithTooltip"  data-placement="top" 
	            data-original-title="minimum 6 char with at least 1 letter and 1 number" 
	            data-html="true" placeholder="password" required >
	        	<?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Password'))->label(false);  ?>
	       	</div>
	       	 <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
	            data-original-title="minimum 6 char with at least 1 letter and 1 number" 
	            data-html="true" style="float:right;width:0px;margin-top:-35px"></i>
        </div>
        
         <div>
          <div class="form-group btnWithTooltip"  data-placement="top" 
            data-original-title="minimum 6 char with at least 1 letter and 1 number" 
            data-html="true" placeholder="password" required >
        	<?= $form->field($model, 'confirm')->passwordInput(array('placeholder' => 'Confirm Password'))->label(false);  ?>
         </div>
            <i class="fa fa-question-circle btnWithTooltip Qty-symbol-tooltip" data-placement="bottom" 
            data-original-title="minimum 6 char with at least 1 letter and 1 number" 
            data-html="true" style="float:right;width:0px;margin-top:-35px" ></i>
        
        </div>
        
         <div class="if">
           <p>Already have an account?</p><a href="<?= Url::to(['site/login'])?>"> Sign In</a>
         </div>
		<div class="clearfix"></div>
		
        <div class="reg-bwn">
        	<?= Html::submitButton('Signup', ['class' => 'btn btn-primary'])?>
        	<!-- <a href="#">Signup</a> -->
		</div>
		<div class="clearfix"></div>
		
		 <div class="your">
            <p><span style="color:red">*</span>Your privacy is our top concern</p>
            <p class="we">We will never share your contact information to others without
              your consent</p>
          </div>
        <div class="clearfix"></div>
        
          <?php ActiveForm ::end();?>
      </div>
    </div>
    <div class="col-sm-7 pull-right">
      <div class="benefits">
        <h3>Benefits</h3>
        <div class="benefits_menus">
          <ul>
            <li><i class="fa fa-caret-right"></i><a href="#">Save Money</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Earn Store rewards</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Earn App rewards</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Reserve sale item and pick later from store</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Save time</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">Create Wish list</a></li>
            <li><i class="fa fa-caret-right"></i><a href="#">My store offers</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

	<!-- end signup-->
   

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
{   float:right;
	width:0px;
	margin-top:-35px

}
</style>

  	