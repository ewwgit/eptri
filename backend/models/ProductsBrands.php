<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "products_brands".
 *
 * @property integer $pbId
 * @property integer $productId
 * @property integer $brandId
 * @property string $productImage
 * @property string $status
 * @property integer $createdBy
 * @property integer $updatedBy
 * @property string $createdDate
 * @property string $updatedDate
 * @property string $Ipaddress
 */
class ProductsBrands extends \yii\db\ActiveRecord
{
	public $file;
	public $nutritionInfo;
	public $productupdateImage;
	public $FileUpload;
	public $externalFiles;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products_brands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productId', 'brandId',  'status' ], 'required'],
           /*  [['productId', 'brandId', 'createdBy', 'updatedBy'], 'integer'],
            [['productImage', 'status'], 'string'], */
            [['createdBy', 'updatedBy', 'createdDate', 'updatedDate', 'Ipaddress','productImage','productupdateImage','externalFiles'], 'safe'],
           /*  [['Ipaddress'], 'string', 'max' => 20], */
        	[['file'],'file'],
        	[['FileUpload'], 'file', 'skipOnEmpty' => false, 'extensions' => 'csv','on' => ['productsbrandsupload']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pbId' => 'Pb ID',
            'productId' => 'Product ID',
            'brandId' => 'Brand ID',
            'productImage' => 'Product Image',
            'status' => 'Status',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
            'Ipaddress' => 'Ipaddress',
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
    public function getBrand()
    {
    	return $this->hasOne(Brandsmaster::className(), ['brandId' => 'brandId']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
    	return $this->hasOne(Admin::className(), ['id' => 'createdBy']);
    }
    public function beforeSave($insert)
    {
    	if (parent::beforeSave($insert)) {
    		$this->createdBy = Yii::$app->user->identity->id;
    		$this->updatedBy = Yii::$app->user->identity->id;
    		$this->Ipaddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    		return true;
    	} else {
    		return false;
    	}
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
}
