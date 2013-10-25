<?php

class PageController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2'
     */
    public $layout = '//layouts/column1';

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
            $criteria = new CDbCriteria();
            $criteria->condition = "slug ='".trim($view)."'";
            $page = Pages::model()->find($criteria);
            if($page) $this->render('page', array('model' => $page));
        } 
    }
}
