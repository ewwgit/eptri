<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Brandsmaster */

$this->title = 'Update Brandsmaster: ' . ' ' . $model->brandName;
$this->params['breadcrumbs'][] = ['label' => 'Brandsmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->brandId, 'url' => ['view', 'id' => $model->brandId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="brandsmaster-update">

    <h1><?php //echo Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
