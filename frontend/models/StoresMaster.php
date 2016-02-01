<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stores_master".
 *
 * @property integer $smId
 * @property integer $vendorId
 * @property integer $totalSaleItems
 * @property integer $isStoreOffer
 * @property string $offer
 * @property string $offerStartDate
 * @property string $offerEndDate
 * @property string $createdDateTime
 * @property string $updatedDateTime
 */
class StoresMaster extends \yii\db\ActiveRecord
{
	public $FileUpload;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stores_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendorId', 'totalSaleItems'], 'required'],
           // [['vendorId', 'totalSaleItems', 'isStoreOffer'], 'integer'],
            [['offerStartDate', 'offerEndDate', 'createdDateTime', 'updatedDateTime','offerType', 'offer', 'offerStartDate', 'offerEndDate'], 'safe'],
            //[['offer'], 'string', 'max' => 200],
        	
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'smId' => 'Sm ID',
            'vendorId' => 'Vendor ID',
            'totalSaleItems' => 'Total Sale Items',
            'offerType' => 'Offer Type',
            'offer' => 'Offer',
            'offerStartDate' => 'Offer Start Date',
            'offerEndDate' => 'Offer End Date',
            'createdDateTime' => 'Created Date Time',
            'updatedDateTime' => 'Updated Date Time',
        ];
    }
}
