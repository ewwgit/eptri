<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Membershipdetails;

/**
 * MembershipdetailsSearch represents the model behind the search form about `backend\models\Membershipdetails`.
 */
class MembershipdetailsSearch extends Membershipdetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MemId'], 'integer'],
            [['MembershipName', 'Cost', 'Duration', 'Status', 'CreatedDate', 'UpdatedDate'], 'safe'],
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
        $query = Membershipdetails::find();

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
            'MemId' => $this->MemId,
            
            'CreatedDate' => $this->CreatedDate,
            'UpdatedDate' => $this->UpdatedDate,
        ]);

        $query->andFilterWhere(['like', 'MembershipName', $this->MembershipName])
            ->andFilterWhere(['like', 'Cost', $this->Cost])
            ->andFilterWhere(['like', 'Duration', $this->Duration])
            
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
