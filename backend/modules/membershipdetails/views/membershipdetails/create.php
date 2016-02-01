<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Membershipdetails */

$this->title = 'Create Membershipdetails';
$this->params['breadcrumbs'][] = ['label' => 'Membershipdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membershipdetails-create">

    <h1><?php //Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
