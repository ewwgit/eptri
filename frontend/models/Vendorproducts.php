<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "vendorproducts".
 *
 * @property integer $vendorId
 * @property string $productId
 * @property string $Brand
 * @property string $Quantity
 * @property string $uom
 * @property string $AltQty
 * @property string $AltUom
 * @property string $UnitPrice
 * @property string $SalePrice
 * @property string $PriceUnit
 * @property string $StartDate
 * @property string $EndDate
 * @property string $ReserveCount
 * @property string $SaleInd
 * @property string $FileUpload
 */
class Vendorproducts extends \yii\db\ActiveRecord
{
	public $FileUpload;
	public $offerType;
	public $offer;
	public $offerStartDate;
	public $offerEndDate;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saleitems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendorId', 'productId', 'Brand', 'Quantity', 'uom', 'AltQty', 'AltUom', 'UnitPrice', 'SalePrice', 'PriceUnit','offerStartDate','offerEndDate', 'StartDate', 'EndDate', 'ReserveCount', 'SaleInd','categoryName'], 'required'],
            [['FileUpload'], 'required','on' => 'fileup'],
        	[['vendorId'], 'integer'],
            [['categoryName'], 'safe'],
            [['productId', 'uom'], 'string', 'max' => 200],
            [['Brand', 'Quantity', 'AltQty', 'AltUom', 'UnitPrice', 'PriceUnit', 'SaleInd'], 'string', 'max' => 100],
            [['SalePrice'], 'string', 'max' => 50],
         //   [['StartDate', 'EndDate', 'ReserveCount'], 'string', 'max' => 30],
        	[['FileUpload'], 'file', 'skipOnEmpty' => false, 'extensions' => 'csv','on' => 'fileup'],
        	[['offerType','offer','offerStartDate','offerEndDate'],'safe'],
        	['offerEndDate','compare','compareAttribute'=>'offerStartDate','operator'=>'>','message'=>'End Date must be greater than Start Date'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            
            'vendorId' => 'vendorId',
            'productId' => 'Product Name',
            'Brand' => 'Brand',
            'Quantity' => 'Qty',
            'uom' => 'Uom',
            'AltQty' => 'Alt Qty',
            'AltUom' => 'Alt Uom',
            'UnitPrice' => 'Unit Price',
            'SalePrice' => 'Sale Price',
            'PriceUnit' => 'Price Unit',
            'StartDate' => 'Start Date',
            'EndDate' => 'End Date',
            'ReserveCount' => 'Reserve Count',
            'SaleInd' => 'Sale Ind',
            'FileUpload' =>'FileUpload',
        	'categoryName' =>'Category Name'
        ];
    }
   
   
    	// Types
    
    	/**
    	 * Selecting from the list of answers
    	 */
    	const TYPE_CLOSED = 1;
    
    	/**
    	 * Writing answer manually
    	 */
    	const TYPE_OPENED = 2;
    
    	
    	/**
    	 * @return array
    	*/
  	public static function getTypesList()
    	{
    		return [
    				self::TYPE_CLOSED => 'Closed',
    				self::TYPE_OPENED => 'Opened',
    		];
    	}
    }
