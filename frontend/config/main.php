<?php
$params = array_merge ( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );
use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());
$config = [ 
		'id' => 'app-frontend',
		'basePath' => dirname ( __DIR__ ),
		'bootstrap' => [ 
				'log' 
		],
		'modules' => [
				'vendor' => [
						'class' => 'app\modules\vendor\vendor',
				],
				'staticpages' => [
    				'class' => 'app\modules\staticpages\staticpages',
    		],
		],
		'controllerNamespace' => 'frontend\controllers',
		'components' => [ 
				'authClientCollection' => [ 
						'class' => 'yii\authclient\Collection',
						'clients' => [ 
								'facebook' => [
										'class' => 'yii\authclient\clients\Facebook',
										'clientId' => '927796680621530',
										'clientSecret' => '24e60a68030eb628112395df2e7e59f8',
										'scope' => 'email'
								],
								'twitter' => [
										'class' => 'yii\authclient\clients\Twitter',
										'consumerKey' => 'MLeg1yi1SbW2lXRS7UtqA88hW',
										'consumerSecret' => 'yTLtg4Tm1aKjPt1UnCXfibfonUoW1PpMoHLsu0oSIQS2rqYVcn'
								],
								'google' => [ 
										'class' => 'yii\authclient\clients\GoogleOAuth',
										'clientId' => '604006204304-bvvojiq2jdf64027tilr6ojb8dl7umep.apps.googleusercontent.com',
										'clientSecret' => 'T9VwP0btGXMEFU5OQEF7Up2i' 
								],
																
						] 
				]
				,
				'user' => [ 
						'identityClass' => 'common\models\User',
						'enableAutoLogin' => true 
				],
				 /* 'paypal'=> [
						'class'        => 'common\components\Paypal',
						'clientId'     => 'you_client_id',
						'clientSecret' => 'you_client_secret',
						'isProduction' => false,
						// This is config file for the PayPal system
						'config'       => [
								'http.ConnectionTimeOut' => 30,
								'http.Retry'             => 1,
								'mode'                   => \common\components\Paypal::MODE_SANDBOX, // development (sandbox) or production (live) mode
								'log.LogEnabled'         => YII_DEBUG ? 1 : 0,
								'log.FileName'           => '@runtime/logs/paypal.log',
								'log.LogLevel'           => \common\components\Paypal::LOG_LEVEL_FINE,
						]
				],  */
				/* 'paypal'       => [
						'class'        => 'ak\Paypal',
						'clientId'     => 'you_client_id',
						'clientSecret' => 'you_client_secret',
						'isProduction' => false,
						// This is config file for the PayPal system
						'config'       => [
								'http.ConnectionTimeOut' => 30,
								'http.Retry'             => 1,
								//'mode'                   => \ak\Paypal::MODE_SANDBOX, // development (sandbox) or production (live) mode
								'log.LogEnabled'         => YII_DEBUG ? 1 : 0,
								'log.FileName'           => '@runtime/logs/paypal.log',
								//'log.LogLevel'           => \ak\Paypal::LOG_LEVEL_FINE,
						]
				], */
				'log' => [ 
						'traceLevel' => YII_DEBUG ? 3 : 0,
						'targets' => [ 
								[ 
										'class' => 'yii\log\FileTarget',
										'levels' => [ 
												'error' 
										] 
								] 
						] 
				],
				'request' => [
						'baseUrl' => $baseUrl,
				],
				'urlManager' => [
						'baseUrl' => $baseUrl,
						'enablePrettyUrl' => true,
						'showScriptName' => false,
						'rules' => []
				],
				
				/* 'db' => [ 
						'class' => '\yii\db\Connection',
						'dsn' => 'mysql:host=localhost;dbname=webworx_grocery',
						'username' => 'webworx_grocery',
						'password' => 'Jm2X+&Pf;oyh',
						'charset' => 'utf8' 
				], */
				'assetManager' => [
						'bundles' => [
								'dosamigos\google\maps\MapAsset' => [
										'options' => [
												'key' => 'AIzaSyCONh1vVwUeu6hG60qKqMNPOYF3qv8xKjM',
												'language' => 'id',
												'version' => '3.1.18'
										]
								]
						]
				],
				
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				] 
		],
		'params' => $params 
];
if (! YII_ENV_TEST) {
	// configuration adjustments for 'dev' environment
	$config ['bootstrap'] [] = 'debug';
	$config ['modules'] ['debug'] = 'yii\debug\Module';
	
	$config ['bootstrap'] [] = 'gii';
	$config ['modules'] ['gii'] = [ 
			'class' => 'yii\gii\Module',
			'allowedIPs' => [ 
					'127.0.0.1',
					'::1',
					'192.168.1.*',
					'192.168.1.167',
					'192.168.1.139' 
			] 
	];
}
return $config;