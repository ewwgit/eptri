<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Stores;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\VendorSearch;

class StoresController extends Controller
{
	public $layout = "@app/views/layouts/maininner";
	
	public function behaviors() {
		return [ 
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'delete' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	public function actionSearch() {
		$model = new Stores ();
		$searchModel = new VendorSearch ();
		$dataProvider = $model->search();
		print_r($dataProvider);exit();
		
		return $this->render ( 'stores',['dataProvider' => $dataProvider]);
				
				
				
		
	}
	public function actionStores()
	{
		$model = new Stores();
		$dataProvider = $model->getStores();
		return $this->render('stores',['dataProvider' => $dataProvider]);
	}
}
