<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Categories;
use backend\models\Brandsmaster;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="product-master-form ">
<div class="box box-primary">
<div class="box-body">  



   <?php
			$form = ActiveForm::begin ( [
					'options' => ['enctype' => 'multipart/form-data'] 
								] ); // important
		  ?>  
		
		    <div class="col-sm-4">
		    <?=$form->field($model, 'FileUpload')->fileInput() ?>
		     </div>
    
    		<div class="clearfix"></div>
    
    
   			 
				
  				<div id="status"></div>
    			<div class="col-sm-8" style="padding:0px;">
				<div class="col-sm-4" id="Importbtn">
					 <?= Html::submitButton($model->isNewRecord ? 'Import' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		   			
				</div>
    
   		</div>
		<?php ActiveForm::end(); ?>

</div>
</div>
</div>
<style>

.form-control {
    width: 100%;
}
.input-group {
    width: 100%;
    
}
.form-group {
    height: 115px;
    margin-bottom:0;
}

.box {
margin-top:25px;
}
@media screen and (min-width:760px) {
.help-block {
    margin-top: 5px;
    width: 350px;
}

</style>