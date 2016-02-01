<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Membershipdetails */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="membershipdetails-form-master-form ">
<div class="box box-primary">
<div class="box-body">  

<?php $form = ActiveForm::begin(); ?>
	
	     <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'MembershipName')->textInput(['maxlength' => true]) ?>
	    </div>
	
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'Cost')->textInput(['maxlength' => true]) ?>
	    </div>
	
	   <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'Duration')->textInput(['maxlength' => true]) ?>
	    </div>
	    
	    
	    
	    
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    
	     <?= $form->field($model, 'freeTrailPeriod')->textInput(['maxlength' => true]) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    
	     <?= $form->field($model, 'SaleItemsPerMonth')->textInput(['maxlength' => true]) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'ManageRewards')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'ManagedCustomerReservedItems')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'ManageCustomerReviews')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    
	    <?= $form->field($model, 'SignUpBundlePkgCredit')->textInput(['maxlength' => true]) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'OnlineFlierandBannerCopiesforPrinting')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'OnlinePreformatedfliersforprinting')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'StoreExclusiveAdds')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'OnlineFAQs')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'StepbyStepTutorialVideos')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'EMailSupport')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'PhoneSupport')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'BusinessAssesmentSurvey')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'CustomerDynamics')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'InventoryReports')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'CustomerBehaviourofPurchase')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'BusinessImprovementTips')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'ClientSpecificPlugIns')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
	    </div>
	    
	    <div class="form-group col-lg-6 col-sm-12">
	    <?= $form->field($model, 'Status')->dropDownList([ 'Active' => 'Active', 'In-Active' => 'In-Active', ], ['prompt' => '']) ?>
	    </div>
	
	
	
	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>

 <?php ActiveForm::end(); ?>

</div>
</div>
</div>
