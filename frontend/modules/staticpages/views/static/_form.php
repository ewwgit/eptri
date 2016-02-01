<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaticPages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pageTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pageContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seoKeys')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metaKeys')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'In-active' => 'In-active', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'createdBy')->textInput() ?>

    <?= $form->field($model, 'updatedBy')->textInput() ?>

    <?= $form->field($model, 'createdDate')->textInput() ?>

    <?= $form->field($model, 'updatedDate')->textInput() ?>

    <?= $form->field($model, 'ipAddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
