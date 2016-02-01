<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Brandsmaster;
use backend\models\Products;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductsBrandsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products Brands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-brands-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products Brands', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
        		['attribute'=>'productId',
        		'label' => 'Product Name',
        		'value' => function ($data) {
        		$productName = Products::getProductCode($data->productId);
        		
        		return $productName['productName'];
        		},
        		],
            
        		['attribute'=>'brandId',
        		'label' => 'BrandName',
        		'value' => function ($data) {
        		$brandName = Brandsmaster::getBrandName($data->brandId);
        		
        		return $brandName;
        		},
        		],
            
            ['attribute'=>'productImage',
            'format'=>['image',['width'=>'100','height'=>'100']],
            //'htmlOptions'=>array('width'=>'40px'),
            
            //other attributes
            
            ],
            'status',
            // 'createdBy',
            // 'updatedBy',
            // 'createdDate',
            // 'updatedDate',
            // 'Ipaddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
