<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "membershipdetails".
 *
 * @property integer $MemId
 * @property string $MembershipName
 * @property string $Cost
 * @property string $Duration
 * @property string $Status
 * @property string $CreatedDate
 * @property string $UpdatedDate
 */
class Membershipdetails extends \yii\db\ActiveRecord
{
	public $packages;
	public $packagesInfo;
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
            [['MembershipName', 'Cost', 'Duration', 'Status', 'CreatedDate', 'UpdatedDate'], 'required'],
            [['CreatedDate', 'UpdatedDate','packages','packagesInfo'], 'safe'],
            [['MembershipName', 'Status'], 'string', 'max' => 100],
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
    
    public function getPackages() {
    	$packagesModel = Membershipdetails::find()->select(['MemId', 'MembershipName','cost'])->where(['status' => 'Active'])
    	->asArray()
    	->all();
    	$packageAry = array();
    	$i=0;
    	foreach ($packagesModel as $packages)
    	{
    		$packageAry[$i]['id'] = $packages['MemId'];
    		$packageAry[$i]['name'] = $packages['MembershipName'];
    		$packageAry[$i]['cost'] = $packages['cost'];
    		$i++;
    	}
    	return $packageAry;
    	//print_r($packageAry);exit();
    }
}
