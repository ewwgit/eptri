<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Membershipdetails */

$this->title = 'Update Membershipdetails: ' . ' ' . $model->MembershipName;
$this->params['breadcrumbs'][] = ['label' => 'Membershipdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MembershipName, 'url' => ['view', 'id' => $model->MemId]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="membershipdetails-update">


    <?= $this->render('_form', ['model' => $model,]) ?>

</div>
