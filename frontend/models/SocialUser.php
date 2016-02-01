<?php

namespace app\models;

/**
 * This is a class for  "SocialUser".
 *
 * @property integer $id
 * @property string $username
 * @property varcar $password
 * @property string $accessToken
 * @property string $client
 *
 */
class SocialUser extends \app\models\User implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
	public $client;
	
	public function __construct($client)
	{
		$this->client = $client;
	}
    

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
    	
    	return $this;
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {

        return $this;
    }

    
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

}
