<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Role */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="role-form ">

<div class="box box-primary">
	<div class="box-body">  
		<?php $form = ActiveForm::begin(); ?>
		
	            <div class="form-group">
			    <?= $form->field($model, 'RoleName')->textInput(['maxlength' => true,'onblur' => 'nospaces(this)','style'=>'width:500px']) ?>
			    </div>
		    
		       <div class="form-group">
			   <?= $form->field($model, 'description')->textarea(['rows' => 6,'style'=>'width:500px']) ?>
			   </div>
			
			   <div class="form-group">
					 <?php if(!($model->isNewRecord))
					{?>
						<?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'In-active' => 'In-active'], ['prompt' => '','style'=>'width:500px']) ?>
					<?php }?> 
			   </div>
				
				    <?php // $form->field($model, 'createdDate')->textInput() ?>
				
				    <?php // $form->field($model, 'updatedDate')->textInput() ?>
				
				    <?php // $form->field($model, 'ipAddress')->textInput(['maxlength' => true]) ?>
		
		
		    <div class="form-group">
		        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		    </div>

   		 <?php ActiveForm::end(); ?>

</div>
</div>
</div>


<script type="text/javascript">

function nospaces(t)
{
		if(t.value.match(/\s/g))
			{
	           alert('Sorry, you are not allowed to enter any spaces');
			   t.value=t.value.replace(/\s/g,'');
			 }
}
</script>
