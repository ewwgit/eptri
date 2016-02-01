<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PriceUnits */

$this->title = $model->priceUnitName;
$this->params['breadcrumbs'][] = ['label' => 'Price Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-units-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pirceunitId',
            'priceUnitName',
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
