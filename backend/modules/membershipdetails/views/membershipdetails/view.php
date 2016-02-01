<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Membershipdetails */

$this->title = $model->MembershipName;
$this->params['breadcrumbs'][] = ['label' => 'Membershipdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

 	
?>
<div class="membershipdetails-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MemId',
            'MembershipName',
            'Cost',
            'Duration',
        		
        		'freeTrailPeriod',
        		'SaleItemsPerMonth',
        		'ManageRewards',
        		'ManagedCustomerReservedItems',
        		'ManageCustomerReviews',
        		'SignUpBundlePkgCredit',
        		'OnlineFlierandBannerCopiesforPrinting',
        		'OnlinePreformatedfliersforprinting',
        		'StoreExclusiveAdds',
        		'OnlineFAQs',
        		'StepbyStepTutorialVideos',
        		'EMailSupport',
        		'PhoneSupport',
        		'BusinessAssesmentSurvey',
        		'CustomerDynamics',
        		'InventoryReports',
        		'CustomerBehaviourofPurchase',
        		'BusinessImprovementTips',
        		'ClientSpecificPlugIns',
        		
            
            'Status',
            [
        		'attribute' => 'CreatedDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        		[
        		'attribute' => 'UpdatedDate',
        		
        		'format' =>  ['date', 'php:m/d/Y H:i:s'],
        		],
        ],
    ]) ?>

</div>
