<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Create Vendorproducts';
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendorproducts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
