<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Brandsmaster */

$this->title = $model->brandName;
$this->params['breadcrumbs'][] = ['label' => 'Brandsmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brandsmaster-view">

    <h1><?php //echo  Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'brandId',
            'brandName',
            'description:ntext',
            'status',
            [
        		'attribute' => 'createdDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        		[
        		'attribute' => 'updatedDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
		            'createdBy',
		            'updatedBy',
        		// 'createdBy0.username',
        		// 'updatedBy0.username',
	             'ipAddress',
        ],
    ]) ?>

</div>
