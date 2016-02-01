<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BrandsmasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brandsmasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brandsmaster-index">

    <h1><?php //echo Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Brandsmaster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'brandId',
            'brandName',
            'description:ntext',
            'status',
            [
        		'attribute' => 'createdDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        		
        		
        	/* [
        		  'attribute' => 'createdBy',
        		  'value' => 'createdBy0.username'
        		],
        		[
        		'attribute' => 'updatedBy',
        		'value' => 'updatedBy0.username'
        	], */
            // 'updatedDate',
          
             //'createdBy',
             //'updatedBy',
        
        	
            // 'ipAddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
