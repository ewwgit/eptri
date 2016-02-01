<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = 'Create Products';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?php // Html::encode($this->title) ?></h1>

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
