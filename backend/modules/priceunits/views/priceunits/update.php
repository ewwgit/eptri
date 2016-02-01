<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PriceUnits */

$this->title = 'Update Price Units: ' . ' ' . $model->priceUnitName;
$this->params['breadcrumbs'][] = ['label' => 'Price Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->priceUnitName, 'url' => ['view', 'id' => $model->pirceunitId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="price-units-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
