<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Categories;

use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="product-master-form ">
<div class="box box-primary">
<div class="box-body">  



    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]);  ?>
               <div class="form-group col-lg-6 col-sm-12">
			      <?= $form->field($model, 'productCode')->textInput(['maxlength' => true]) ?>
			    </div>
			    
			    <div class="form-group col-lg-6 col-sm-12">
			      <?= $form->field($model, 'productName')->textInput(['maxlength' => true]) ?>
			    </div>

				 <div class="form-group col-lg-6 col-sm-12">
							       <?= $form->field($model, 'categoryId')->dropDownList(
							       ArrayHelper::map(Categories::find()->orderBy([
	       'categoryName'=>SORT_ASC
	      
		])->all(), 'categoryId', 'categoryName'),
							        ['prompt' => 'categoryName' ]) ?>
				 </div>
    
			      
			      
			   	   <div class="form-group col-lg-6 col-sm-12">
			         	  <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'In-active' => 'In-active', ], 
			    		['prompt' => 'Status']) ?>
			       </div>
			       
                   <!-- image file upload process -->
			       
			       <div class="form-group col-lg-6 col-sm-12">
				      <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>
				    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','style'=>'margin-top:86px;']) ?>
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