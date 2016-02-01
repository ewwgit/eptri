<?php

namespace app\models;

use Yii;

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
            [['pageTitle', 'pageContent', 'seoKeys', 'metaKeys', 'status', 'createdBy', 'updatedBy', 'createdDate', 'updatedDate', 'ipAddress'], 'required'],
            [['pageTitle', 'pageContent', 'status'], 'string'],
            [['createdBy', 'updatedBy'], 'integer'],
            [['createdDate', 'updatedDate','pageContent'], 'safe'],
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
            'createdDate' => 'Created Date',
            'updatedDate' => 'Updated Date',
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
}
