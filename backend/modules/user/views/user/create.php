<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserMain */

$this->title = 'Create User Main';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-main-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
