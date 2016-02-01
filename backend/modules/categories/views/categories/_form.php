<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="categories-master-form ">
<div class="box box-primary">
	<div class="box-body">  
	   <?php $form = ActiveForm::begin(); ?>
			    <div class="form-group">
			    <?= $form->field($model, 'categoryName')->textInput(['maxlength' => true,'style'=>'width:500px']) ?>
			    </div>
			
			    <div class="form-group">
			    <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'In-active' => 'In-active',],
			    		['prompt' => 'Status','style'=>'width:500px']) ?>
			    		</div>
			
					    <div class="form-group col-lg-6 col-sm-12">
					    <?php // $form->field($model, 'createdDate')->textInput() ?>
					    </div>
					
					    <div class="form-group col-lg-6 col-sm-12">
					    <?php // $form->field($model, 'updatedDate')->textInput() ?>
					    </div>
			
			    <div class="form-group">
			        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			    </div>
			
		  <?php ActiveForm::end(); ?>
	
	</div>
	</div>
	</div>
