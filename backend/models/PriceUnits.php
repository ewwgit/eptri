<?php

namespace backend\models;


use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "price_units".
 *
 * @property integer $pirceunitId
 * @property string $priceUnitName
 * @property string $description
 * @property string $status
 * @property integer $createdBy
 * @property integer $updatedBy
 * @property integer $createdDate
 * @property integer $updatedDate
 * @property string $ipaddress
 *
 * @property Admin $createdBy0
 * @property Admin $updatedBy0
 */
class PriceUnits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_units';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['priceUnitName', 'description', 'status'], 'required'],
            [['description', 'status'], 'string'],
        	 //[['createdBy', 'updatedBy', 'createdDate', 'updatedDate'], 'integer'],
            [['priceUnitName'], 'string', 'max' => 3],
            [['ipaddress'], 'string', 'max' => 20],
        		
        		[
	        		'priceUnitName',
	        		'unique',
	        		'message' => 'priceUnit Name already exists try for new'
        		],
        	[['createdDate', 'updatedDate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pirceunitId' => 'Pirceunit ID',
            'priceUnitName' => 'Price Unit Name',
            'description' => 'Description',
            'status' => 'Status',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
            'ipaddress' => 'Ipaddress',
        ];
    }

    /***
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(Admin::className(), ['id' => 'createdBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy0()
    {
        return $this->hasOne(Admin::className(), ['id' => 'updatedBy']);
    }
    
    /**
     *
     * @param unknown $insert
     * @return boolean
     */
    
    public function beforeSave($insert)
    {
    	if (parent::beforeSave($insert)) {
    
    		$this->createdBy = 1;
    		$this->updatedBy = 1;
    		$this->ipaddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    		return true;
    	} else {
    		$this->createdBy = 1;
    		$this->updatedBy = 1;
    		return false;
    	}
    }
    
    /****
     *
     * @return multitype:multitype:string \yii\db\Expression NULL
     */
    public function behaviors()
    {
    	return [
    			[
    					'class' => TimestampBehavior::className(),
    					'createdAtAttribute' => 'createdDate',
    					'updatedAtAttribute' => 'updatedDate',
    					'value' => new Expression('NOW()'),
    			],
    	];
    }
    
    
}
