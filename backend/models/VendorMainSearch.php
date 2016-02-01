<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UserMain;

/**
 * UserMainSearch represents the model behind the search form about `backend\models\UserMain`.
 */
class VendorMainSearch extends UserMain
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
        $query->joinWith('vendorregister');
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
            
            ->andFilterWhere(['like', 'vendorregister.firstName', $this->id])
            ->andFilterWhere(['like', 'vendorregister.lastName', $this->id])
            ->andFilterWhere(['like', 'vendorregister.middleName', $this->id])
            ->andFilterWhere(['like', 'vendorregister.gender', $this->id])
            ->andFilterWhere(['like', 'vendorregister.dob', $this->id])
            ->andFilterWhere(['like', 'vendorregister.mobile', $this->id])
            ->andFilterWhere(['like', 'vendorregister.mobile2', $this->id])
            ->andFilterWhere(['like', 'vendorregister.address1', $this->id])
            ->andFilterWhere(['like', 'vendorregister.address2', $this->id])
            ->andFilterWhere(['like', 'vendorregister.city', $this->id])
            ->andFilterWhere(['like', 'vendorregister.state', $this->id])
            ->andFilterWhere(['like', 'vendorregister.country', $this->id])
            ->andFilterWhere(['like', 'vendorregister.zip', $this->id])
            ->andFilterWhere(['like', 'vendorregister.storeName', $this->id])
            ->andFilterWhere(['like', 'vendorregister.storeAddress', $this->id])
            ->andFilterWhere(['like', 'vendorregister.storeImage', $this->id])
            
            
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
