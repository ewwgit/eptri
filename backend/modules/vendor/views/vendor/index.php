<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendor Mains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-main-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
        		['attribute'=>'status',
        		'label' => 'Status',
        		'value' => function ($data) {
        		if($data->status == 10)
        		{
        			return 'Active';
        		}
        		else 
        		{
        			return 'In-active';
        		}
        		},
        		],
            // 'auth_key',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'password',
            // 'roleId',
            // 'createdDate',
            // 'modifiedDate',

            ['class' => 'yii\grid\ActionColumn',
            		'template' => '{view} {update} {chnagestatus}',
            		'buttons' => [
            				'chnagestatus' => function ($url,$data) {
            				$url = Url::to(['/vendor/vendor/statuschange','id'=>$data->id]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-circle-arrow-right"></span>',
            						$url);
            				},
            				'update' => function ($url,$data) {
            				$url = Url::to(['/vendor/vendor/vendorupdate','id'=>$data->id]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-pencil"></span>',
            						$url);
            				},
            				'view' => function ($url,$data) {
            				$url = Url::to(['/vendor/vendor/view','id'=>$data->id]);
            				return Html::a(
            						'<span class="glyphicon glyphicon-eye-open"></span>',
            						$url);
            				},
            		
            				],
    ],
        ],
    ]); ?>

</div>
