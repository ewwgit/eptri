<?php

namespace frontend\models;

use yii;
use yii\base\model;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;
use yii\db\Query ;
use app\models\Vendorproducts;

class Stores extends Model {
	public $storesInfo;
	
	public function getStores()
	{
		$query = new Query;
		$query->select(['user.id','user.roleId','register.storeName','register.storeImage','register.storeAddress'])
		->from('user')
		->join(	'INNER JOIN',
				'register',
				'register.uid =user.id'
				)->where(['user.roleId' => 2]);
		$dataProvider = new ActiveDataProvider([
				'query' => $query,
				'pagination' => [
						'pageSize' => 25,
				],
		]);
		return $dataProvider;
		//print_r($dataProvider->getModels());exit();
	}
	
	public static function getTotalsalleitems($vendorId)
	{
		$totalsaleItems = Vendorproducts::find()->where("(StartDate > '2015-11-07' OR StartDate = '2015-11-07') AND vendorId=$vendorId ")->count();
		return $totalsaleItems;
	}
	
}