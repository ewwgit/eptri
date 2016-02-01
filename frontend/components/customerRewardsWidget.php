<?php
namespace app\components;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\Customer;
use yii\helpers\Url;

class customerRewardsWidget extends Widget{
	public $message;
	
	public function init(){
		parent::init();
		
	}
	
	public function run(){
		
		
		$model = new Customer();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			
		}
		else {
			$errores = $model->getErrors();
		}
		
			return $this->render('customerRewards', [
					'model' => $model,
			]);
		
		   
	}
}
?>