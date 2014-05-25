<?php
/**
 * User: Ekram <ekram.syed@gmail.com>
 * Date: 2/13/14
 * Time: 12:52 AM
 */

class StoreBaseController extends CController {


    public $storeMenu=array();

    public $storeLinks=array();

    public $menu=array();

    public $breadcrumbs=array();

    public $storeBreadcrumbs=array();

    public function init() {
        parent::init();
        $this->menu = $this->module->menu;
    }

    public function filterStoreRights($filterChain) {
        if(Yii::app()->getModule('rights')) {
            $filter = new RightsFilter;
            $filter->allowedActions = $this->allowedActions();
            $filter->filter($filterChain);
        } else {
            $filterChain->run();
        }
    }

    public function allowedActions() {
        return '';
    }

    public function accessDenied($message=null) {
        if( $message===null )
            $message = Rights::t('core', 'You are not authorized to perform this action.');

        $user = Yii::app()->getUser();
        if( $user->isGuest===true )
            $user->loginRequired();
        else
            throw new CHttpException(403, $message);
    }
    public function setLiveFlashes($message, $type = 'success'){
        Yii::app()->user->setFlash($type, $message);
        $this->renderPartial('/layouts/_flash_messages');
    }
}
