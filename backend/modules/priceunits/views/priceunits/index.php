<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Price Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-units-index">


    <p>
        <?= Html::a('Create Price Units', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pirceunitId',
            'priceUnitName',
            'description:ntext',
            'status',
        		/* [
        		'attribute' => 'createdBy',
        		'value' => 'createdBy0.username'
        		],
        		[
        		   'attribute' => 'updatedBy',
        		   'value' => 'updatedBy0.username'
        		], */
        	//'createdBy',
            //'updatedBy',
            // 'createdDate',
            // 'updatedDate',
            // 'ipaddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
