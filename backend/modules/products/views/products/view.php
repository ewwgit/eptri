<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = $model->productName;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

//echo "<pre>"; print_r($model);

?>
<div class="products-view">

    <h1><?php //echo  Html::encode($this->title) ?></h1>

    <?php //echo "<pre>";print_r($model);exit;?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'productCode',
            'productName',
           
	        'pIdC0.categoryName',
	   
            
        		'description',
        	//'productImage',
        		
        		
           
            'status',
            [
        		'attribute' => 'createdDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        		[
        		'attribute' => 'updatedDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        ],
    ]) ?>
    <?php if(isset($model->nutritionInfo) && !(empty($model->nutritionInfo))){?>
    <div>Nutrition Information</div>
     <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
        		[
        		'attribute'=>'nutritionInfo.Calories',
        		'label' => 'Calories',
        		'value' => $model->nutritionInfo->Calories
        		],
        		
        		[
        		'attribute'=>'nutritionInfo.Saturated_Fat',
        		'label' => 'Saturated Fat',
        		'value' => $model->nutritionInfo->Saturated_Fat
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Trans_Fat',
        		'label' => 'Trans Fat',
        		'value' => $model->nutritionInfo->Trans_Fat
        		],
        		
        		[
        		'attribute'=>'nutritionInfo.Cholesterol',
        		'label' => 'Cholesterol',
        		'value' => $model->nutritionInfo->Cholesterol
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Sodium',
        		'label' => 'Sodium',
        		'value' => $model->nutritionInfo->Sodium
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Potassium',
        		'label' => 'Potassium',
        		'value' => $model->nutritionInfo->Potassium
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Dietary_Fiber',
        		'label' => 'Dietary Fiber',
        		'value' => $model->nutritionInfo->Dietary_Fiber
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Sugars',
        		'label' => 'Sugars',
        		'value' => $model->nutritionInfo->Sugars
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.vitamin_A',
        		'label' => 'vitamin A',
        		'value' => $model->nutritionInfo->vitamin_A
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.vitamin_C',
        		'label' => 'vitamin C',
        		'value' => $model->nutritionInfo->vitamin_C
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Calcium',
        		'label' => 'Calcium',
        		'value' => $model->nutritionInfo->Calcium
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Iron',
        		'label' => 'Iron',
        		'value' => $model->nutritionInfo->Iron
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Copper',
        		'label' => 'Copper',
        		'value' => $model->nutritionInfo->Copper
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Folic_Acid',
        		'label' => 'Folic Acid',
        		'value' => $model->nutritionInfo->Folic_Acid
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Iodine',
        		'label' => 'Iodine',
        		'value' => $model->nutritionInfo->Iodine
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Magnesium',
        		'label' => 'Magnesium',
        		'value' => $model->nutritionInfo->Magnesium
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Niacin',
        		'label' => 'Niacin',
        		'value' => $model->nutritionInfo->Niacin
        		],
        		
        		[
        		'attribute'=>'nutritionInfo.Phosphorus',
        		'label' => 'Phosphorus',
        		'value' => $model->nutritionInfo->Phosphorus
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Riboflavin',
        		'label' => 'Riboflavin',
        		'value' => $model->nutritionInfo->Riboflavin
        		],
        		
        		[
        		'attribute'=>'nutritionInfo.Thiamin',
        		'label' => 'Thiamin',
        		'value' => $model->nutritionInfo->Thiamin
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.vitamin_B12',
        		'label' => 'vitamin B12',
        		'value' => $model->nutritionInfo->vitamin_B12
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.vitamin_B6',
        		'label' => 'vitamin B6',
        		'value' => $model->nutritionInfo->vitamin_B6
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.vitamin_D',
        		'label' => 'vitamin D',
        		'value' => $model->nutritionInfo->vitamin_D
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.vitamin_E',
        		'label' => 'vitamin E',
        		'value' => $model->nutritionInfo->vitamin_E
        		],
        		
        		
        		[
        		'attribute'=>'nutritionInfo.Zinc',
        		'label' => 'Zinc',
        		'value' => $model->nutritionInfo->Zinc
        		],
        		
        	
        ],
    ]) ?>
    <?php } ?>

</div>
