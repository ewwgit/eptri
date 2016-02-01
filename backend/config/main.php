<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config =  [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
    		'products' => [
    				'class' => 'backend\modules\products\Products',
    		],
    		'categories' => [
    				'class' => 'backend\modules\categories\Categories',
    		],
    		'role' => [
    				'class' => 'backend\modules\role\Role',
    		],
    		'membershipdetails' => [
            'class' => 'backend\modules\membershipdetails\Membershipdetails',
            ],
    		'user' => [
    				'class' => 'backend\modules\user\user',
    		],
    		'vendor' => [
    				'class' => 'app\modules\vendor\vendor',
    		],
    		'brands' => [
    				'class' => 'app\modules\brands\Brands',
    		],
    		'staticpages' => [
    				'class' => 'app\modules\staticpages\staticpages',
    		],
    		'units' => [
    				'class' => 'app\modules\units\units',
    		],
    		'priceunits' => [
    				'class' => 'app\modules\priceunits\priceunits',
    		],
    		'saleindicators' => [
    				'class' => 'app\modules\saleindicators\saleindicators',
    		],
    		'productsbrands' => [
    				'class' => 'app\modules\productsbrands\Productsbrands',
    		],
    	],
    'components' => [
        'user' => [
            'identityClass' => 'app\models\Users',
            'enableAutoLogin' => true,
        		'identityCookie' => [
        				'name' => '_backendUser', // unique for backend
        				'path' => '/advanced/backend/web' // correct path for backend app.
        		]
        ],
    		'view' => [
    				'theme' => [
    						'pathMap' => [
    								'@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
    						],
    				],
    		],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
if (!YII_ENV_TEST) {
	// configuration adjustments for 'dev' environment
	$config['bootstrap'][] = 'debug';
	$config['modules']['debug'] = 'yii\debug\Module';

	$config['bootstrap'][] = 'gii';
	$config['modules']['gii'] = [
    		'class' => 'yii\gii\Module',
    		'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*', '192.168.1.167','192.168.1.139']
    ];
}

return $config;