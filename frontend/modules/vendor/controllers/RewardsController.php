<?php

namespace app\modules\vendor\controllers;
use Yii;

use common\models\LoginForm;
use common\models\User;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use  yii\web\Session;
use yii\data\ActiveDataProvider;
use yii\db\Query ;
use yii\helpers\Json;
use frontend\models\RewardsDetails;
use frontend\models\RewardsMain;


class RewardsController extends Controller
{
	public $layout = "@app/views/layouts/vendor_left";
	
    public function actionIndex()
    {
    	$model = new RewardsDetails();
    	if(isset($_GET['uId']))
    	{
    		$dataProvider = $model->getRewardsRequestsByStoreCustomerId($_GET['uId']);
    	}
    	else 
    	{
    	$dataProvider = $model->getRewardsRequestsByStoreId();
    	}
    		
        return $this->render('index',['dataProvider' => $dataProvider]);
    }
    
    public function actionStatusupdate()
    {
    	$model = new RewardsDetails();
    	$rdId = $_GET['rdId'];
    	$result = $model->statusUpdate($rdId);
        if($result)
        {
    	return $this->redirect ( ['index',] );
        }
        else 
        {
        	Yii::$app->getSession()->setFlash('success', 'You dont have exist offer this purchase date.');
        	return $this->redirect ( ['index'] );
        }
    }
    
    public function actionRedeem()
    {
    	$model = new RewardsMain();
    	$dataProvider = $model->getRewards();
    
    	return $this->render('redeem',['dataProvider' => $dataProvider]);
    }
    
    public function actionRedeemupdate($uId)
    {
    	$model = new RewardsDetails();
    	$rewardsMain = new RewardsMain();
        $rewardsMainAry = $rewardsMain->getRewardsByuId($uId);
        $model->uId = $rewardsMainAry->uId;
        $model->availableRewards = $rewardsMainAry->rewards;
        $model->storeId = $rewardsMainAry->storeId;
		if($model->load(Yii::$app->request->post()))
		{
			$model->createdBy = Yii::$app->user->id;
			$model->updatedBy = Yii::$app->user->id;
			$model->rewardsFlag = 'REEDEEMED';
			$model->confirmFlag = 0;
			$redeemUpdate = $model->save();
			//print_r($model->redeemRewards);exit();
			if ($redeemUpdate)
			{
				$rewardsMain = RewardsMain::find()->where(['uId' =>  $model->uId])->one();
				
					$rewardsMain->rewards =  $rewardsMain->rewards - $model->redeemRewards;
					$rewardsMain->rdId =  $model->rdId;
					$rewardsMain->storeId =  $model->storeId;
					$rewardsMain->uId =  $model->uId;
					$response = $rewardsMain->update();
				 
			}
			if($response)
			{
				return $this->redirect ( ['redeemupdate','uId'=> $model->uId] );
			}
		}
		else {
		return $this->render('redeemUpdate',['model'=>$model]);
		}
    }
    
    
    
}
