<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "register".
 *
 * @property integer $rId
 * @property string $uid
 * @property integer $id
 * @property integer $MemId
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $gender
 * @property string $dob
 * @property string $email
 * @property string $secondLanguage
 * @property string $thirdLanguage
 * @property string $mobile
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $zip
 * @property string $businessName
 * @property string $storeAddress
 * @property string $imageFile
 * @property string $createdDate
 * @property string $modifiedDate
 */
class Register extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'id', 'MemId', 'firstname', 'lastname', 'middlename', 'gender', 'dob', 'email', 'secondLanguage', 'thirdLanguage', 'mobile', 'address', 'address2', 'city', 'state', 'country', 'zip', 'imageFile', 'createdDate', 'modifiedDate'], 'required'],
            [['id', 'MemId'], 'integer'],
            [['gender', 'imageFile'], 'string'],
            [['createdDate', 'modifiedDate'], 'safe'],
            [['uid'], 'string', 'max' => 200],
            [['firstname', 'lastname', 'middlename', 'email', 'zip'], 'string', 'max' => 100],
            [['dob', 'secondLanguage', 'thirdLanguage'], 'string', 'max' => 50],
            [['mobile', 'address', 'address2', 'city', 'state', 'country', 'businessName', 'storeAddress'], 'string', 'max' => 250],
            [['id'], 'unique'],
            [['uid'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rId' => 'R ID',
            'uid' => 'Uid',
            'id' => 'ID',
            'MemId' => 'Mem ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'middlename' => 'Middlename',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'email' => 'Email',
            'secondLanguage' => 'second Language',
            'thirdLanguage' => 'third Language',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'address2' => 'Address2',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'zip' => 'Zip',
            'businessName' => 'Business Name',
            'storeAddress' => 'Store Address',
            'imageFile' => 'Image File',
            'createdDate' => 'Created Date',
            'modifiedDate' => 'Modified Date',
        ];
    }
    
}
