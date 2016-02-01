<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "membershipdetails".
 *
 * @property integer $MemId
 * @property string $MembershipName
 * @property string $Cost
 * @property string $Duration
 * @property integer $SaleItemsUpload
 * @property integer $StoreBanners
 * @property integer $CustomerBroachers
 * @property integer $ReserveItemsUpdate
 * @property integer $CustomerReviewsMonitor
 * @property integer $EmailSupport
 * @property integer $CustomersStatistics
 * @property integer $PhoneSupport
 * @property integer $YourStoreadds
 * @property string $BusinessGrowTips
 * @property string $InventoryReports
 * @property string $Status
 * @property string $CreatedDate
 * @property string $UpdatedDate
 */
class Membershipdetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'membershipdetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MembershipName', 'Cost', 'Duration',  'Status'], 'required'],
        	[['freeTrailPeriod', 'SaleItemsPerMonth', 'ManageRewards',  'ManagedCustomerReservedItems', 'ManageCustomerReviews', 'SignUpBundlePkgCredit',  'OnlineFlierandBannerCopiesforPrinting', 'OnlinePreformatedfliersforprinting', 'StoreExclusiveAdds',  'OnlineFAQs', 'StepbyStepTutorialVideos', 'EMailSupport',  'PhoneSupport', 'BusinessAssesmentSurvey', 'CustomerDynamics',  'InventoryReports', 'CustomerBehaviourofPurchase', 'BusinessImprovementTips',  'ClientSpecificPlugIns'], 'safe'],
            
            [['Status'], 'string'],
            [['CreatedDate', 'UpdatedDate'], 'safe'],
            [['MembershipName'], 'string', 'max' => 100],
        		
        		[
	        		'MembershipName',
	        		'unique',
	        		'message' => 'Membership Name already exists try for new'
        		],
        		
            [['Cost', 'Duration'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MemId' => 'Mem ID',
            'MembershipName' => 'Membership Name',
            'Cost' => 'Cost',
            'Duration' => 'Duration',
			'Status' => 'Status',
            'CreatedDate' => 'Created Date',
            'UpdatedDate' => 'Updated Date',
        ];
    }
    
    public function behaviors()
    {
    	return [
    			[
    					'class' => TimestampBehavior::className(),
    					'createdAtAttribute' => 'CreatedDate',
    					'updatedAtAttribute' => 'UpdatedDate',
    					'value' => new Expression('NOW()'),
    			],
    	];
    }
}
