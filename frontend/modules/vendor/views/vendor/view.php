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
    				 <h3><?= Html::encode($this->title) ?></h3>  
			   
			   
			    
			    
			    <?= DetailView::widget([
			        'model' => $model,
			        'attributes' => [
			            
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
			           
			        ],
			    ]) ?>
			    
			</div>


<style>
p a {

  margin-top:0px;
}
  
</style>

