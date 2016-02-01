<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Brandsmaster */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="brandsmaster-form ">
<div class="box box-primary">
	<div class="box-body">
	<?php $form = ActiveForm::begin(); ?>
		
		    <?= $form->field($model, 'brandName')->textInput(['maxlength' => true,'style'=>'width:500px']) ?>
		
		    <?= $form->field($model, 'description')->textarea(['rows' => 6,'style'=>'width:500px']) ?>
		
		    <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'In-active' => 'In-active', ], ['prompt' => '','style'=>'width:500px']) ?>
		
		    
		
		    <div class="form-group">
		        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		    </div>
		
<?php ActiveForm::end(); ?>

</div>
</div>
</div>
