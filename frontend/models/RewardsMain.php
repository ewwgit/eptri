<?php

namespace frontend\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "rewards_main".
 *
 * @property integer $rmId
 * @property integer $uId
 * @property string $storeId
 * @property integer $rewards
 * @property integer $rdId
 *
 * @property RewardsDetails $rd
 * @property User $u
 */
class RewardsMain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rewards_main';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rmId', 'uId', 'storeId', 'rewards', 'rdId'], 'safe'],
            /* [['rmId', 'uId', 'rewards', 'rdId'], 'integer'],
            [['storeId'], 'string', 'max' => 200] */
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rmId' => 'Rm ID',
            'uId' => 'U ID',
            'storeId' => 'Store ID',
            'rewards' => 'Rewards',
            'rdId' => 'Rd ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRd()
    {
        return $this->hasOne(RewardsDetails::className(), ['rdId' => 'rdId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getU()
    {
        return $this->hasOne(User::className(), ['id' => 'uId']);
    }
    
    public function getRewards()
    {
    	$storeId = VendorRegister::find()->select(['vendor_unique_id'])->where(['uid' => Yii::$app->user->id]);
    	$query = new Query;
    	$query->from('rewards_main')
    	->where(['storeId' => $storeId]);
    	$dataProvider = new ActiveDataProvider([
    			'query' => $query,
    			'pagination' => [
    					'pageSize' => 25,
    			],
    	]);
    	return $dataProvider;
    }
    
    public function getRewardsByuId($uId)
    {
    	$storeId = VendorRegister::find()->select(['vendor_unique_id'])->where(['uid' => Yii::$app->user->id]);
    	$userRewards = RewardsMain::find()->where(['storeId' => $storeId,'uId'=>$uId])->one();
    	return $userRewards;
    	
    }
}
