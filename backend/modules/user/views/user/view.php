<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Countries;
use frontend\models\States;

/* @var $this yii\web\View */
/* @var $model backend\models\UserMain */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'email:email',
        	[
        	'attribute'=>'status',
        	'label' => 'Status',
        	'value'=>$status,
        	],
        	[
        	'attribute'=>'roleId',
        	'label' => 'Role',
        	'value'=>$role,
        	],
        	
        		'register.firstName',
        		'register.lastName',
        		'register.middleName',
        		'register.gender',
        		'register.dob',
        		'register.mobile',
        		'register.mobile2',
        		'register.address1',
        		'register.address2',
        		
        		[
        		'attribute'=>'country',
        		'label' => 'Country',
        		'value'=> Countries::getCountryName($model->register->country),
        		],
        		
        		[
        		'attribute'=>'state',
        		'label' => 'State',
        		'value'=> States::getStateName($model->register->state),
        		],
        		'register.city',
        		'register.zip',
        		
        		
            
        ],
    ]) ?>

</div>
