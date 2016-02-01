<?php
/**
 * Yii2 test controller
 *
 * @category  Web-yii2-example
 * @package   yii2-curl-example
 * @author    Nils Gajsek <info@linslin.org>
 * @copyright 2013-2015 Nils Gajsek<info@linslin.org>
 * @license   http://opensource.org/licenses/MIT MIT Public
 * @version   1.0.4
 * @link      http://www.linslin.org
 *
 */
 
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\SocialUser;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessContr;
use linslin\yii2\curl;
 
class ZipController extends Controller
{
 
    /**
     * Yii action controller
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
 
    public function actionIndex()
    {
        echo 'hello';exit();
    }
 
    /**
     * cURL GET example
     */
    public function actionZipinfo()
    {
        //Init curl
        $curl = new curl\Curl();
 
        //get http://example.com/
        $response = $curl->get('http://gomashup.com/json.php?fds=geo/usa/zipcode/01001');
        preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%)(]/s', '', $response);
        $convertedResponse = str_replace("(","",$response);
        $convertedResponse = str_replace(")","",$convertedResponse);
        $jsonDecode = json_decode($convertedResponse);
        print_r($jsonDecode->result[0]->Longitude);exit();
    }
 
 
    /**
     * cURL POST example with post body params.
     */
    public function actionUogin()
    {
        //Init curl
        $curl = new curl\Curl();
 
        //post http://example.com/
        $response = $curl->setOption(
                CURLOPT_POSTFIELDS, 
                http_build_query(array(
                    'USZip' => '01001'
                )
            ))
            ->post('http://www.webservicex.net/uszip.asmx/GetInfoByZIP');
        print_r($response);exit();
    }
 
 
    /**
     * cURL multiple POST example one after one
     */
    public function actionMultipleRequest()
    {
        //Init curl
        $curl = new curl\Curl();
 
 
        //post http://example.com/
        $response = $curl->setOption(
            CURLOPT_POSTFIELDS, 
            http_build_query(array(
                'myPostField' => 'value'
                )
            ))
            ->post('http://example.com/');
 
 
        //post http://example.com/, reset request before
        $response = $curl->reset()
            ->setOption(
                CURLOPT_POSTFIELDS, 
                http_build_query(array(
                    'myPostField' => 'value'
                )
            ))
            ->post('http://example.com/');
    }
 
 
    /**
     * cURL advanced GET example with HTTP status codes
     */
    public function actionGetAdvancedExample()
    {
        //Init curl
        $curl = new curl\Curl();
 
        //get http://example.com/
        $response = $curl->post('http://example.com/');
 
        // List of status codes here http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
        switch ($curl->responseCode) {
 
            case 200:
                //success logic here
                break;
 
            case 404:
                //404 Error logic here
                break;
        }
    }
}