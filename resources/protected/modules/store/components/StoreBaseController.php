<?php
/**
 * User: Ekram <ekram.syed@gmail.com>
 * Date: 2/13/14
 * Time: 12:52 AM
 */

class StoreBaseController extends CController {

    public $menu=array();

    public $breadcrumbs=array();

    public function init() {
        parent::init();
        // TODO make it dynamic and accessbased
        $this->menu = Yii::app()->params['usermenu'];
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
}
