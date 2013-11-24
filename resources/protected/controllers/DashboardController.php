<?php

class DashboardController extends Controller {

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2'
	 */
	public $layout='//layouts/column2';

    /**
     * @return array action filters, RBAC implementation
     */
    public function filters() {
        return array(
            'rights'
        );
    }

	/**
	 * Show Dashboard Widgets UI based on rights and user
	 */
	public function actionIndex() {
        $widgets = array();
		$this->render('dashboard', array('widgets'=>$widgets));
	}

    /**
     * Reload a specific Dashboard Widget
     */
    public function actionReload($id) {
        $data = Yii::app()->params['portlets'][$id];
        $this->renderPartial('widgets/_'.$id, array('widget'=>$data));
    }

}