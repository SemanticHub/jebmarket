<?php

class PageController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            //'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
            'rights'
        );
    }

    /**
     * Displays a particular model.
     * @param integer $view the ID of the model to be displayed
     */
    public function actionView($view) {
        if (isset($view)) {
            $criteria = new CDbCriteria();
            $criteria->condition = "slug ='".trim($view)."'";
            $page = Pages::model()->find($criteria);
            if($page) $this->render('page', array('model' => $page));
        } 
    }
}
