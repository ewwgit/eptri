<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\RegisterForm;
use frontend\models\TestLogin;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\UploadedFile;


class RegisterController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function actionRegister() {
		
		
		   $model = new RegisterForm ();
		
		if ($model->load ( Yii::$app->request->post()) && $model->validate ()) {
			$model->RegisterType = 3 ;
		 $registerStatus = $model->register();
		 Yii::$app->getSession()->setFlash('success', 'Successfully Registered.');
// 	if ($model->sendEmail()) {
//                 Yii::$app->getSession()->setFlash('success', 'Successfully Registered.');

              
//             } else {
//                 Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
//             }

		 //echo "Registration successfully";
		 return $this->render('register',[
		 		'model'=>$model,
		 
		 ]);
		
		}
		
		return $this->render('register',[
				'model'=>$model,

		]);
	 
		
	}
	public function actionTestlogin() {
		$model = new TestLogin ();
		if ($model->load ( Yii::$app->request->post () ) && $model->validate ()) {
			if ($model->sendEmail ( Yii::$app->params ['adminEmail'] )) {
				Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
			} else {
				Yii::$app->session->setFlash('error', 'There was an error sending email.');
			}
	
			return $this->refresh();
		} else {
			return $this->render('testlogin',[
					'model'=>$model,
	
			]);/** here registerform is from view*/
		}
	}	
	
				
}