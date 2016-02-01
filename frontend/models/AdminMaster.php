<?php

namespace app\models;

use Yii;
use app\models\Users;

use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "admin".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property string $email
 * @property string $firstName
 * @property string $lastName
 * @property string $profileImage
 * @property integer $roleId
 * @property integer $status
 * @property string $createdDate
 * @property string $updatedDate
 * @property integer $createdBy
 * @property integer $updatedBy
 *
 * @property Brands[] $brands
 * @property Brands[] $brandss0
 * @property StaticePages[] $static
 * @property StaticPages[] $static0
 * @property Role $role
 */
class AdminMaster extends \yii\db\ActiveRecord
{
	public $roles;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    
    public function getAllRoles()
    {
    
    	$allRolesobj = Role::find()->select(['RoleId','RoleName'])->where(['status'=>'Active'])->all();
    	$data = ArrayHelper::toArray($allRolesobj, [
    			'RoleId',
    			'RoleName'
    	]);
    
    	$roleIdCol = array_column($data, 'RoleId');
    	$RoleNameCol = array_column($data, 'RoleName');
    	$RolesData = array_combine($roleIdCol, $RoleNameCol);
    	return $RolesData;
    }
    
    
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'email', 'firstName', 'lastName', 'roleId'], 'required'],
            
            [['roleId','status'], 'integer'],
            [['createdDate', 'updatedDate', 'password_reset_token', 'auth_key','phoneNumber','roles'], 'safe'],
            [['username', 'password_hash', 'email', 'firstName', 'lastName'], 'string', 'max' => 200],
        		[['email'],'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'email' => 'Email',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'profileImage' => 'Profile Image',
            'roleId' => 'Role Name',
            'status' => 'Status',
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrands()
    {
        return $this->hasMany(brands::className(), ['createdBy' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrands0()
    {
        return $this->hasMany(Brands::className(), ['updatedBy' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaticPages()
    {
        return $this->hasMany(StaticPages::className(), ['createdBy' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaticPages0()
    {
        return $this->hasMany(StaticPages::className(), ['updatedBy' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['RoleId' => 'roleId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    public function beforeSave($insert)
    {
    	if (parent::beforeSave($insert)) {
    		$adminUserModel = new Users();
    		$adminUserModel->setPassword($this->password_hash);
    		//print_r($adminUserModel->password_hash);exit();
    		$this->password_hash = $adminUserModel->password_hash;
    		return true;
    	} else {
    		return false;
    	}
    }
    public function behaviors()
    {
    	return [
    			[
    					'class' => TimestampBehavior::className(),
    					'createdAtAttribute' => 'createdDate',
    					'updatedAtAttribute' => 'updatedDate',
    					'value' => new Expression('NOW()'),
    			],
    	];
    }
}
