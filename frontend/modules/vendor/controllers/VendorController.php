<?php

namespace app\modules\vendor\controllers;
use Yii;

use common\models\LoginForm;
use common\models\User;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\RegisterForm;
use frontend\models\ContactForm;
use frontend\models\UserprofileForm;
use frontend\models\SocialUser;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\RegisterMaster;
use frontend\models\UserMaster;
use yii\web\UploadedFile;
use  yii\web\Session;
use app\models\Vendorproducts;
use app\models\VendorSearch;
use frontend\models\StoresMaster;
use frontend\models\GalleryImages;
use frontend\models\Countries;
use frontend\models\States;
use frontend\models\VendorRegister;
use frontend\models\Membershipdetails;
use yii\data\ActiveDataProvider;
use yii\db\Query ;
use yii\helpers\Json;


class VendorController extends Controller
{
	public $layout = "@app/views/layouts/vendor";
    public function actionIndex()
    {
    	
    	$this->layout = "@app/views/layouts/vendor";
    	
        return $this->render('index');
    }
    public function actionSignup()
    {
    	$this->layout="@app/views/layouts/vendor";
    	$model = new VendorRegister();
    	$userMain = new UserMaster();
    	$model->scenario = 'vendor';
    	$model->countriesList = Countries::getCountriesUS();
    	//$model->statesData = array();
    	$model->country = 231;
    	$model->statesData = Countries::getStatesByCountryDefault($model->country);
    	$model->state = 3975;
    	if($model->load(Yii::$app->request->post()) && $model->validate())
    	{
    			$userSave = $model->signup();
    			$model->email = 'dummy@mailinator.com';
    			$model->username = 'dummy';
    			$model->uid = $userSave->id;
    			$model->storeImage = UploadedFile::getInstance($model,'storeImage');
    			
    			if($model->storeImage != '')
    			{
    				$imageName = rand(1000,100000).$model->storeImage->baseName;
    			
    				$model->storeImage->saveAs(Yii::getAlias('@frontend').'/web/uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension );
    			
    				$model->storeImage = 'uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension;
    				
    					
    			}
    			else {
    				$model->storeImage = '';
    			}
    			$stateShortName = States::getStateName($model->state);
    			$words = explode(" ", $stateShortName);
    			$stateName = "";
    			
    			/* if(count($words >= 2))
    			{
    				$k=0;
    				
    			foreach ($words as $w) {
    				
    				if($k <= 1)
    				{
    				$stateName .= $w[0];
    				}
    				$k++;
    			}
    			}
    			else 
    			{
    				$stateName = substr($stateShortName,0,2);
    			} */
    			
    			$stateName = States::getStateCode($model->state);
    			$cityName = substr($model->city,0,2);
    			$cnt= VendorRegister::find()->where(['state' => $model->state ])->count();
    			if($cnt == 0)
    			{
    				$userupdatedId = 100;
    			}
    			else {
    				
    				$userupdatedId = 100+$cnt;
    				
    			}
    			$model->vendor_unique_id= strtoupper($stateName.'gds'.$userupdatedId);
    			//print_r($model->vendor_unique_id);exit();
    			$model->save();
    		   			
    			
    			Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');
    				//echo "Registration successfully";
    			return $this->redirect(['index']);
    	
    			
    	} else {
    		
    		
    		return $this->render('signup',['model'=>$model,]);
    	}
    
    
    }
    public function actionHome()
    {
    	 
    	$this->layout = "@app/views/layouts/vendor";
    	echo 'hello';
    }
    public function actionRequestPasswordReset()
    {
    	$this->layout = "@app/views/layouts/vendor";
    	$model = new PasswordResetRequestForm();
    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    		if ($model->sendEmail()) {
    			Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');
    
    			return $this->goHome();
    		} else {
    			Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
    		}
    	}
    
    	return $this->render('requestPasswordResetToken', [
    			'model' => $model,
    	]);
    }
    
    public function actionResetPassword($token)
    {
    	$this->layout = "@app/views/layouts/vendor";
    	try {
    		$model = new ResetPasswordForm($token);
    	} catch (InvalidParamException $e) {
    		throw new BadRequestHttpException($e->getMessage());
    	}
    
    	if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
    		Yii::$app->getSession()->setFlash('success', 'New password was saved.');
    
    		return $this->goHome();
    	}
    
    	return $this->render('resetPassword', [
    			'model' => $model,
    	]);
    }
    
    /**
     * Displays a single Vendorproducts model.
     *
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
    	//$this->layout = "@app/views/layouts/vendor";
    	//$this->layout = "@app/views/layouts/vendor_left";
    	return $this->render ( 'view', [
    			'model' => $this->findModel ( $id )
    	] );
    }
    
    /**
     * Creates a new Vendorproducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @return mixed
     */
    public function actionCreate() {
    	//$this->layout = "@app/views/layouts/vendor";
    	$this->layout = "@app/views/layouts/vendor_left";
    	$model = new Vendorproducts ();
    
    	if ($model->load (Yii::$app->request->post())) {
    		$model->vendorId = Yii::$app->user->id;
    		
    		$model->save ();
    		
    		return $this->redirect ( [
    				'index'
    		] );
    	} else {
    		
    		return $this->render ( 'create', [
    				'model' => $model
    		] );
    	}
    }
    
    public function actionAddfields() {
    	$this->layout=false;
    	$cnt = $_GET['elcnt'];
    	$model = new Vendorproducts ();
    	return $this->render ( '_dynamicform', [
    			'model' => $model,
    			'cnt' => $cnt
    	] );
    }
    
    /**
     * Updates an existing Vendorproducts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
    	//$this->layout = "@app/views/layouts/vendor";
    	$this->layout = "@app/views/layouts/vendor_left";
    	$model = $this->findModel ( $id );
    
    	if ($model->load ( Yii::$app->request->post () ) ) {
    		$model->vendorId = Yii::$app->user->id;
    		$model->save ();
    		return $this->redirect ( [
    				'view',
    				'id' => $model->Saleid
    		] );
    	} else {
    		return $this->render ( 'update', [
    				'model' => $model
    		] );
    	}
    }
    
    public function actionUpdateajax() {
    	$id = $_GET['saleId'];
    	$model = Vendorproducts::findOne($id);
    	$model->productId = $_GET['productId'];
    	$model->Brand = $_GET['brand'];
    	$model->Quantity = $_GET['quntity'];
    	$model->uom = $_GET['uom'];
    	$model->AltQty = $_GET['altqty'];
    	$model->AltUom = $_GET['altuom'];
    	$model->UnitPrice = $_GET['unitprice'];
    	$model->SalePrice = $_GET['saleprice'];
    	$model->PriceUnit = $_GET['priceunit'];
    	$model->StartDate = $_GET['strdate'];
    	$model->EndDate = $_GET['enddate'];
    	$model->ReserveCount = $_GET['rsvcount'];
    	$model->SaleInd = $_GET['saleInd'];
    	$model->categoryName = $_GET['categoryId'];
    	$model->save();
    	//print_r($model);exit();
    	return true;
    	//print_r($model);exit();
    	
    	
    }
    
    /**
     * Deletes an existing Vendorproducts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
    	//$this->layout = "@app/views/layouts/vendor";
    	$this->layout = "@app/views/layouts/vendor_left";
    	$this->findModel ( $id )->delete ();
    
    	return $this->redirect ( [
    			'allproducts'
    	] );
    }
    
    public function actionDeleteajax() {
    	$id = $_GET['saleId'];
    	$this->findModel ( $id )->delete ();
    	return true;
    }
    
    /**
     * Finds the Vendorproducts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     * @return Vendorproducts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
    	$this->layout = "@app/views/layouts/vendor_left";
    	if (($model = Vendorproducts::findOne ( $id )) !== null) {
    		return $model;
    	} else {
    		throw new NotFoundHttpException ( 'The requested page does not exist.');
    	}
    }
    public function actionUpload()
    {
    	
    	
    	$this->layout = "@app/views/layouts/vendor_left";
    	$model = new Vendorproducts();
    	$model->scenario = 'fileup';
    	if ($model->load(Yii::$app->request->post()) ) {
    		 
    		 
    		$model->FileUpload = UploadedFile::getInstance($model, 'FileUpload');
    		 
    
    		if ( $model->FileUpload )
    		{
    
    			$time = time();
    			$model->FileUpload->saveAs(realpath(Yii::$app->basePath).'/csv/' .$time. '.' . $model->FileUpload->extension);
    			$model->FileUpload = realpath(Yii::$app->basePath).'/csv/' .$time. '.' . $model->FileUpload->extension;
    
    			$handle = fopen($model->FileUpload, "r");
    			$i=0;
    			while (($fileop = fgetcsv($handle, 1000, ",")) !== false)
    			{
    				if($i >= 1)
    				{
    					$userInfo = Yii::$app->db->createCommand()->insert('saleitems', [
    							'vendorId' =>Yii::$app->user->id,
    							'productId' =>$fileop[0],
    							'Brand' =>$fileop[1],
    							'Quantity' =>$fileop[2],
    							'uom' =>$fileop[3],
    							'AltQty' =>$fileop[4],
    							'AltUom' =>$fileop[5],
    							'UnitPrice' =>$fileop[6],
    							'SalePrice' =>$fileop[7],
    							'PriceUnit' =>$fileop[8],
    							'StartDate' =>$fileop[9],
    							'EndDate' =>$fileop[10],
    							'ReserveCount' =>$fileop[11],
    							'SaleInd' =>$fileop[12],
    							'categoryName' =>$fileop[13],
    					])->execute();
    				}
    				$i++;
    
    			}
    			$storeMain = new StoresMaster();
    			$storeMain->vendorId = Yii::$app->user->id;
    			$storeMain->totalSaleItems = $i-1;
    			$storeMain->offerType = $model->offerType;
    			$storeMain->offer = $model->offer;
    			$storeMain->offerStartDate = $model->offerStartDate;
    			$storeMain->offerEndDate = $model->offerEndDate;
    			$storeMain->save();
    			Yii::$app->getSession()->setFlash('success', ' Your Products are successfully Updated ');
    
    			 
    			return $this->redirect ( ['upload',] );
    			Yii::$app->getSession()->setFlash('success', ' Only Xlsheets are available ');
    		}
    	} else {
    
    		 
    		return $this->render ( 'vendor_view', [
    				'model' => $model
    		] );
    	}
    	 
    	 
    }
    
		    public function actionAllproducts() {
		    	$this->layout = "@app/views/layouts/vendor_left";
		    	$searchModel = new VendorSearch ();
		    	$params = ['vendorId' => Yii::$app->user->id];
		    	$dataProvider = $searchModel->search ($params);
		    
		    	return $this->render ( 'allProducts', [
		    			'searchModel' => $searchModel,
		    			'dataProvider' => $dataProvider
		    	] );
		    }
    

			    //****************** logout **************/
			    public function actionLogout()
			    {
			    	Yii::$app->user->logout();
			    	 
			    	return $this->redirect(['/vendor/vendor']);
			    }
			    	
			    //***************** vendor profile ****************/
			    public function actionProfile()
			    {
			    	//$this->layout='profile';
			    	//$this->layout = "@app/views/layouts/vendor";
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	$model = new VendorRegister();
			    	$userData = VendorRegister::find()->where(['uid'=> Yii::$app->user->id])->one();
			    	$userMain = UserMaster::find()->where(['id' => Yii::$app->user->id])->one();
			    	 
			    	// $model->username = $userMain['username'];
			    	$model->roleId = $userMain->roleId;
			    	$model->email 	= 	$userMain['email'];
			    	$model->firstName  = 	$userData['firstName'];
			    	$model->lastName   = 	$userData['lastName'];
			    	$model->middleName = 	$userData['middleName'];
			    	
			    	$model->mobile 	 =	$userData['mobile'];
			    	$model->mobile2 	 = 	$userData['mobile2'];
			    	
			    	$model->address2   =  $userData['address2'];
			    	$model->city		 =  $userData['city'];
			    	$model->state 	 =  $userData['state'];
			    	$model->country 	 =  $userData['country'];
			    	$model->zip 		 =  $userData['zip'];
			    	$model->storeName  =  $userData['storeName'];
			    	$model->storeAddress  = $userData['storeAddress'];
			    	$model->storeImage    = $userData['storeImage'];
			    	$model->businessName2    = $userData['businessName2'];
			    	$model->fax    = $userData['fax'];
			    	$model->vendor_unique_id    = $userData['vendor_unique_id'];
			    	return $this->render('vendorprofileview', ['model' => $model,]);
			    }
			    
			    //*********************** vendor update *********************************//
			    
			    
			    public function actionVendorupdate()
			    {
			    
			    	//$this->layout = "@app/views/layouts/vendor";
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	 
			    	$model = new VendorRegister();
			    	$userData = VendorRegister::find()->where(['uid'=> Yii::$app->user->id])->one();
			    	$userMain = UserMaster::find()->where(['id' => Yii::$app->user->id])->one();
			    	$model->countriesList = Countries::getCountriesUS();
			    	if($userData['country'] == NULL )
			    	{
			    			
			    		$model->country = 231;
			    	}
			    	else
			    	{
			    			
			    		$model->country = $userData['country'];
			    	}
			    	$model->statesData = Countries::getStatesByCountryDefault($model->country);
			    if($userData['state'] == NULL )
						{
							
							$model->state = 3975;
						}
						else 
						{
							
							$model->state = $userData['state'];
						}
			    	
			    	if($model->load(Yii::$app->request->post()))
			    	{
			    
			    
			    		$model->uid = Yii::$app->user->id;
			    		//$model->dob = 'NOW()';
			    		 
			    		$userExist = VendorRegister::find()->where(['uid'=>Yii::$app->user->id])->one();
			    		 
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
			    			$userExist->businessName2 = $model->businessName2;
			    			$userExist->fax = $model->fax;
			    			$userExist->modifiedDate = 'NOW()';
			    			if($userMain->roleId == 2)
			    			{
			    				$userExist->storeName = $model->storeName;
			    				$userExist->storeAddress = $model->storeAddress;
			    
			    				$model->storeImage = UploadedFile::getInstance($model,'storeImage');
			    				 
			    				if($model->storeImage != '')
			    				{
			    					$imageName = rand(1000,100000).$model->storeImage->baseName;
			    
			    					$model->storeImage->saveAs(Yii::getAlias('@frontend').'/web/uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension );
			    
			    					$model->storeImage = 'uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension;
			    					$userExist->storeImage = $model->storeImage;
			    					$model->storeImage;
			    
			    				}
			    
			    			}
			    			$userExist->update();
			    			//print_r($userExist);exit();
			    			 
			    			Yii::$app->getSession()->setFlash('success', 'You are successfully Updated Your Profile.');
			    			return $this->redirect(['profile']);
			    		}
			    		else {
			    			$model->storeImage = UploadedFile::getInstance($model,'storeImage');
			    			
			    			if($model->storeImage != '')
			    			{
			    				$imageName = rand(1000,100000).$model->storeImage->baseName;
			    				 
			    				$model->storeImage->saveAs(Yii::getAlias('@frontend').'/web/uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension );
			    				 
			    				$model->storeImage = 'uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension;
			    				$userExist->storeImage = $model->storeImage;
			    				$model->storeImage;
			    				 
			    			}
			    			$model->email = 'dummy@mailinator.com';
			    			$model->save();
			    			
			    			Yii::$app->getSession()->setFlash('success', 'You are successfully Updated Your Profile.');
			    			return $this->redirect(['profile']);
			    		}
			    	}else {
			    
			    
			    		$model->email = $userMain->email;
			    		$model->roleId = $userMain->roleId;
			    		$model->firstName = $userData['firstName'];
			    		$model->lastName = $userData['lastName'];
			    		$model->middleName = $userData['middleName'];
			    		
			    		$model->mobile = $userData['mobile'];
			    		$model->mobile2 = $userData['mobile2'];
			    		
			    		 
			    		$model->address2 = $userData['address2'];
			    		$model->city = $userData['city'];
			    		$model->state = $userData['state'];
			    		 
			    		$model->country = $userData['country'];
			    		if($model->country == '')
			    		{
			    			$model->country = 231;
			    		}
			    		$model->zip = $userData['zip'];
			    		 
			    		$model->storeName  =  $userData['storeName'];
			    		$model->storeAddress  = $userData['storeAddress'];
			    		$model->storeImage    = $userData['storeImage'];
			    		
			    		$model->businessName2    = $userData['businessName2'];
			    		$model->fax    = $userData['fax'];
			    		$model->vendor_unique_id    = $userData['vendor_unique_id'];
			    		return $this->render('vendorprofileedit', ['model' => $model,]);
			    		 
			    
			    
			    
			    	}//end else
			    	 
			    	 
			    }//end action
			    
			    
			    public function actionAddgallery()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	$model = new GalleryImages();
			    	if($model->load(Yii::$app->request->post()))
			    	{
			    		$model->file = UploadedFile::getInstances($model, 'file');
                        $model->upload();
			    	}
                    return $this->render('addGallery',['model' => $model]);
			    }
			    public function actionShowgallery()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	//$query = GalleryImages::find()->where(['vendorId' => Yii::$app->user->id])->all();
			    	$query = new Query;
			    	$query->from('gallery_images')
			    	->where(['vendorId' => Yii::$app->user->id]);
			    	$dataProvider = new ActiveDataProvider([
			    			'query' => $query,
			    			'pagination' => [
			    					'pageSize' => 25,
			    			],
			    	]);
			    	 
			    	
			    	
			    	return $this->render('showGallery',['dataProvider' => $dataProvider]);
			    }
			    
			    public function actionRemovegallery()
			    {
			    	$galleryId = $_GET['galleryid'];
			    	$model = GalleryImages::find()->where(['galleryId' => $galleryId])->one();
			    	$model->delete();
			    	return true;
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
			     /**
			      *  Manage reviews  */
			    public function actionManagereviews()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('managereviews');
			    }
			    /**
			     *  Manage reviews  */
			    public function actionManagereserveitem()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('managereserveitem');
			    }
			    /**
			     *  Package options */
			    public function actionPackageoptions()
			    {
			    	$model = new Membershipdetails();
			    	$model->packages = $model->getPackages();
			    	$query = new Query;
			    	$query->from('membershipdetails')
			    	->where(['status' => 'Active']);
			    	$dataProvider = new ActiveDataProvider([
			    			'query' => $query,
			    			'pagination' => [
			    					'pageSize' => 25,
			    			],
			    	]);
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('packageoptions',['model' =>$model,'dataProvider' => $dataProvider]);
			    }
			    /**
			     *  Inventory reports  */
			    public function actionInventoryreports()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('inventoryreports');
			    }
			    /**
			     *  customer dynamics  */
			    public function actionCustomerdynamics()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('customerdynamics');
			    }
			    /**
			     * support */
			    public function actionSupport()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('support');
			    }
			    
			    /**
			     * Sign up bundle request */
			    public function actionSignupbundlerequest()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('signupbundlerequest');
			    }
			    	
			    /**
			     * faq */
			    public function actionFaq()
			    {
			    	$this->layout = "@app/views/layouts/vendor";
			    	return $this->render('faq');
			    }
			     
			    /**
			     * benefits */
			    public function actionBenefits()
			    {
			    	$this->layout = "@app/views/layouts/vendor";
			    	return $this->render('benefits');
			    }
			     
			    /**
			     * pricing */
			    public function actionPricing()
			    {
			    	$this->layout = "@app/views/layouts/vendor";
			    	$model = new Membershipdetails();
			    	$pricingInfo = Membershipdetails::find()->all();
			    	//print_r($pricingInfo);exit();
			    	return $this->render('pricing',['pricingInfo'=>$pricingInfo]);
			    }
			     
			    /**
			     * pricing */
			    public function actionFeatures()
			    {
			    	$this->layout = "@app/views/layouts/vendor";
			    	return $this->render('features');
			    }
			     
			    /**
			     * tutorial */
			    public function actionTutorial()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('tutorial');
			    }
			    
			    public function actionPay()
			    {
			    	/* echo '<pre/>';
                    print_r(Yii::$app->paypal->payDemo());  
                    exit(); */
			    	
			    }
			    public function actionPaypal()
			    {
			    	$this->layout = "@app/views/layouts/vendor_left";
			    	return $this->render('paypal');
			    
			    }
			     
			    public function actionActivate() {
			    	$this->layout = "@app/views/layouts/vendor";
			    	$queryParams = Yii::$app->request->getQueryParams();
			    	$email = $queryParams[1]['email'];
			    	$auth_key = $queryParams[1]['auth_key'];
			    	$userData = ['email'=>$email,'auth_key'=>$auth_key];
			    	$model= User::findByAttributesNew($userData);
			    	$storeId = VendorRegister::getStoreId($model->id);
			    	//print_r($model);exit();
			    	if(!(empty($model)))
			    	{
			    		if($model->status == 10)
			    		{
			    			Yii::$app->getSession()->setFlash('success', 'You are already used this Activation Link');
			    		}
			    		else
			    		{
			    			$userda = Yii::$app->db->createCommand ()->update('user', ['status' => 10],['id' => $model->id])->execute();
			    			Yii::$app->getSession()->setFlash('success', 'You are successfully Activated');
			    		}
			    	}
			    	else {
			    		Yii::$app->getSession()->setFlash('error', 'Invalid Activation Link');
			    	}
			    	return $this->render('vendorActivation', ['storeId' => $storeId
			    			 
			    	]);
			    	 
			    
			    	 
			    	//print_r($userda);exit();
			    	//redirect / flash / login whatever
			    }    
			     
			    
			 
			    
}
