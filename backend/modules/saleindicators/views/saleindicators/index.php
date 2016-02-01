<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sale Indicators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-indicators-index">


    <p>
        <?= Html::a('Create Sale Indicators', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'saleindicatorId',
            'indicatorCode',
            'description:ntext',
            'status',
            //'createdBy',
            // 'updatedBy',
            // 'createdDate',
            // 'updatedDate',
            // 'ipaddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
