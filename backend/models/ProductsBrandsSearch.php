<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProductsBrands;

/**
 * ProductsBrandsSearch represents the model behind the search form about `backend\models\ProductsBrands`.
 */
class ProductsBrandsSearch extends ProductsBrands
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pbId', 'productId', 'brandId', 'createdBy', 'updatedBy'], 'integer'],
            [['productImage', 'status', 'createdDate', 'updatedDate', 'Ipaddress'], 'safe'],
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
        $query = ProductsBrands::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'pbId' => $this->pbId,
            'productId' => $this->productId,
            'brandId' => $this->brandId,
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
            'createdDate' => $this->createdDate,
            'updatedDate' => $this->updatedDate,
        ]);

        $query->andFilterWhere(['like', 'productImage', $this->productImage])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'Ipaddress', $this->Ipaddress]);

        return $dataProvider;
    }
}
