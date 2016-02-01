<?php

use yii\helpers\Html;
use yii\widgets\DetailView;




/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = $model->productId;
$this->params['breadcrumbs'][] = ['label' => 'Vendorproducts', 'url' => ['']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendorproducts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->productId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->productId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
       
        
        ]) ;
                    
        ?>
    </p>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'vendorId',
            'productId',
            'Brand',
            'Quantity',
            'UOM',
            'AltQty',
            'AltUom',
            'UnitPrice',
            'SalePrice',
            'PriceUnit',
            'StartDate',
            'EndsDate',
            'ReserveCount',
            'SaleInd',
        	'categoryName',
           
        ],
    ]) ?>
    

</div>
