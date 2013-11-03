<?php
// The main Web application configurations.
Yii::setPathOfAlias('editable', dirname(__FILE__).'/../extensions/x-editable');
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'JebMarket',
    'sourceLanguage' => '00',
    'language' => 'en',
    'theme' => 'jebmarket',
    'preload' => array('log'),
    # autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.rights.*',
        'application.modules.rights.components.*',
        'editable.*'
     ),
    'modules' => array(
        # Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'mustbedisableonproduction',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('*', '::1'),
        ),
        # Authorization Rights
        'rights'=>array(
            'superuserName' => 'JebAdmin',
            'authenticatedName' => 'Registered',
            'flashSuccessKey'=>'success',
            'flashErrorKey'=>'error',
            'appLayout'=>'application.themes.jebmarket.views.layouts.main',
            'layout'=>'application.themes.jebmarket.views.rights.layout',
            'displayDescription'=>false,
            'cssFile' => false,
            'enableBizRule'=>false,
            'enableBizRuleData'=>false,
            'debug'=>false,
            // For Installer
            //'install'=> true,
            //'superUsers'=>array(
            // 40=>'jebadmin',
            // ),
        )
    ),
    'components' => array(
        'themeManager' => array(
            'basePath' => dirname(__FILE__) . '/../themes',
        ),
        'clientScript' => array(
            'scriptMap' => array(
                'jquery.min.js' => 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
            ),
        ),
        'editable' => array(
            'class'     => 'editable.EditableConfig',
            'form'      => 'plain',
            'mode'      => 'inline',
            'defaults'  => array(
                'emptytext' => 'Click to Add'
            )
        ),
        'user' => array(
            'allowAutoLogin' => true,
            //'class' => 'WebUser',
            'class' => 'RWebUser',
            'guestName' => 'Guest',
        ),
        # SEF URL
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
                'rights/<controller:\w+>' => 'rights/<controller>',
                'rights/<controller:\w+>/<action:\w+>' => 'rights/<controller>/<action>',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<view:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        # Database Access
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=jassifie_yii_jeb',
            'emulatePrepare' => true,
            'username' => 'jassifie_yiijeb',
            'password' => '99.9%available',
            'charset' => 'utf8',
        ),
        # Authorization Manager
        'authManager' => array(
            //'class' => 'CDbAuthManager',
            'class' => 'RDbAuthManager',
            'connectionID' => 'db',
            'assignmentTable' => 'jebapp_auth_assignment',
            'itemTable' => 'jebapp_auth_item',
            'itemChildTable' => 'jebapp_auth_item_child',
            'rightsTable' => 'jebapp_rights',
            'defaultRoles' => array('Guest'),
        ),
        # Default Error Handler
        'errorHandler' => array(
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
//                array(
//                        'class'=>'CWebLogRoute',
//                )
            ),
        ),
    ),
    # Application-level parameters, Yii::app()->params['paramName']
    'params' => array(
        'sitemenu' => array(
            'site/contact' => 'Contact',
            'site/login' => 'Login',
            'site/logout' => 'Logout',
            'faq/index' => 'FAQ',
            'user/profile' => 'User Profile'
        ),
        'usermenu' => array(
            'account' => array('label' => 'User', 'linkOptions' => array('class' => 'list-group-title')),
            'dashboard' => array('label' => 'Dashboard', 'url' => array('dashboard')),
            'profile' => array('label' => 'Profile', 'url' => array('profile')),
            'password' => array('label' => 'Change Password', 'url' => array('changepass')),
            'store' => array('label' => 'Store', 'linkOptions' => array('class' => 'list-group-title')),
            'products' => array('label' => 'Products', 'url' => array('products')),
            'orders' => array('label' => 'Orders', 'url' => array('orders')),
        ),
        'adminmenu' => array(
            array('label' => 'Sliders', 'url' => array('/slider/admin')),
            array('label' => 'Email Templates', 'url' => array('/emailTemplate/admin')),
            array('label' => 'FAQs', 'url' => array('/faq/admin')),
            array('label' => 'Pages', 'url' => array('/pages/admin')),
            array('label' => 'Menus', 'url' => array('/menu/admin')),
            array('label' => '', 'url' => array('#'), 'itemOptions'=>array('class'=>'divider')),
            array('label' => 'Users', 'url' => array('/user/admin')),
            array('label' => 'User Access', 'url' => array('/rights')),
            array('label' => '', 'url' => array('#'), 'itemOptions'=>array('class'=>'divider')),
            array('label' => 'Location Levels', 'url' => array('/locationLevel/admin')),
            array('label' => 'Locations', 'url' => array('/location/admin')),
            array('label' => '', 'url' => array('#'), 'itemOptions'=>array('class'=>'divider')),
            array('label' => 'Settings', 'url' => array('/settings/index')),
        ),
    ),
);