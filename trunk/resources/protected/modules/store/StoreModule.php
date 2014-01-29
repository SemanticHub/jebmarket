<?php

/**
 * Store Module class file.
 *
 * @author Syed Ekram Uddin Emon <ekram.syed@gmail.com>
 * @copyright Copyright &copy; 2014 jebmarket.com
 * @version 1.0.0
 *
 * DO NOT CHANGE THE DEFAULT CONFIGURATION VALUES!
 *
 * You may overload the module configuration values in your configuration like so:
 *
 * 'modules'=>array(
 *     'store'=>array(
 *         'userNameColumn'=>'name',
 *         'flashSuccessKey'=>'success',
 *         'flashErrorKey'=>'error',
 *     ),
 * ),
 *
 * Please note that some store module common settings will be create at the time of module installation.
 * Data will be saved into application settings table (jebapp_settings). Options are
 * array(
 *     'allowMultiStorePerUser' => false,
 *     'productImageThumbWidthHeight' => '228:228',
 *     'productImageWidthHeight' => '',
 * )
 */
class StoreModule extends CWebModule
{
    public $version = '0.1';

    public $description = 'Add online store capability to any Yii application';

    public $layout = 'store.views.layouts.main';

    public $debug = false;

    public $install = false;

    public $authorizationFilters = array();

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'store.models.*',
			'store.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
