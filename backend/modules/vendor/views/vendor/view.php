<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Countries;
use frontend\models\States;

/* @var $this yii\web\View */
/* @var $model backend\models\UserMain */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Vendors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-main-view">

    
<?php if($model->status == 10)
{
 $status = 'Active';
}
else 
{
	$status = 'In-Active';
}?>
<?php if($model->roleId == 2)
{
 $role = 'Vendor';
}
else  if($model->roleId == 3)
{
	$role = 'User';
}
else {
	$role = 'Admin';
}?>

<?php if($model->vendorregister->storeImage != ''){?>
						 		<?php $imgeurl = str_replace("backend","frontend",Yii::getAlias('@web')).'/'.$model->vendorregister->storeImage;?>
						 		
						 		<?php } ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
        		[
        		'attribute'=>'vendor_unique_id',
        		'label' => 'Store Id',
        		'value'=>$model->vendorregister->vendor_unique_id,
        		],
            'username',
            'email:email',
        	
        		[
        		'attribute'=>'storeName',
        		'label' => 'Store Name',
        		'value'=>$model->vendorregister->storeName,
        		],
        	[
        	'attribute'=>'roleId',
        	'label' => 'Role',
        	'value'=>$role,
        	],
        	
        		'vendorregister.firstName',
        		'vendorregister.lastName',
        		'vendorregister.middleName',
        		'vendorregister.mobile',
        		'vendorregister.mobile2',
        		
        		
        		[
        		'attribute'=>'fax',
        		'label' => 'Fax',
        		'value'=> $model->vendorregister->fax,
        		],
        		
        		[
        		'attribute'=>'country',
        		'label' => 'Country',
        		'value'=> Countries::getCountryName($model->vendorregister->country),
        		],
        		
        		[
        		'attribute'=>'state',
        		'label' => 'State',
        		'value'=> States::getStateName($model->vendorregister->state),
        		],
        		
        		'vendorregister.city',
        		'vendorregister.zip',
        		[
        		'attribute'=>'storeAddress',
        		'label' => 'Store Address',
        		'value'=>$model->vendorregister->storeAddress,
        		],
        		'vendorregister.address2',
        		['attribute'=>'storeImage',
        		'format' => 'html',
        		'value'=>Html::img($model->vendorregister->storeImage ? $imgeurl : '@web/images/events-default.png',['width' => '250px','height' => '250px']),
        		
        		//'htmlOptions'=>array('width'=>'40px'),
        		],
        		[
        		'attribute'=>'status',
        		'label' => 'Status',
        		'value'=>$status,
        		],
        		
            
        ],
    ]) ?>

</div>
