<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = 'Upload Products';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_formfile', [
        'model' => $model,
    ]) ?>

</div>
