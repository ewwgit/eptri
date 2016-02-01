<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;
use yii\web\UploadedFile;
use Yii;
use kop;
use linslin\yii2\curl;

/**
 * registermodel
 */
class RegisterForm extends Model {
	public $RegisterType = 3;
	public $username;
	public $email;
	public $password;
	public $confirm;
	//public $mobile;
	//public $address;
	//public $city;
	//public $zip;
	//public $state;
	//public $country;
	//public $storename;
	//public $storeaddress;
	//public $imageFile;

// 	public $isItUsZipCode;
// 	public $storemobiles;
// 	public $storetown;

	public function rules() {
		return [ 
				
				[ 
						'username',
						'filter',
						'filter' => 'trim' 
				],
				[ 
						'username',
						'required' 
				],
				  ['username',
				  'match',
				  'pattern' =>'/^[a-zA-Z0-9]+$/',
				  'message' => 'username can only contain alphanumeric characters.'
				  ],
				
				
				[ 
						'username',
						'unique',
						'targetClass' => '\common\models\User',
						'message' => 'Name already Exists Try For New' 
				],
				[ 
						'username',
						'string',
					    'min' => 3,
						'max' => 15,
						
				],
				
				[ 
						'email',
						'filter',
						'filter' => 'trim' 
				],
				[ 
						'email',
						'required' 
				],
					[
					'email',
					'unique',
					'targetClass' => '\common\models\User',
					'message' => 'Email already exists try for new'
					],
				[ 
						'email',
						'email' 
				],
				
				[ 
						'password',
						'required' 
				],
				[ 
						'password',
						'string',
						'min' => 6,
						'max' => 14 
				],
				
				 [['confirm'], 'compare', 'compareAttribute' => 'password'],
			     [['password'],'safe'],
				
				[ 
							'confirm',
							'required' 
				],
				
			     [ 
						'password',
						'match',
						// char and number and special symbol
			     		'pattern' => '/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{6,16}$/',
			     	    'message' => 'should contain  minimum 6 char with atleast 1 letter and 1 number'
				],
				
				
				
				
				
		];
		
		
		
	}
	
	
	public function register() {
		$userModel = new User ();
		// $filePath = $this->upload ();
		$lastId = Yii::$app->db->createCommand ( 'SELECT MAX(id) FROM user' )->queryScalar ();
		$lastInsertId = $lastId + 1;
		$userModel->setPassword ( $this->password );
		$data = Yii::$app->db->createCommand ()->insert ('user', [ 
				'username' => $this->username,
				'password_hash' => $userModel->password_hash,
				'password_reset_token' => $this->password,
				'email' => $this->email,
				'auth_key' => '',
				'status' => 10,
				'created_at' => 1,
				'updated_at' => 1,
				'password' => $this->password,
				'roleId' => $this->RegisterType,
				'createdDate' => date("Y-m-d H:i:s") 
		]
		
		 )->execute ();
		
		return $data;
	}
public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if ($user) {
            

            if ($user->save()) {
                return \Yii::$app->mailer->compose(['text' => 'registerSuccess-text'], ['user' => $user])
                    ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
                    ->setTo($this->email)
                    ->setSubject('Successfully Registered ' . \Yii::$app->name)
                    ->send();
            }
        }

        return false;
    }
// 	public function upload() {
// 		$result = $this->imageFile->saveAs ( realpath ( Yii::$app->basePath ) . '/uploads/profile/' . $this->imageFile->baseName . '.' . $this->imageFile->extension );
// 		$fileUrl = '/uploads/profile/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
//     		return $fileUrl;
//     }
}