<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;
use app\models\Register;
use yii\web\UploadedFile;
use Yii;
use kop;
use linslin\yii2\curl;

/**
 * registermodel
 */
class UserprofileForm extends Model 
{
	
	
	 public $firstname;
	 public $lastname;
	 public $middlename;
	 public $email;
	 
	 public $city;
	 public $state;
	 public $country;
	 public $zip;
	 
	 public $secondLanguage;
	 public $thirdLanguage;
	 public $address;
	 public $address2;
	 
	 public $gender;
	 public $dob;
	 public $mobile;
	 public $mobile2;
	 
	 public $businessName;
	 public $storeAddress;
	 public $imageFile;
	 public $id;
	
	
	public function rules()
	{
		return [
				
				
				['firstname', 'required'],
				['lastname', 'required'],
				['middlename', 'required'],
				['email', 'required'],
				
				['city', 'required'],
				['state', 'required'],
				['country', 'required'],
				['zip', 'required'],
				
				['secondLanguage', 'required'],
				['thirdLanguage', 'required'],
				
				
				['address', 'required'],
				['address2', 'required'],
				['gender', 'required'],
				['dob', 'required'],
				
				['mobile', 'required'],
				['mobile2', 'required'],
				['businessName', 'required'],
				['storeAddress', 'required'],
			    [['imageFile'],'imageFile'],	
			    [['id','firstname'],'safe']
	
	
					
					
	
		];
	}
	public function attributeLabels()
	{
		return [
				'firstname' => 'First Name',
				'lastname' => 'last Name',
				'middlename' => 'middlename Name',
				'email' => 'email ',
				'city' => 'city',
				'state' => 'state',
				'country' => 'country',
				'zip' => 'zip',
				'secondLanguage' => 'second Language',
				'thirdLanguage' => 'third Language',
				'address' => 'address',
				'address2' => 'address2',
				'gender' => 'Gender',
				'mobile' => 'mobile',
				'mobile2' => 'Alternate mobile',
				'businessName' => 'Business Name',
				'storeAddress' => 'store Address',
			
				
				
	
		];
	}
		
	
				/**
				 *
				 *********  @var Profie View  ***************/
	
				public function  profileView()
				{
				 		return $userInfo2 = Register::find()->where(['uid'=>Yii::$app->user->id])->one();
  			    }
  			    
  			    
  			    /**
  			     *
  			     ************ @var Vendor Update  *******/
  			    
  			    public function vendorSave($data,$Id)
  			    {
  			       
  			    	
  			    	/************* get Query Register table  *******/
  			    	 $VendorInfo = Register::find()->where(['id'=>$Id])->one();
  			    	 $Id = $VendorInfo['id'];
  			    	 
  			    	 $imageName = $VendorInfo->firstname;
  			    	 
  			    	 $t = UploadedFile::getInstance($VendorInfo,'imageFile');
  			    	 if($t!= '')
  			    	 {
  			    	 	$VendorInfo->imageFile = $t;
  			    	 	$VendorInfo->imageFile->saveAs('uploads/profile/'.$imageName.'.'.$VendorInfo->imageFile->extension );
  			    	 	$VendorInfo->imageFile = '/uploads/profile/'.$imageName.'.'.$VendorInfo->imageFile->extension;
  			    	 
  			    	 	
  			    	 }
  			    	 
  			    	 $VendorInfo->firstname 	=  	$data['Register']['firstname'];
  			    	 $VendorInfo->middlename 	= 	$data['Register']['middlename'];
  			    	 $VendorInfo->lastname 		= 	$data['Register']['lastname'];
  			      	 $VendorInfo->mobile 		= 	$data['Register']['mobile'];
	              	 $VendorInfo->mobile2 		=   $data['Register']['mobile2'];
	              	 $VendorInfo->businessName 	= 	$data['Register']['businessName'];
	              	 $VendorInfo->storeAddress 	= 	$data['Register']['storeAddress'];
	                 $VendorInfo->imageFile 	= 	$data['Register']['imageFile'];
	                
	               
	              	 
	              	 
	              	 /************* Update Query  *******/
					$command = Yii::$app->db->createCommand(
			              	 		"UPDATE register  SET
									 firstname='$VendorInfo->firstname',
			              	 		 middlename='$VendorInfo->middlename',
			              	 		 lastname='$VendorInfo->lastname',
			              	 		 mobile='$VendorInfo->mobile',
			              	 		 mobile2='$VendorInfo->mobile2',
			              	 		 businessName='$VendorInfo->businessName',
							         storeAddress='$VendorInfo->storeAddress'
			              	 		 WHERE id ='$Id'");
	              	  $command->execute();
	              	  return $VendorInfo;
	                
	              
					
				  } 
		   
				  
				  /**
				   *
				   ************ @var profile save and  Update  *******/
            
		         public function profileSave($data)
		        {
		            	
		        	    /************* get Query User table  *******/
					    $user = User::findOne(Yii::$app->user->id);
		                $Id = $user['id'];
		            	$uId = $user['uId'];
		            	$MemId = $user['MemId'];
		          
		            	/************* get Query Register table  *******/
			            $userInfo = Register::find()->where(['uid'=>$uId])->one();
			            $Id = $userInfo['id'];
			           
			             if($userInfo)
			              {
			              	
			           			$userInfo->firstname =   $data['Register']['firstname'];
			                  	$userInfo->middlename =    $data['Register']['middlename'];
			                  	$userInfo->lastname =  $data['Register']['lastname'];
			                  	$userInfo->email =  $data['Register']['email'];
			                  	$userInfo->city =  $data['Register']['city'];
			                  	$userInfo->state =  $data['Register']['state'];
			                  	$userInfo->country =  $data['Register']['country'];
			                  	$userInfo->zip =  $data['Register']['zip'];
			                  	$userInfo->secondLanguage =  $data['Register']['secondLanguage'];
			                  	$userInfo->thirdLanguage =  $data['Register']['thirdLanguage'];
			                    $userInfo->address =  $data['Register']['address'];
                                $userInfo->address2 =  $data['Register']['address2'];
                             	$userInfo->dob =  $data['Register']['dob'];
			                  	
			                  	/************* Update Query  *******/
			                  	$command = Yii::$app->db->createCommand(
				                  			"UPDATE register  SET
				                  			firstname ='$userInfo->firstname',
				                  			middlename ='$userInfo->middlename',
				                  			lastname ='$userInfo->lastname',
				                  			email ='$userInfo->email',
				                  			city ='$userInfo->city',
				                  			state ='$userInfo->state',
				                  			country ='$userInfo->country',
				                  			zip ='$userInfo->zip',
				                  			secondLanguage ='$userInfo->secondLanguage',
				                  			thirdLanguage ='$userInfo->thirdLanguage',
				                  			address ='$userInfo->address',
				                  			address2 ='$userInfo->address2',
				                  			dob ='$userInfo->dob'
				                  			WHERE id ='$Id'");
			                  	$command->execute();
			                  	return $userInfo;
			              }else {
							 $this->firstname 			= 	$data['UserprofileForm']['firstname'];
			              	 $this->lastname 			=   $data['UserprofileForm']['lastname'];
			              	 $this->middlename 			= 	$data['UserprofileForm']['middlename'];
			              	 $this->email				=   $data['UserprofileForm']['email'];
			              	 $this->city 				= 	$data['UserprofileForm']['city'];
			              	 $this->state				=   $data['UserprofileForm']['state'];
			              	 $this->country	  	   		= 	$data['UserprofileForm']['country'];
			              	 $this->zip		    		=   $data['UserprofileForm']['zip'];
							 $this->secondLanguage		= 	$data['UserprofileForm']['secondLanguage'];
			              	 $this->thirdLanguage		= 	$data['UserprofileForm']['thirdLanguage'];
			              	 $this->address				= 	$data['UserprofileForm']['address'];
			              	 $this->address2			= 	$data['UserprofileForm']['address2'];
			              	 $this->dob					= 	$data['UserprofileForm']['dob'];
			              	 
								/************* Insert  Query Into Register table  *******/
							 $data = Yii::$app->db->createCommand()->insert ('register', [
				              	 		'firstname' 		=> 	 $this->firstname,
				              	 		'lastname' 			=>	 $this->lastname,
				              	 		'middlename' 		=>	 $this->middlename,
				              	 		'email'				=> 	 $this->email,
				              	 		'city'				=> 	 $this->city,
				              	 		'state' 			=> 	 $this->state,
				              	 		'country' 			=> 	 $this->country,
				              	 		'zip' 				=>	 $this->zip,
				              	 		'secondLanguage' 	=> 	 $this->secondLanguage,
				              	 		'thirdLanguage'		=>   $this->thirdLanguage,
				              	 		'address' 			=>   $this->address,
				              	 		'address2' 			=> 	 $this->address2,
				              	 		'dob' 				=>	 $this->dob,
				              	 		'createdDate' 		=>	 date("Y-m-d H:i:s"), // time in India
				              	 		'id' 				=> 	 $Id,
				              	 		'uId' 				=>	 $uId,
				              	 		'MemId'				=> 	 $MemId
			              	 ])->execute ();
			              	 
			              	return   $data;
			              
					     }
			             
			              
			    
				}
            	  


			
			
}