<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mylists".
 *
 * @property integer $lid
 * @property string $listName
 * @property string $uid
 * @property string $productId
 */
class Mylists extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mylists';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['listName',  'productId'], 'required'],
            [['listName'], 'string'],
          
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lid' => 'Lid',
            'listName' => 'List Name',
            'uid' => 'Uid',
            'productId' => 'Product ID',
        ];
    }
    public function beforeSave($insert)
    {
    	if (parent::beforeSave($insert)) {
    		$this->uid = 115;
    		$this->productId = implode(",",$this->productId);
    		
    		return true;
    	} else {
    		return false;
    	}
    }
}
