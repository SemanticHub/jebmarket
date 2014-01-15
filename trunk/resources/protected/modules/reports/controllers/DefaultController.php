<?php

class DefaultController extends Controller
{
    /**
     * @var string the default layout for the views.
     */
    public $layout = '//layouts/column2';

	public function actionIndex()
	{
        $report_connect = new JebReport('http://analytics.jebmarket.com/', 'e93eb7277967921a38ecdd53898e3d72');
        $get_userinfo = $report_connect->userExists(Yii::app()->user->name);
        if(empty($get_userinfo)){
            Yii::app()->user->setFlash('message', 'Your account have no access for report.');
            $this->redirect(array('/dashboard'));
        }
		$this->render('index');
	}
}