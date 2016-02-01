<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "static_pages".
 *
 * @property integer $staticId
 * @property string $pageTitle
 * @property string $pageContent
 * @property string $seoKeys
 * @property string $metaKeys
 * @property string $status
 * @property integer $createdBy
 * @property integer $updatedBy
 * @property string $createdDate
 * @property string $updatedDate
 * @property string $ipAddress
 *
 * @property Admin $createdBy0
 * @property Admin $updatedBy0
 */
class StaticPages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'static_pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pageTitle', 'pageContent', 'seoKeys', 'metaKeys'], 'required'],
            [['pageTitle', 'pageContent', 'status'], 'string'],
            [['createdBy', 'updatedBy'], 'integer'],
            [['createdDate', 'updatedDate'], 'safe'],
        		
        		[
        		'pageTitle',
        		'unique',
        		'message' => 'pageTitle already exists try for new'
        	   ],
        		
            [['seoKeys', 'metaKeys', 'ipAddress'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'staticId' => 'Static ID',
            'pageTitle' => 'Page Title',
            'pageContent' => 'Page Content',
            'seoKeys' => 'Seo Keys',
            'metaKeys' => 'Meta Keys',
            'status' => 'Status',
            'createdBy' => 'Created By',
            'updatedBy' => 'Updated By',
            'ipAddress' => 'Ip Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(Admin::className(), ['id' => 'createdBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy0()
    {
        return $this->hasOne(Admin::className(), ['id' => 'updatedBy']);
    }
    public function beforeSave($insert)
    {
    	if (parent::beforeSave($insert)) {
    		//$this->createdBy = 1;
    		//$this->updatedBy = 1;
    		$this->createdBy = 1;
    		$this->updatedBy = 1;
    		$this->ipAddress = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    		return true;
    	} else {
    		$this->createdBy = 1;
    		$this->updatedBy = 1;
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
