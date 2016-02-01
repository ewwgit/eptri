<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Add Sale Item';
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendorproducts-create">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
