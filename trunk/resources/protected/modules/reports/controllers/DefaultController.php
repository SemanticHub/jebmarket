<?php

class DefaultController extends Controller
{
    /**
     * @var string the default layout for the views.
     */
    public $layout = '//layouts/column2';

	public function actionIndex()
	{
        $report_connect = new JebReport( Yii::app()->params['piwikURL'], Yii::app()->params['piwikSuperAdminToken']);
        $get_userinfo = $report_connect->userExists(Yii::app()->user->name);
        if(empty($get_userinfo)){
            Yii::app()->user->setFlash('message', 'Your account have no access for report.');
            $this->redirect(array('/dashboard'));
        }
		$this->render('index');
	}
}