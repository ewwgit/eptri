<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Units */

$this->title = $model->unitName;
$this->params['breadcrumbs'][] = ['label' => 'Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="units-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'unitId',
            'unitName',
            'description:ntext',
            'status',
            'createdBy',
            'updatedBy',
              [
        		'attribute' => 'createdDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        		[
        		'attribute' => 'updatedDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        		
	        		//'createdBy0.username',
	        		//'updatedBy0.username',
            'ipaddress',
        ],
    ]) ?>

</div>
