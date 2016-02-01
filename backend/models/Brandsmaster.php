<?php

namespace backend\models;
use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "brandsmaster".
 *
 * @property integer $brandId
 * @property string $brandName
 * @property string $description
 * @property string $status
 * @property string $createdDate
 * @property string $updatedDate
 * @property integer $createdBy
 * @property integer $updatedBy
 * @property string $ipAddress
 *
 * @property Admin $updatedBy0
 * @property Admin $createdBy0
 */
class Brandsmaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	

    public static function tableName()
    {
        return 'brandsmaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brandName',  'status'], 'required'],
            [['description', 'status'], 'string'],
        		
        		[
        		'brandName',
        		'unique',
        		'message' => 'brand Name already exists try for new'
        		],
        		
            [['createdDate', 'updatedDate', 'createdBy', 'updatedBy', 'ipAddress','description'], 'safe'],
           /*  [['createdBy', 'updatedBy'], 'integer'],
            [['brandName', 'ipAddress'], 'string', 'max' => 200] */
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'brandId' => 'Brand ID',
            'brandName' => 'Brand Name',
            'description' => 'Description',
            'status' => 'Status',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'ipAddress' => 'Ip Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy0()
    {
        return $this->hasOne(Admin::className(), ['id' => 'updatedBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(Admin::className(), ['id' => 'createdBy']);
    }
    
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
    
    public function beforeSave($insert)
    {
    	if (parent::beforeSave($insert)) {
    		$this->createdBy = Yii::$app->user->identity->id;
    		$this->updatedBy = Yii::$app->user->identity->id;
    		/* $convertedDate = strtotime($this->validFrom);
    		 $convertedEndDate = strtotime($this->validTo);
    		 $this->validFrom = date('Y-m-d',$convertedDate);
    		 $this->validTo = date('Y-m-d',$convertedEndDate); */
    		$this->ipAddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    		return true;
    	} else {
    		return false;
    	}
    }
    
    public static function  getBrandName($id)
    {
    	$brandName = Brandsmaster::find()->select('brandName')->where(['brandId' => $id])->one();
    
    	return $brandName['brandName'];
    }
    public static function  getBrandId($name)
    {
    	$brandsInfo = Brandsmaster::find()->select('brandId')->where(['brandName' => $name])->one();
    
    	return $brandsInfo;
    }
}
