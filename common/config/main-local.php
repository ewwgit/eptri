<?php
return [
    'components' => [
           'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=grocery',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
						'transport' => [
								'class' => 'Swift_SmtpTransport',
								'host' => 'mail.expertwebworx.in',
								'username' => 'grocerdeals@expertwebworx.in',
								'password' => 'Mh=FXn&qEke4',
								'port' => '25',
								'encryption' => 'tls',
						],         
        ],
    ],
];
