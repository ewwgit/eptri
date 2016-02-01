<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "categories".
 *
 * @property integer $categoryId
 * @property string $categoryName
 * @property string $status
 * @property string $createdDate
 * @property string $updatedDate
 *
 * @property Products[] $products
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryName', 'status'], 'required'],
            [['status'], 'string'],
        		
        	[
        		'categoryName',
        		'unique',
        		'message' => 'category Name already exists try for new'
        		],
        			
            [['createdDate', 'updatedDate'], 'safe'],
            [['categoryName'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoryId' => 'Category ID',
            'categoryName' => 'Category Name',
            'status' => 'Status',
           // 'createdDate' => 'Created Date',
           // 'updatedDate' => 'Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['pIdC' => 'categoryId']);
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
    public static function  getCategoryId($catName)
    {
    	$categoryName = Categories::find()->select('categoryId')->where(['categoryName' => $catName])->one();
    	
    	return $categoryName['categoryId'];
    }
}
