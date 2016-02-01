<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MembershipdetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Membershipdetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membershipdetails-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Membershipdetails', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MemId',
            'MembershipName',
            'Cost',
            'Duration',
            
            // 'StoreBanners',
            // 'CustomerBroachers',
            // 'ReserveItemsUpdate',
            // 'CustomerReviewsMonitor',
            // 'EmailSupport:email',
            // 'CustomersStatistics',
            // 'PhoneSupport',
            // 'YourStoreadds',
            // 'BusinessGrowTips',
            // 'InventoryReports',
            // 'Status',
             [
        		'attribute' => 'CreatedDate',
        		
        		'format' =>  ['date', 'php:m/d/Y'],
        		],
        		[
        		'attribute' => 'UpdatedDate',
        		
        		'format' =>  ['date', 'php:m/d/Y'],
        		],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
