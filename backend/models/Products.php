<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $productId
 * @property string $productName
 * @property integer $pIdC
 * @property string $productBrand
 * @property string $productImg
 * @property string $productNewchat
 * @property string $status
 * @property string $createdDate
 * @property string $updatedDate
 *
 * @property Categories $pIdC0
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	
	 public $file;
	 public $nutritionInfo;
	 public $FileUpload;
	 public $externalFiles;
	 public $categoryName;
	 public $brandName;
	 
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productName','productCode', 'categoryId',   'status', 'createdDate', 'updatedDate'],
               'required'],
            [['categoryId'], 'integer'],
            [[  'status'], 'string'],
        	[['file'],'file'],	
            [['createdDate', 'updatedDate','description','nutritionInfo','externalFiles'], 'safe'],
            [['productName'], 'string', 'max' => 200],
        	[['FileUpload'], 'file', 'skipOnEmpty' => false, 'extensions' => 'csv','on' => ['productsupload']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'productCode' => 'Product Code',
            'productName' => 'Product Name',
            'categoryId' => 'categoryName',
            'brandId' => 'Brand',
            'status' => 'Status',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
        	'file' => 'productImage',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPIdC0()
    {
        return $this->hasOne(Categories::className(), ['categoryId' => 'categoryId']);
    }
    
    public static function  getProductCode($id)
    {
    	$productInfo = Products::find()->select(['productCode','productName'])->where(['id' => $id])->one();
    	 
    	return $productInfo;
    }
    
    public static function  getProductId($name)
    {
    	$productInfo = Products::find()->select(['id'])->where(['productName' => $name])->one();
    
    	return $productInfo;
    }
    
}
