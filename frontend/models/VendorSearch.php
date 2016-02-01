<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendorproducts;

/**
 * VendorSearch represents the model behind the search form about `app\models\Vendorproducts`.
 */
class VendorSearch extends Vendorproducts {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'Saleid',
								
						],
						'integer' 
				],
				[ 
						[ 
								'productId',
								'Brand',
								'Quantity',
								'uom',
								'AltQty',
								'AltUom',
								'UnitPrice',
								'SalePrice',
								'PriceUnit',
								'StartDate',
								'EndDate',
								'ReserveCount',
								'SaleInd',
								'categoryName' 
						],
						'safe' 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios ();
	}
	
	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params        	
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		if(isset($params['vendorId']))
		{
			$vendorId = $params['vendorId'];
		$query = Vendorproducts::find ()->where("vendorId = $vendorId and 	EndDate >= CURDATE()");
		}
		else 
		{
			$query = Vendorproducts::find ();
		}
		
		$dataProvider = new ActiveDataProvider ( [ 
				'query' => $query 
		] );
		
		$this->load ( $params );		
		if (! $this->validate ()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}
		
		$query->andFilterWhere ( [ 
				'Saleid' => $this->Saleid,
				
		] );
		
		$query->andFilterWhere ( [ 
				'like',
				'productId',
				$this->productId 
		] )->andFilterWhere ( [ 
				'like',
				'Brand',
				$this->Brand 
		] )->andFilterWhere ( [ 
				'like',
				'Quantity',
				$this->Quantity 
		] )->andFilterWhere ( [ 
				'like',
				'uom',
				$this->uom 
		] )->andFilterWhere ( [ 
				'like',
				'AltQty',
				$this->AltQty 
		] )->andFilterWhere ( [ 
				'like',
				'AltUom',
				$this->AltUom 
		] )->andFilterWhere ( [ 
				'like',
				'UnitPrice',
				$this->UnitPrice 
		] )->andFilterWhere ( [ 
				'like',
				'SalePrice',
				$this->SalePrice 
		] )->andFilterWhere ( [ 
				'like',
				'PriceUnit',
				$this->PriceUnit 
		] )->andFilterWhere ( [ 
				'like',
				'StartDate',
				$this->StartDate 
		] )->andFilterWhere ( [ 
				'like',
				'EndDate',
				$this->EndDate 
		] )->andFilterWhere ( [ 
				'like',
				'ReserveCount',
				$this->ReserveCount 
		] )->andFilterWhere ( [ 
				'like',
				'SaleInd',
				$this->SaleInd 
		] )->andFilterWhere ( [ 
				'like',
				'categoryName',
				$this->categoryName 
		] );
		//print_r($dataProvider->getModels());exit();
		return $dataProvider;
	}
}
