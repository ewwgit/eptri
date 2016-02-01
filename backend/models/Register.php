<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "register".
 *
 * @property integer $rId
 * @property integer $uid
 * @property string $firstName
 * @property string $lastName
 * @property string $middleName
 * @property string $dob
 * @property string $mobile
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $zip
 * @property string $createdDate
 * @property string $modifiedDate
 *
 * @property User $u
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
            [['uid', 'firstName', 'lastName', 'middleName', 'dob', 'mobile', 'address1', 'address2', 'city', 'state', 'country', 'zip', 'createdDate', 'modifiedDate'], 'required'],
            [['uid'], 'integer'],
            [['dob', 'createdDate', 'modifiedDate'], 'safe'],
            [['address1', 'address2'], 'string'],
            [['firstName', 'lastName', 'middleName'], 'string', 'max' => 200],
            [['mobile', 'city', 'state', 'country'], 'string', 'max' => 250],
            [['zip'], 'string', 'max' => 100],
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
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'middleName' => 'Middle Name',
            'dob' => 'Dob',
            'mobile' => 'Mobile',
            'address1' => 'Address1',
            'address2' => 'Address2',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'zip' => 'Zip',
            'createdDate' => 'Created Date',
            'modifiedDate' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getU()
    {
        return $this->hasOne(User::className(), ['id' => 'uid']);
    }
}
