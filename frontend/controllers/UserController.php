<?php
namespace frontend\controllers;

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
use frontend\models\Countries;
use frontend\models\RewardsDetails;


class UserController extends Controller
{
	
		        public function actionProfile()
				{
					$this->layout='profile';
				      $model = new RegisterMaster();
					  $userData = RegisterMaster::find()->where(['uid'=> Yii::$app->user->id])->one();
					  $userMain = UserMaster::find()->where(['id' => Yii::$app->user->id])->one();
					  
					  // $model->username = $userMain['username'];
					  $model->roleId = $userMain->roleId;
					  $model->email 	= 	$userMain['email'];
					  $model->firstName  = 	$userData['firstName'];
					  $model->lastName   = 	$userData['lastName'];
					  $model->middleName = 	$userData['middleName'];
					  $model->gender = 	$userData['gender'];
					  $model->dob 		 = 	$userData['dob'];
					  $model->mobile 	 =	$userData['mobile'];
					  $model->mobile2 	 = 	$userData['mobile2'];
					  $model->address1 	 = 	$userData['address1'];
					  $model->address2   =  $userData['address2'];
					  $model->city		 =  $userData['city'];
					  $model->state 	 =  $userData['state'];
					  $model->country 	 =  $userData['country'];
					  $model->zip 		 =  $userData['zip'];
					  $model->storeName  =  $userData['storeName'];
					  $model->storeAddress  = $userData['storeAddress'];
					  $model->storeImage    = $userData['storeImage'];
					  
					  if($model->roleId == 2)
					  {
					  	return $this->render('vendorprofileview', ['model' => $model,]);
					  }
					  else 
					  {
				      return $this->render('profileview', ['model' => $model,]);
					  }
				       
			              
				}
			
				public function actionUpdate()
				{
					  $this->layout='profile';
					
						$model = new RegisterMaster();
						$userData = RegisterMaster::find()->where(['uid'=> Yii::$app->user->id])->one();
						$userMain = UserMaster::find()->where(['id' => Yii::$app->user->id])->one();
						$model->countriesList = Countries::getCountries();
						//print_r(var_dump($userData['country']));exit();
						if($userData['country'] == NULL )
						{
							
							$model->country = 231;
						}
						else 
						{
							
							$model->country = $userData['country'];
						}
						//print_r($model->country);exit();
						$states = Countries::getStatesByCountryDefault($model->country);
						
				       if($userData['state'] == NULL )
						{
							
							$model->state = 3975;
						}
						else 
						{
							
							$model->state = $userData['state'];
						}
						$model->statesData = $states;
						if($model->load(Yii::$app->request->post()))
						{
							
							
							$model->uid = Yii::$app->user->id;
							//$model->dob = 'NOW()';
							
							$userExist = RegisterMaster::find()->where(['uid'=>Yii::$app->user->id])->one();
							
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
							    return $this->redirect(['profile']);
							}
							else {
								$model->email = 'dummy@mailinator.com';
							$model->save();
							
							Yii::$app->getSession()->setFlash('success', 'You are successfully Updated Your Profile.');
							return $this->redirect(['profile']);
							}
							
						}
						else {
							
							$model->email = $userMain->email;
							$model->roleId = $userMain->roleId;
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
							/* $model->state = $userData['state'];
							
							$model->country = $userData['country']; */
							$model->zip = $userData['zip'];
							
							$model->storeName  =  $userData['storeName'];
							$model->storeAddress  = $userData['storeAddress'];
							$model->storeImage    = $userData['storeImage'];
							
							
							if($userMain->roleId == 2)
							{
								return $this->render('vendorupdate', ['model' => $model,]);
							}
							else
							{
								return $this->render('update', ['model' => $model,]);
							}
							
						
				        
						}
						
					
				}
				public function actionVendor()
				{
					//$this->layout='profile';
					$model = new RegisterMaster();
					$userMain = UserMaster::find()->where(['id' => Yii::$app->user->id])->one();
					if($model->load(Yii::$app->request->post()))
					{
						$model->uid = Yii::$app->user->id;
						$userMain = UserMaster::find()->where(['id' => Yii::$app->user->id])->one();
						
						if($userMain != NULL)
						{
							$userMain->roleId = 2;
							$userMain->email = $model->email;
							$userMain->save();
							
						}
					   // echo $model->dob = date('Y-m-d h:m:s');
						$userExist = RegisterMaster::find()->where(['uid'=>Yii::$app->user->id])->one();
						//echo "<pre>"; print_r($userExist);
						if($userExist != NULL)
						{
							
							$userExist->storeName = $model->storeName;
							$userExist->storeAddress = $model->storeAddress;
							
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
							
						    $model->storeImage = UploadedFile::getInstance($model,'storeImage');
			                
			               	if($model->storeImage != '')
			               	{
					                 $imageName = rand(1000,100000).$model->storeImage->baseName;
					       
					                 $model->storeImage->saveAs('uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension );

					               	 $model->storeImage = 'uploads/storeimages/'.$imageName.'.'.$model->storeImage->extension;
									 $userExist->storeImage = $model->storeImage;
									 $model->storeImage;
									
							}
						
			             	/***************************/
						    $userExist->modifiedDate = date('Y-m-d h:m:s');
						   
							$userExist->save();
							Yii::$app->getSession()->setFlash('success', 'You are successfully Updated Your Profile.');
							return $this->redirect(['profile']);
						}else {


							$model->save();
							Yii::$app->getSession()->setFlash('success', 'You are successfully Updated Your Profile.');
							return $this->redirect(['profile']);
						}
							
					}else {
						$userData = RegisterMaster::find()->where(['uid'=> Yii::$app->user->id])->one();
							$model->email = $userMain->email;
							$model->roleId = $userMain->roleId;
							$model->firstName = $userData['firstName'];
							$model->lastName = $userData['lastName'];
							$model->middleName = $userData['middleName'];
							$model->gender = $userData['gender'];
							//$model->email = $userData['email'];
							$model->dob = $userData['dob'];
							$model->mobile = $userData['mobile'];
							$model->mobile2 = $userData['mobile2'];
							$model->address1 = $userData['address1'];
							
							$model->address2 = $userData['address2'];
							$model->city = $userData['city'];
							$model->state = $userData['state'];
							
							$model->country = $userData['country'];
							$model->zip = $userData['zip'];
							$model->storeName = $userData['storeName'];
							$model->storeAddress = $userData['storeAddress'];
							$model->file = $userData['file'];
							return $this->render('vendor',['model'=>$model,]);
					}
				
						
				}
						
						
					
									public function actionVendor1()
							{
								
								$this->layout='profile';
							
								 
								
							
			// 						$model = new UserprofileForm();
			// 						$model =  $model->profileView();
			// 					    if($model->load(Yii::$app->request->post()))
			// 						 {
			// 						 	   $model = new UserprofileForm();
			// 						       $model =  $model->vendorSave(Yii::$app->request->post(),$id);
			// 						       return $this->redirect(['profile']);
			// 						 }
								
						             return $this->render('vendor',['model'=>$model,]);
									
							
							}
	
							
	public function actionRequestrewards()
	{
		$model = new RewardsDetails();
		if($model->load(Yii::$app->request->post()))
		{
			$model->createdBy = Yii::$app->user->id;
			$model->updatedBy = Yii::$app->user->id;
			$model->uId = Yii::$app->user->id;
			$model->rewardsFlag = 'ADD';
			$model->confirmFlag = 0;
			$model->save();
		}
		return $this->render('rewards',['model'=>$model]);
	}
	
}