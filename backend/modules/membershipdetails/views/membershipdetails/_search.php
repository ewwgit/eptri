<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MembershipdetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="membershipdetails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MemId') ?>

    <?= $form->field($model, 'MembershipName') ?>

    <?= $form->field($model, 'Cost') ?>

    <?= $form->field($model, 'Duration') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'CreatedDate') ?>

    <?php // echo $form->field($model, 'UpdatedDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
