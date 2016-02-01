<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Units */

$this->title = 'Update Units: ' . ' ' . $model->unitName;
$this->params['breadcrumbs'][] = ['label' => 'Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->unitName, 'url' => ['view', 'id' => $model->unitId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="units-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
