<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mylists */

$this->title = 'Create My Lists';
$this->params['breadcrumbs'][] = ['label' => 'Mylists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mylists-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
