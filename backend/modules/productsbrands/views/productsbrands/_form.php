<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Brandsmaster;
use backend\models\Products;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductsBrands */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-brands-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <?= $form->field($model, 'productId')->dropDownList(
       ArrayHelper::map(Products::find()->all(), 'id', 'productName'),
        ['prompt' => 'Select Product' ]) ?>

    
    
       <?= $form->field($model, 'brandId')->dropDownList(
       ArrayHelper::map(Brandsmaster::find()->all(), 'brandId', 'brandName'),
        ['prompt' => 'Select Brand' ]) ?>
        
        <?= $form->field($model, 'file')->fileInput() ?>
         <?= $form->field($model, 'productupdateImage')->hiddenInput(['value' => $model->productImage]) ?>
          <?php if($model->productImage != ''){?>
         <img src='<?php echo $model->productImage ; ?>' width="150px" height="50px;" style="margin-top:-80px;">
       <?php } ?>
			     
			     

    <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'In-active' => 'In-active', ], ['prompt' => '']) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
