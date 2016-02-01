<?php
namespace app\components;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\LoginForm;
use yii\helpers\Url;

class loginWidget extends Widget{
	public $message;
	
	public function init(){
		parent::init();
		
	}
	
	public function run(){
		
		
		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			if($model->user->roleId == 2)
			{
				 
				return Yii::$app->getResponse()->redirect(Yii::$app->urlManager->createUrl(['vendor/vendor/']));
			}
			else
			{
				 
				return Yii::$app->getResponse()->redirect(Yii::$app->homeUrl);
			}
			//return Yii::$app->getResponse()->redirect(Yii::$app->urlManager->createUrl(['vendor/vendor/']));
		} else {
			return $this->render('login', [
					'model' => $model,
			]);
		}
		   
	}
}
?>