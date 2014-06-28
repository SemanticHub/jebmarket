<?php

class PageController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2'
     */
    public $layout = '//layouts/main';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'rights'
        );
    }

    /**
     * Displays a particular page.
     * @param integer $view the slug of the page to be displayed
     */
    public function actionView($view) {
        if (isset($view)) {
            $user_id_url = Yii::app()->request->getParam('user_id');
            $criteria = new CDbCriteria();
            if(!empty($user_id_url)){
                $criteria->condition = "slug ='".trim($view)."' AND jebapp_user_id ='".$user_id_url."'";
            }else{
                $criteria->condition = "slug ='".trim($view)."'";
            }
            $page = Pages::model()->find($criteria);
            if($page) $this->render('page', array('model' => $page));
            else throw new CHttpException(404,'Page not found.');
        } 
    }
}
