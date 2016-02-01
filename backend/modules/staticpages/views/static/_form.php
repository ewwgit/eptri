<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Staticpages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staticpages-form">
 

    <?php $form = ActiveForm::begin(); ?>

    <div style="height:0" class="form-group col-lg-6 col-sm-12" style="height:15px;"><?= $form->field($model, 'pageTitle')->textInput(['maxlength' => true]) ?></div>

    

  <div class="form-group col-lg-6 col-sm-12"> <?= $form->field($model, 'seoKeys')->textInput(['maxlength' => true]) ?></div>

  <div class="form-group col-lg-6 col-sm-12"><?= $form->field($model, 'pageContent')->textarea(['rows' => 4]) ?></div>
  
  <div class="form-group col-lg-6 col-sm-12"> 	<?php if(!($model->isNewRecord))
	{?>
	
	        
	<?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'In-active' => 'In-active', ], 
			['prompt' => '']) ?>
	<?php }?>
	    </div>
 
  <div class="form-group col-lg-6 col-sm-12"> <?= $form->field($model, 'metaKeys')->textInput(['maxlength' => true]) ?></div>
    

    <div class="form-group" >
       <div class="form-group col-lg-6 col-sm-12" style="margin-top: 60px;"> <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

<style>
.box {
margin-top:25px;
}
.form-control {
    width: 100%;
}

    
    
    </style>