<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductsBrands */

$this->title = 'Update Products Brands: ' . ' ' . $model->pbId;
$this->params['breadcrumbs'][] = ['label' => 'Products Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pbId, 'url' => ['view', 'id' => $model->pbId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="products-brands-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
