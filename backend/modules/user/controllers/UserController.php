<?php

namespace backend\modules\user\controllers;

use Yii;
use backend\models\UserMain;
use backend\models\RegisterMaster;
use backend\models\UserMaster;
use backend\models\UserMainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use frontend\models\Countries;
use yii\helpers\Json;

/**
 * UserController implements the CRUD actions for UserMain model.
 */
class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all UserMain models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserMainSearch();
        $params = Yii::$app->request->queryParams;
        $params['roleId'] = 3;
        $dataProvider = $searchModel->search($params);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new UserMain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserMain();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "User successfully Created");
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserMain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success', "User successfully Updated");
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionUserupdate($id)
    {
    	
    		
    	$model = new RegisterMaster();
    	$userData = RegisterMaster::find()->where(['uid'=> $id])->one();
    	$userMain = UserMaster::find()->where(['id' => $id])->one();
    	$model->countriesList = Countries::getCountries();
    	$states = Countries::getStatesByCountry($userData['country']);
    	$statesAry = array();
    	foreach ($states as $state)
    	{
    		$statesAry[$state['id']] = $state['name'];
    	}
    	$model->statesData = $statesAry;
    	if($model->load(Yii::$app->request->post()))
    	{
    			
    			
    		$model->uid = $id;
    		//$model->dob = 'NOW()';
    			
    		$userExist = RegisterMaster::find()->where(['uid'=>$id])->one();
    			
    		if($userExist != NULL)
    		{
    
    			//echo "00000000000000000";
    				
    			$userExist->firstName = $model->firstName;
    			$userExist->lastName = $model->lastName;
    			$userExist->middleName = $model->middleName;
    			$userExist->gender = $model->gender;
    
    			$userExist->dob = $model->dob;
    			$userExist->mobile = $model->mobile;
    			$userExist->mobile2 = $model->mobile2;
    			$userExist->address1 = $model->address1;
    			$userExist->address2 = $model->address2;
    			$userExist->city = $model->city;
    			$userExist->state = $model->state;
    			$userExist->country = $model->country;
    			$userExist->zip = $model->zip;
    			$userExist->modifiedDate = 'NOW()';
    			if($userMain->roleId == 2)
    			{
    				$userExist->storeName = $model->storeName;
    				$userExist->storeAddress = $model->storeAddress;
    
    				$model->storeImage = UploadedFile::getInstance($model,'storeImage');
    				 
    				if($model->storeImage != '')
    				{
    					$imageName = rand(1000,100000).$model->storeImage->baseName;
    
    					$model->storeImage->saveAs('uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension );
    
    					$model->storeImage = 'uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension;
    					$userExist->storeImage = $model->storeImage;
    					$model->storeImage;
    
    				}
    
    			}
    			
    			$userExist->update();
    
    
    			Yii::$app->getSession()->setFlash('success', 'You are successfully Updated Your Profile.');
    			return $this->redirect(['index']);
    		}
    		else {
    
    			$model->save();
    			print_r($model);exit();
    			Yii::$app->getSession()->setFlash('success', 'You are successfully Updated Your Profile.');
    			return $this->redirect(['index']);
    		}
    			
    	}
    	else {
    		$model->username = $userMain->username;
    		$model->email = $userMain->email;
    		$model->roleId = $userMain->roleId;
    		$model->status = $userMain->status;
    		$model->firstName = $userData['firstName'];
    		$model->lastName = $userData['lastName'];
    		$model->middleName = $userData['middleName'];
    		$model->gender = $userData['gender'];
    		$model->dob = $userData['dob'];
    		$model->mobile = $userData['mobile'];
    		$model->mobile2 = $userData['mobile2'];
    		$model->address1 = $userData['address1'];
    		$model->address2 = $userData['address2'];
    		$model->city = $userData['city'];
    		$model->state = $userData['state'];
    		$model->country = $userData['country'];
    		$model->zip = $userData['zip'];
    		$model->storeName  =  $userData['storeName'];
    		$model->storeAddress  = $userData['storeAddress'];
    		$model->storeImage    = $userData['storeImage'];
    		$model->id = $userData['uid'];
    		return $this->render('update', ['model' => $model,]);
    	}
    
    		
    }

    /**
     * Deletes an existing UserMain model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', "User successfully Deleted");
        return $this->redirect(['index']);
    }
    
    
    public function actionStatuschange($id)
    {
    	$model = UserMain::find()->where(['id'=>$id])->one() ;
    	
    	 
    	if($model->status == '10')
    	{
    		$status = 0;
    	}
    	else if($model->status == '0')
    	{
    		$status = 10;
    	}
    	
    	$model->status = $status;
    	$model->update();
    	
    	Yii::$app->getSession()->setFlash('success', 'You are successfully change user status.');
    
    	return $this->redirect(['index']);
    	 
    	 
    	 
    	 
    }

    /**
     * Finds the UserMain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserMain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserMain::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
