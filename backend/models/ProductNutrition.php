<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product_nutrition".
 *
 * @property integer $nutritionId
 * @property string $productCode
 * @property string $brandName
 * @property string $Calories
 * @property string $ Saturated Fat
 * @property string $ Trans Fat
 * @property string $Cholesterol
 * @property string $Sodium
 * @property string $Potassium
 * @property string $Dietary Fiber
 * @property string $ Sugars
 * @property string $ vitamin_A
 * @property string $vitamin_C
 * @property string $Calcium
 * @property string $Iron
 * @property string $Copper
 * @property string $Folic Acid
 * @property string $Iodine
 * @property string $Magnesium
 * @property string $Niacin
 * @property string $Phosphorus
 * @property string $Riboflavin
 * @property string $Thiamin
 * @property string $vitamin_B12
 * @property string $vitamin_B6
 * @property string $vitamin_D
 * @property string $vitamin_E
 * @property string $Zinc
 */
class ProductNutrition extends \yii\db\ActiveRecord
{
	public $FileUpload;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_nutrition';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productCode', 'brandName', 'Calories', 'Saturated_Fat', 'Trans_Fat', 'Cholesterol', 'Sodium', 'Potassium', 'Dietary_Fiber', 'Sugars', 'vitamin_A', 'vitamin_C', 'Calcium', 'Iron', 'Copper', 'Folic_Acid', 'Iodine', 'Magnesium', 'Niacin', 'Phosphorus', 'Riboflavin', 'Thiamin', 'vitamin_B12', 'vitamin_B6', 'vitamin_D', 'vitamin_E', 'Zinc','FileUpload'], 'safe'],
            [['productCode', 'brandName', 'Calories', 'Saturated_Fat', 'Trans_Fat', 'Cholesterol', 'Sodium', 'Potassium', 'Dietary_Fiber', 'Sugars', 'vitamin_A', 'vitamin_C', 'Calcium', 'Iron', 'Copper', 'Folic_Acid', 'Iodine', 'Magnesium', 'Niacin', 'Phosphorus', 'Riboflavin', 'Thiamin', 'vitamin_B12', 'vitamin_B6', 'vitamin_D', 'vitamin_E', 'Zinc'], 'string', 'max' => 200],
        	[['FileUpload'], 'file', 'skipOnEmpty' => false, 'extensions' => 'csv'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nutritionId' => 'Nutrition ID',
            'productCode' => 'Product Code',
            'brandName' => 'Brand Name',
            'Calories' => 'Calories',
            'Saturated_Fat' => 'Saturated  Fat',
            'Trans_Fat' => 'Trans  Fat',
            'Cholesterol' => 'Cholesterol',
            'Sodium' => 'Sodium',
            'Potassium' => 'Potassium',
            'Dietary_Fiber' => 'Dietary  Fiber',
            'Sugars' => 'Sugars',
            'vitamin_A' => 'Vitamin  A',
            'vitamin_C' => 'Vitamin  C',
            'Calcium' => 'Calcium',
            'Iron' => 'Iron',
            'Copper' => 'Copper',
            'Folic_Acid' => 'Folic  Acid',
            'Iodine' => 'Iodine',
            'Magnesium' => 'Magnesium',
            'Niacin' => 'Niacin',
            'Phosphorus' => 'Phosphorus',
            'Riboflavin' => 'Riboflavin',
            'Thiamin' => 'Thiamin',
            'vitamin_B12' => 'Vitamin  B12',
            'vitamin_B6' => 'Vitamin  B6',
            'vitamin_D' => 'Vitamin  D',
            'vitamin_E' => 'Vitamin  E',
            'Zinc' => 'Zinc',
        ];
    }
}
