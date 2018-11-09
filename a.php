<?php

return [
	'basePath' => __DIR__ . DIRECTORY_SEPARATOR.'..',
    'emails' => 'test1@bob.co,test2@bob.co,test3@bob.co',
    'domain' => 'https://api.test.com/',
    'ApiOperatorName' => 'TEST',
    'ApiSecretKey' => '123456789',
    'languages' => [
        'default' => 'en',
        'supported' => ['en', 'de', 'ar', 'fr', 'it', /*'jp',*/ 'nl', 'pl', 'ru', 'tr']
    ],
    'geoIp2' => [
        'pathToDb' => '/usr/share/GeoIP/GeoIP2-City.mmdb'
    ],
    'labelsite' => [
        'homePage' => 'http://www.site.com/',
        'emailExists' => 'http://www.site.com/rfm/emailExists',
        'forcePage' => 'http://www.site.com/force/',
        'termsAndConditions' => 'https://www.site.com/terms-and-conditions'
    ],
    'redisSettings' => require(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR
        . 'protected' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'redis.php'),
	'assetManager' => [
            'baseUrl' => function() {return Yii::app()->params['assetBaseUrl'];},
    ],
];