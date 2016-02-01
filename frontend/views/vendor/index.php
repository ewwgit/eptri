<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendorproducts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendorproducts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Products', ['upload'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'vendorId',
            'productId',
            'Brand',
            'Quantity',
            'uom',
            'AltQty',
            'AltUom',
            'UnitPrice',
            'SalePrice',
            'PriceUnit',
            'StartDate',
            'EndDate',
            'ReserveCount',
            'SaleInd',
            'categoryName',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
   
