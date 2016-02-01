<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Update Vendorproducts: ' . ' ' . $model->productId;
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->productId, 'url' => ['Vendor_view', 'id' => $model->productId]];
$this->params['breadcrumbs'][] = 'Update';
?>


<div class="vendorproducts-update">
     <h3><?= Html::encode($this->title) ?></h3>  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
