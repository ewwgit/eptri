<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaticPages;

/**
 * StaticpagesSearch represents the model behind the search form about `app\models\Staticpages`.
 */
class StaticpagesSearch extends Staticpages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staticId', 'createdBy', 'updatedBy'], 'integer'],
            [['pageTitle', 'pageContent', 'seoKeys', 'metaKeys', 'status', 'createdDate', 'updatedDate', 'ipAddress'], 'safe'],
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
        $query = StaticPages::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        		'pagination' => [
        				'pageSize' => 25,
        		],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'staticId' => $this->staticId,
            'createdBy' => $this->createdBy,
            'updatedBy' => $this->updatedBy,
            'createdDate' => $this->createdDate,
            'updatedDate' => $this->updatedDate,
        ]);

        $query->andFilterWhere(['like', 'pageTitle', $this->pageTitle])
            ->andFilterWhere(['like', 'pageContent', $this->pageContent])
            ->andFilterWhere(['like', 'seoKeys', $this->seoKeys])
            ->andFilterWhere(['like', 'metaKeys', $this->metaKeys])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'ipAddress', $this->ipAddress]);

        return $dataProvider;
    }
}
