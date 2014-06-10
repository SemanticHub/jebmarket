<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends RController {
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1'
	 */
	public $layout='//layouts/column1';

	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
    public $menu=array();

	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 */
	public $breadcrumbs=array();

    /**
     * @var string the meta description for the website
     */
    public $metaDescription = null;

    /**
     * @var string the meta keyword for the website
     */
    public $metaKeywords = null;

    /**
     * @var string the page header for the admin panel
     */
    public $pageHeader = null;

    /**
     * @var array the visible menu link for top bar
     */
    public $menuLinks=array();

    public $showTopNavBar = true;

    private $_assetUrl;

    /*
     * Set all Application Settings from database to Yii::app()->params so that we can still use Yii::app()->params['paramName']
     */
    public function init() {
        Yii::app()->theme = Website::model()->theme();
        parent::init();
        Yii::app()->params = CMap::mergeArray(Yii::app()->params, Settings::model()->getParams());
        $this->verifiedUser();
    }

    public function verifiedUser(){
        // if user is logged in or try for a login
        if( Yii::app()->user->id) {
            $user = User::model()->findByPk(Yii::app()->user->id);
            // if user email not verified
            if ($user->activationstatus == 0 ) {
                $from = strtotime($user->joined);
                $to = strtotime(date("Y-m-d H:i:s"));
                $diff = $to - $from;
                $days = round($diff / 60 / 60 / 24);
                $remainingDays = Yii::app()->params['emailVerificationLimit'] - $days;
                    if($days < Yii::app()->params['emailVerificationLimit'] ) {
                        Yii::app()->params['activationStatus'] = array(
                            'count' => $remainingDays,
                        );

                    } else {
                        $user->status = 0;
                        $user->update();
                        Yii::app()->user->logout();
                        Yii::app()->user->setFlash('danger', 'Your account is suspended. You\'ve not yet verify your email address. Please verify your email by clicking on the verification link in the email we sent during registration or, '.CHtml::link("Click Here", array('user/sendemailverification', 'user'=>$user->username),array()).' for resend the verification email');
                    }
            }
        }
    }

    public function getAssetUrl(){
        if ($this->_assetUrl === null)
            $this->_assetUrl = Yii::app()->getAssetManager()->publish(Yii::app()->basePath.'/themes/'.Website::model()->theme().'/assets/');
        return $this->_assetUrl;
    }

    public function userMenu(){
        $userMenu = array();
        foreach (Yii::app()->params['usermenu'] as $userMenuItems) {
            // TODO: We need to find a way to implement user menu rights
        }
    }

}