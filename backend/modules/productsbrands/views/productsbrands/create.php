<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProductsBrands */

$this->title = 'Create Products Brands';
$this->params['breadcrumbs'][] = ['label' => 'Products Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-brands-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
