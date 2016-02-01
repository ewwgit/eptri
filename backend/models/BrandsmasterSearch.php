<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Brandsmaster;

/**
 * BrandsmasterSearch represents the model behind the search form about `backend\models\Brandsmaster`.
 */
class BrandsmasterSearch extends Brandsmaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brandId'], 'integer'],
            [['brandName', 'description', 'status', 'createdDate', 'updatedDate', 'ipAddress','createdBy','updatedBy'], 'safe'],
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
        $query = Brandsmaster::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
     // $query->joinWith('createdBy0','updatedBy0');
    // $query->joinWith('updatedBy0');

        $query->andFilterWhere([
            'brandId' => $this->brandId,
            'createdDate' => $this->createdDate,
            'updatedDate' => $this->updatedDate,
            // 'createdBy' => $this->createdBy,
            //'updatedBy' => $this->updatedBy,
        ]);

        $query->andFilterWhere(['like', 'brandName', $this->brandName])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status])
           //  ->andFilterWhere(['like', 'admin.username', $this->createdBy])
           // ->andFilterWhere(['like', 'admin.username', $this->updatedBy])
            ->andFilterWhere(['like', 'ipAddress', $this->ipAddress]);

        return $dataProvider;
    }
}
