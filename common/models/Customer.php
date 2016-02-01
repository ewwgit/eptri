<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class Customer extends Model
{
    public $customerId;
   


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['customerId'], 'required'],
        ];
    }

    
		    
    
}
