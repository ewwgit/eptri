<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PriceUnits */

$this->title = 'Create Price Units';
$this->params['breadcrumbs'][] = ['label' => 'Price Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-units-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
