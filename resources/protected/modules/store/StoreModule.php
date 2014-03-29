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
 *         'debug' => 'true',
 *         'install'   => 'true',
 *     ),
 * ),
 *
 */
class StoreModule extends CWebModule {

    public $version = '0.1';

    public $description = 'Yii Module that adds online store capability to any Yii application';

    public $layout = 'store.views.layouts.main';

    public $debug = false;

    public $install = false;

    public $transactionType = array();

    public $transactionPeriod = array();

    public static $messageTranslationCategory = 'storemodule';

    public $successFlashKey = 'success';

    public $errorFlashKey = 'error';

    public $warningFlashKey = 'warning';

    public $infoFlashKey = 'info';

    public $unlimitedStorePlanId = '2';

    public $menu;


	public function init() {
        $this->setImport(array(
			'store.models.*',
			'store.components.*',
		));

        if( empty($this->transactionType) ) $this->transactionType = $this->getStoreTransactionFeeType();

        if( empty($this->transactionPeriod) ) $this->transactionPeriod = $this->getStoreTransactionPeriod();

        if(!Yii::app()->getModule('rights')) {
            throw new CException(Yii::t($this::$messageTranslationCategory, 'Store Module has dependency on Yii-Rights Module'));
            Yii::app()->end();
        }

        $this->menu = Yii::app()->params['usermenu'];

        $this->defaultController = 'store';
	}

	public function beforeControllerAction($controller, $action) {
		if(parent::beforeControllerAction($controller, $action)) {
            return true;
		}
		else {
			return false;
        }
	}

    public function getStoreTransactionFeeType(){
        return array(
            '1' => 'Free',
            '2' => 'Percentage Share',
            '3' => 'Fixed'
        );
    }

    public function getStoreTransactionPeriod(){
        return array(
            '1' => 'On every transaction',
            '2' => 'Weekly',
            '3' => 'Monthly',
            '4' => 'Half Yearly',
            '5' => 'Yearly'
        );
    }

    public function setStoreMenu($pos=null){
        /*$storeMenu = array(
            'storeBlock' => array('label' => 'Store', 'linkOptions' => array('class' => 'list-group-title')),
            'myStore' => array('label' => '<span class="glyphicon glyphicon-home"></span> My Store', 'url' => array('/store')),
            'products' => array('label' => '<span class="glyphicon glyphicon-gift"></span> Products', 'url' => array('/store/product')),
            'categories' => array('label' => '<span class="glyphicon glyphicon-gift"></span> Categories', 'url' => array('/store/category')),
            'settings' => array('label' => '<span class="glyphicon glyphicon-gift"></span> Categories', 'url' => array('/store/setting')),
            'customers' => array('label' => '<span class="glyphicon glyphicon-gift"></span> Customers', 'url' => array('/store/customer')),
            'orders' => array('label' => '<span class="glyphicon glyphicon-list-alt"></span> Orders', 'url' => array('/store/order')),
        );
        if($pos) {
            $elementAfterPos = array_slice(Yii::app()->params['usermenu'], $pos);
            // TODO set menu items into a particular position.
        } else {
            array_push(Yii::app()->params['usermenu'], $storeMenu);
        }*/
    }


    public function getDescription() {
        return $this->description;
    }
}
