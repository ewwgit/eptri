<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PriceUnits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="role-form ">

<div class="box box-primary">
	<div class="box-body">  


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'priceUnitName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'In-active' => 'In-active', ], ['prompt' => 'status']) ?>

    <?php // $form->field($model, 'createdBy')->textInput() ?>

    <?php // $form->field($model, 'updatedBy')->textInput() ?>

    <?php // $form->field($model, 'createdDate')->textInput() ?>

    <?php // $form->field($model, 'updatedDate')->textInput() ?>

    <?php //$form->field($model, 'ipaddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>

