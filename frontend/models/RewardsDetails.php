<?php

namespace frontend\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use frontend\models\VendorRegister;
use frontend\models\StoresMaster;

/**
 * This is the model class for table "rewards_details".
 *
 * @property integer $rdId
 * @property integer $uId
 * @property string $storeId
 * @property string $rewardsFlag
 * @property string $purchaseDate
 * @property string $receiptNumber
 * @property string $receiptAmount
 * @property integer $redeemRewards
 * @property integer $newRewards
 * @property integer $confirmFlag
 * @property integer $status
 * @property string $createdDate
 * @property string $updatedDate
 * @property integer $createdBy
 * @property integer $updatedBy
 * @property string $ipaddress
 *
 * @property User $updatedBy0
 * @property User $createdBy0
 * @property RewardsMain[] $rewardsMains
 */
class RewardsDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $rewardsRequests;
	public $availableRewards;
    public static function tableName()
    {
        return 'rewards_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uId', 'storeId', 'rewardsFlag', 'purchaseDate', 'receiptNumber', 'receiptAmount', 'redeemRewards', 'newRewards', 'confirmFlag',  'createdDate', 'updatedDate', 'createdBy', 'updatedBy', 'ipaddress','rewardsRequests','comment','availableRewards'], 'safe'],
            //[['uId', 'redeemRewards', 'newRewards', 'confirmFlag', 'status', 'createdBy', 'updatedBy'], 'integer'],
            //[['purchaseDate', 'createdDate', 'updatedDate'], 'safe'],
            //[['storeId', 'rewardsFlag', 'receiptNumber', 'ipaddress'], 'string', 'max' => 200],
           // [['receiptAmount'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rdId' => 'Rd ID',
            'uId' => 'U ID',
            'storeId' => 'Store ID',
            'rewardsFlag' => 'Rewards Flag',
            'purchaseDate' => 'Purchase Date',
            'receiptNumber' => 'Receipt Number',
            'receiptAmount' => 'Receipt Amount',
            'redeemRewards' => 'Redeem Rewards',
            'newRewards' => 'New Rewards',
            'confirmFlag' => 'Confirm Flag',
            
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'ipaddress' => 'Ipaddress',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'updatedBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'createdBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRewardsMains()
    {
        return $this->hasMany(RewardsMain::className(), ['rdId' => 'rdId']);
    }
    
    public function getRewardsRequestsByStoreId() {
    	$storeId = VendorRegister::find()->select(['vendor_unique_id'])->where(['uid' => Yii::$app->user->id])->one();
    	
    	$query = new Query;
    	if(isset($_GET['request']))
    	{
    		
    		if($_GET['request'] == 1)
    		{
    			$query->from('rewards_details')
    			->where(['storeId' => $storeId->vendor_unique_id,'rewardsFlag' => 'ADD']);
    		}
    		if($_GET['request'] == 2)
    		{
    			$query->from('rewards_details')
    			->where(['storeId' => $storeId->vendor_unique_id,'rewardsFlag' => 'CONFIRMED']);
    		}
    		if($_GET['request'] == 3)
    		{
    			$query->from('rewards_details')
    			->where(['storeId' => $storeId->vendor_unique_id,'rewardsFlag' => 'REEDEEMED']);
    		}
    		if($_GET['request'] == 4)
    		{
    			
    			$query->from('rewards_details')
    			->where("(storeId = '$storeId->vendor_unique_id') AND (rewardsFlag = 'ADD') OR (rewardsFlag = 'CONFIRMED')");
    		}
    	}
    	else 
    	{
    		
    	$query->from('rewards_details')
    	->where(['storeId' => $storeId->vendor_unique_id,'rewardsFlag' => 'ADD']);
    	}
    	$dataProvider = new ActiveDataProvider([
    			'query' => $query,
    			'pagination' => [
    					'pageSize' => 25,
    			],
    	]);
    	return $dataProvider;
    	 
    	
    }
    
    
    public function getRewardsRequestsByStoreCustomerId($customerId) {
    	$storeId = VendorRegister::find()->select(['vendor_unique_id'])->where(['uid' => Yii::$app->user->id])->one();
    	 
    	$query = new Query;
    	if(isset($_GET['request']))
    	{
    
    		if($_GET['request'] == 1)
    		{
    			$query->from('rewards_details')
    			->where(['storeId' => $storeId->vendor_unique_id,'rewardsFlag' => 'ADD','uId' => $customerId]);
    		}
    		if($_GET['request'] == 2)
    		{
    			$query->from('rewards_details')
    			->where(['storeId' => $storeId->vendor_unique_id,'rewardsFlag' => 'CONFIRMED','uId' => $customerId]);
    		}
    		if($_GET['request'] == 3)
    		{
    			$query->from('rewards_details')
    			->where(['storeId' => $storeId->vendor_unique_id,'rewardsFlag' => 'REEDEEMED','uId' => $customerId]);
    		}
    		if($_GET['request'] == 4)
    		{
    			 
    			$query->from('rewards_details')
    			->where("(storeId = '$storeId->vendor_unique_id') AND ((rewardsFlag = 'ADD') OR (rewardsFlag = 'CONFIRMED')) AND uId= $customerId");
    		}
    	}
    	else
    	{
    
    		$query->from('rewards_details')
    		->where(['storeId' => $storeId->vendor_unique_id,'rewardsFlag' => 'ADD','uId' => $customerId]);
    	}
    	$dataProvider = new ActiveDataProvider([
    			'query' => $query,
    			'pagination' => [
    					'pageSize' => 25,
    			],
    	]);
    	return $dataProvider;
    
    	 
    }
    public function statusUpdate($rdId) {
   
    $RequestDetails = RewardsDetails::find()->where(['rdId' =>$rdId ])->one();	
    $vendorId = Yii::$app->user->id;
    $getRewardAmount =  StoresMaster::find()->where("vendorId = $vendorId and offerStartDate <='$RequestDetails->purchaseDate' and offerEndDate >= '$RequestDetails->purchaseDate' and 	offerType = 'Cash Back'")->one();
    $amountCount = count($getRewardAmount);
    //print_r($amountCount);exit();
    if($amountCount == 1)
    {
    $RequestDetails->rewardsFlag = 'CONFIRMED';
    $RequestDetails->newRewards = $getRewardAmount->offer;
    $requestUpdate = $RequestDetails->update();
    if ($requestUpdate)
    {
    	$rewardsMain = RewardsMain::find()->where(['rdId' => $rdId])->one();
    	$rewardsCount = count($rewardsMain);
    	if($rewardsCount != 0)
    	{
    		$rewardsMain->rewards =  $RequestDetails->newRewards+$rewardsMain->rewards;
    		$rewardsMain->rdId =  $RequestDetails->rdId;
    		$rewardsMain->storeId =  $RequestDetails->storeId;
    		$rewardsMain->uId =  $RequestDetails->uId;
    		$response = $rewardsMain->update();
    	}
    	else 
    	{
    	  $model = new RewardsMain();
    	  $model->rewards =  $RequestDetails->newRewards;
    	  $model->rdId =  $RequestDetails->rdId;
    	  $model->storeId =  $RequestDetails->storeId;
    	  $model->uId =  $RequestDetails->uId;
    	  $response = $model->save();
    	}
    	
    	
    }
    }
    else {
    	$response=0;
    }
    return $response;
    
    	 
    }
}
