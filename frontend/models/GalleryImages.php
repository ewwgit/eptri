<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "gallery_images".
 *
 * @property integer $galleryId
 * @property integer $vendorId
 * @property string $imageUrl
 * @property string $createdDate
 * @property integer $createdBy
 * @property string $ipAdress
 */
class GalleryImages extends \yii\db\ActiveRecord
{
	public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendorId', 'imageUrl', 'createdDate',  'ipAdress','file'], 'safe'],
            [['vendorId'], 'integer'],
            [['imageUrl'], 'string'],
            [['createdDate'], 'safe'],
        	[['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,gif,jpg', 'maxFiles' => 4],
            [['ipAdress'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'galleryId' => 'Gallery ID',
            'vendorId' => 'Vendor ID',
            'imageUrl' => 'Image Url',
            'createdDate' => 'Created Date',
            
            'ipAdress' => 'Ip Adress',
        ];
    }
    public function upload()
    {
    	
    		foreach ($this->file as $file) {
    			$galleryImges = new GalleryImages();
    			$galleryImges->vendorId= Yii::$app->user->id;
    			$galleryImges->ipAdress= $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    			$imageName = rand(1000,100000).$file->baseName;
    			$galleryImges->imageUrl = 'web/uploads/storegallery/'.$imageName.'.'.$file->extension;
    			$galleryImges->save();
    			$file->saveAs(realpath(Yii::$app->basePath).'/web/uploads/storegallery/' . $imageName . '.' . $file->extension);
    		}
    		
    }
    public function behaviors()
    {
    	return [
    			[
    					'class' => TimestampBehavior::className(),
    					'createdAtAttribute' => 'createdDate',
    					'updatedAtAttribute' => 'createdDate',
    					'value' => new Expression('NOW()'),
    			],
    	];
    }
}
