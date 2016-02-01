<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SaleIndicators */

$this->title = 'Create Sale Indicators';
$this->params['breadcrumbs'][] = ['label' => 'Sale Indicators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-indicators-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
