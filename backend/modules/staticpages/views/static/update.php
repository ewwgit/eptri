<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Staticpages */

$this->title = 'Update Staticpages: ' . ' ' . $model->pageTitle;
$this->params['breadcrumbs'][] = ['label' => 'Staticpages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pageTitle, 'url' => ['view', 'id' => $model->staticId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staticpages-update">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
