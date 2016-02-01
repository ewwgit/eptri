<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SaleIndicators */

$this->title = $model->indicatorCode;
$this->params['breadcrumbs'][] = ['label' => 'Sale Indicators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-indicators-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'saleindicatorId',
            'indicatorCode',
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
            'ipaddress',
        ],
    ]) ?>

</div>
