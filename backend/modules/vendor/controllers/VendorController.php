<?php

namespace app\modules\vendor\controllers;

use yii;
use backend\models\UserMain;
use backend\models\RegisterMaster;
use backend\models\VendorRegister;
use backend\models\UserMaster;
use backend\models\VendorMainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use frontend\models\Countries;
use yii\helpers\Json;

class VendorController extends \yii\web\Controller
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
        $searchModel = new VendorMainSearch();
        $params = Yii::$app->request->queryParams;
        $params['roleId'] = 2;
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
        	Yii::$app->session->setFlash('success', "Vendor successfully Created");
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
        	Yii::$app->session->setFlash('success', "Vendor successfully Updated");
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionVendorupdate($id)
    {
    	 
    
    	$model = new VendorRegister();
    	$model->scenario = 'vendoradmin';
    	$userData = VendorRegister::find()->where(['uid'=> $id])->one();
    	$userMain = UserMaster::find()->where(['id' => $id])->one();
    	$model->countriesList = Countries::getCountriesUS();
    	if($userData['country'] == NULL )
    	{
    	
    		$model->country = 231;
    	}
    	else
    	{
    	
    		$model->country = $userData['country'];
    	}
    	
    	$states = Countries::getStatesByCountry($model->country);
    	$statesAry = array();
    	foreach ($states as $state)
    	{
    		$statesAry[$state['id']] = $state['name'];
    	}
    	$model->statesData = $statesAry;
    
    	if($model->load(Yii::$app->request->post()) && $model->validate())
    	{
    		 
    		 
    		$model->uid = $id;
    		//$model->dob = 'NOW()';
    		 
    		$userExist = VendorRegister::find()->where(['uid'=>$id])->one();
    		 
    		if($userExist != NULL)
    		{
    
    			//echo "00000000000000000";
    
    			$userExist->firstName = $model->firstName;
    			$userExist->lastName = $model->lastName;
    			$userExist->middleName = $model->middleName;
    			
    			$userExist->mobile = $model->mobile;
    			$userExist->mobile2 = $model->mobile2;
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
    				$userExist->businessName2 = $model->businessName2;
    				
    
    				
    				
    				$model->storeImage = UploadedFile::getInstance($model,'storeImage');
    				 
    				if($model->storeImage != '')
    				{
    					$imageName = rand(1000,100000).$model->storeImage->baseName;
    					 
    					$model->storeImage->saveAs(Yii::getAlias('@frontend').'/web/uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension );
    					 
    					$model->storeImage = 'uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension;
    				
    						
    				}
    				else {
    					$model->storeImage = $model->storeimgesdup;
    				}
    				$userExist->storeImage = $model->storeImage;
    
    			}
    			 
    			$userExist->update();
    
    
    			Yii::$app->getSession()->setFlash('success', 'You are successfully Updated Your Profile.');
    			return $this->redirect(['index']);
    		}
    		else {
    		$model->storeImage = UploadedFile::getInstance($model,'storeImage');
    				 
    				if($model->storeImage != '')
    				{
    					$imageName = rand(1000,100000).$model->storeImage->baseName;
    					 
    					$model->storeImage->saveAs(Yii::getAlias('@frontend').'/web/uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension );
    					 
    					$model->storeImage = 'uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension;
    				
    						
    				}
    				else {
    					$model->storeImage = $model->storeimgesdup;
    				}
    
    			$model->save();
    			
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
    		$model->fax = $userData['fax'];
    		
    		$model->mobile = $userData['mobile'];
    		$model->mobile2 = $userData['mobile2'];
    		$model->address2 = $userData['address2'];
    		$model->city = $userData['city'];
    		
    		$model->zip = $userData['zip'];
    		$model->storeName  =  $userData['storeName'];
    		$model->businessName2  =  $userData['businessName2'];
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

        Yii::$app->session->setFlash('success', "Vendor successfully Deleted");
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
	
    public function actionStates()
    {
    
    	$out = [];
    	if (isset($_POST['depdrop_parents'])) {
    		$parents = $_POST['depdrop_parents'];
    		 
    		if ($parents != null) {
    			$country = $parents[0];
    			$states = Countries::getStatesByCountry($country);
    			/* $out = [
    			 ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
    			 ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
    
    			 ]; */
    			echo Json::encode(['output'=>$states, 'selected'=>'']);
    			return;
    			 
    			 
    		}
    	}
    	 
    	echo Json::encode(['output'=>'', 'selected'=>'']);
    	 
    	 
    }
}
