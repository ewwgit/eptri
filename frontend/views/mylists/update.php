<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mylists */

$this->title = 'Update My Lists: ' . ' ' . $model->lid;
$this->params['breadcrumbs'][] = ['label' => 'Mylists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lid, 'url' => ['view', 'id' => $model->lid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mylists-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
