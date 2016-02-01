<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="units-index">


    <p>
        <?= Html::a('Create Units', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'unitId',
            'unitName',
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
            // 'updatedBy',
            // 'createdDate',
            // 'updatedDate',
            // 'ipaddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
