<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */

$this->title = 'Update Categories: ' . ' ' . $model->categoryName;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->categoryName, 'url' => ['view', 'id' => $model->categoryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categories-update">

    <h1><?php //Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
