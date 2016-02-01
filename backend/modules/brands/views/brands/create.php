<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Brandsmaster */

$this->title = 'Create Brandsmaster';
$this->params['breadcrumbs'][] = ['label' => 'Brandsmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brandsmaster-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
