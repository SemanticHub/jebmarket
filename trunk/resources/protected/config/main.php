<?php

// This is the main Web application configuration.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'JebMarket',
    'sourceLanguage' => '00',
    'language' => 'en',
    # default theme
    'theme' => 'jebmarket',
    # preloading 'log' component
    'preload' => array('log'),
    # autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    # application modules
    'modules' => array(
        # Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'mustbedisableonproduction',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('*', '::1'),
            'generatorPaths' => array(
                'application.gii'
            ),
        ),
    ),
    # application components
    'components' => array(
        # Theme Settings
        'themeManager' => array(
            'basePath' => dirname(__FILE__) . '/../themes',
        ),
        'clientScript' => array(
            'scriptMap' => array(
                'jquery.min.js' => 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
            ),
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'class' => 'WebUser',
        ),
        # enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<view:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        # MySQL Database Access
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=jassifie_yii_jeb',
            'emulatePrepare' => true,
            'username' => 'jassifie_yiijeb',
            'password' => '99.9%available',
            'charset' => 'utf8',
        ),
        # Authorization Manager
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
            'assignmentTable' => 'jebapp_auth_assignment',
            'itemTable' => 'jebapp_auth_item',
            'itemChildTable' => 'jebapp_auth_item_child',
        ),
        # Default Error Handler
        'errorHandler' => array(
            # use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        # Application Log
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            # uncomment the following to show log messages on web pages on development.
            /* array(
              'class'=>'CWebLogRoute',
              ), */
            ),
        ),
    ),
    # application-level parameters that can be accessed Yii::app()->params['paramName']
    'params' => array(
        'superAdminEmail' => 'ekram.syed@gmail.com',
        'adminEmail' => 'admin@jebmarket.com',
        'supportEmail' => 'support@jebmarket.com',
        'sitemenu' => array(
            'site/contact' => 'Contact',
            'site/login' => 'Login',
            'user/signup' => 'Signup',
            'faq/index' => 'FAQ',
            'user/profile' => 'User Profile'
        ),
        'usermenu' => array(
            'account' => array('label' => 'User', 'linkOptions' => array('class' => 'list-group-title')),
            'dashboard' => array('label' => 'Dashboard', 'url' => array('dashboard')),
            'profile' => array('label' => 'Profile', 'url' => array('profile')),
            'edit' => array('label' => 'Edit Account', 'url' => array('edit')),
            'password' => array('label' => 'Change Password', 'url' => array('password')),
            'store' => array('label' => 'Store', 'linkOptions' => array('class' => 'list-group-title')),
            'products' => array('label' => 'Products', 'url' => array('products')),
            'orders' => array('label' => 'Orders', 'url' => array('orders')),
        ),
        'adminmenu' => array(
            array('label' => Yii::t('phrase', 'Users'), 'url' => array('/user/admin')),
            array('label' => Yii::t('phrase', 'Sliders'), 'url' => array('/slider/admin')),
            array('label' => Yii::t('phrase', 'Email Templates'), 'url' => array('/emailTemplate/admin')),
            array('label' => Yii::t('phrase', 'FAQs'), 'url' => array('/faq/admin')),
            array('label' => Yii::t('phrase', 'Pages'), 'url' => array('/pages/admin')),
            array('label' => Yii::t('phrase', 'Menus'), 'url' => array('/menu/admin')),
            array('label' => Yii::t('phrase', 'Settings'), 'url' => array('/settings/admin')),
            array('label' => Yii::t('phrase', 'Logout'), 'url' => array('/site/logout'))
        ),
        'uploadPath' => dirname(__FILE__) . '/../data/media/upload',
        'uploadUrl' => 'medias/',
    ),
);