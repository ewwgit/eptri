<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaticPagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-pages-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'staticId') ?>

    <?= $form->field($model, 'pageTitle') ?>

    <?= $form->field($model, 'pageContent') ?>

    <?= $form->field($model, 'seoKeys') ?>

    <?= $form->field($model, 'metaKeys') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'updatedBy') ?>

    <?php // echo $form->field($model, 'createdDate') ?>

    <?php // echo $form->field($model, 'updatedDate') ?>

    <?php // echo $form->field($model, 'ipAddress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
