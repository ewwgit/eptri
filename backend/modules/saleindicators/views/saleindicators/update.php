<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SaleIndicators */

$this->title = 'Update Sale Indicators: ' . ' ' . $model->indicatorCode;
$this->params['breadcrumbs'][] = ['label' => 'Sale Indicators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->indicatorCode, 'url' => ['view', 'id' => $model->saleindicatorId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sale-indicators-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
