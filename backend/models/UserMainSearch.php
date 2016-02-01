<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UserMain;

/**
 * UserMainSearch represents the model behind the search form about `backend\models\UserMain`.
 */
class UserMainSearch extends UserMain
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'roleId'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'auth_key', 'password', 'createdDate', 'modifiedDate'], 'safe'],
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
    	if(isset($params['roleId']))
    	{
    		$query = UserMain::find()->where(['roleId' => $params['roleId']]);
    	}
    	else 
    	{
        $query = UserMain::find();
    	}

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('register');
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'roleId' => $this->roleId,
            'createdDate' => $this->createdDate,
            'modifiedDate' => $this->modifiedDate,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            
            ->andFilterWhere(['like', 'register.firstName', $this->id])
            ->andFilterWhere(['like', 'register.lastName', $this->id])
            ->andFilterWhere(['like', 'register.middleName', $this->id])
            ->andFilterWhere(['like', 'register.gender', $this->id])
            ->andFilterWhere(['like', 'register.dob', $this->id])
            ->andFilterWhere(['like', 'register.mobile', $this->id])
            ->andFilterWhere(['like', 'register.mobile2', $this->id])
            ->andFilterWhere(['like', 'register.address1', $this->id])
            ->andFilterWhere(['like', 'register.address2', $this->id])
            ->andFilterWhere(['like', 'register.city', $this->id])
            ->andFilterWhere(['like', 'register.state', $this->id])
            ->andFilterWhere(['like', 'register.country', $this->id])
            ->andFilterWhere(['like', 'register.zip', $this->id])
            ->andFilterWhere(['like', 'register.storeName', $this->id])
            ->andFilterWhere(['like', 'register.storeAddress', $this->id])
            ->andFilterWhere(['like', 'register.storeImage', $this->id])
            
            
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
