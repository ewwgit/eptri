<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `backend\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['productName', 'categoryId',   'status', 'createdDate', 'updatedDate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Products::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
       		//$query->joinWith('Categories');
         $query->joinWith('pIdC0');
           

        $query->andFilterWhere([
            'productCode' => $this->productCode,
			'createdDate' => $this->createdDate,
            'updatedDate' => $this->updatedDate,
        ]);
  
          $query->andFilterWhere(['like', 'productName', $this->productName])
              ->andFilterWhere(['like', 'status', $this->status])
              ->andFilterWhere(['like', 'categories.categoryName', $this->categoryId]);
          return $dataProvider;
    }
}
