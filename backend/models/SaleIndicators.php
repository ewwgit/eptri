<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "sale_indicators".
 *
 * @property integer $saleindicatorId
 * @property integer $indicatorCode
 * @property string $description
 * @property string $status
 * @property integer $createdBy
 * @property integer $updatedBy
 * @property string $createdDate
 * @property string $updatedDate
 * @property string $ipaddress
 */
class SaleIndicators extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sale_indicators';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['indicatorCode', 'description', 'status'], 'required'],
            [['createdBy', 'updatedBy'], 'integer'],
            [['indicatorCode','description', 'status'], 'string'],
        		[
	        		'indicatorCode',
	        		'unique',
	        		'message' => 'indicator Code already exists try for new'
        		],
        		
        		
            [['createdDate', 'updatedDate'], 'safe'],
            [['ipaddress'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'saleindicatorId' => 'Saleindicator ID',
            'indicatorCode' => 'Indicator Code',
            'description' => 'Description',
            'status' => 'Status',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
            'ipaddress' => 'Ipaddress',
        ];
    }
    
		
		    /****
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
