<?php

class PagesController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     */
    public $layout = '//layouts/column2';

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
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($type='page', $tag='mainmenu') {
        $this->layout = false;
        $user_id=Yii::app()->user->id;
        $model = new Pages;
        $menu = new Menu;
        $modelData = Pages::model()->findAll("jebapp_user_id=$user_id");
        $stack = array('0');
        foreach($modelData as $slug){
            $lastNum = substr($slug->slug, -1);
            $first_ch = substr($slug->slug, 0, -1);
            if(is_numeric($lastNum) && $first_ch='new-page-'){
                array_push($stack, $lastNum);
            }
        }
        $page_num = max($stack) + 1;
        if (!isset($_GET['ajax'])) {
            $model->slug = 'new-page-'.$page_num;
            $model->title = 'New Page '.$page_num;
            if ($model->save()){
                $menu->pages_id = $model->id;
                $menu->label = $model->title;
                $menu->type = $type;
                $menu->tag = $tag;
                if ($menu->save())
                    echo "hide";
            }
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $this->layout = false;
        Yii::app()->clientScript->scriptMap=array('jquery.js'=>false, 'jquery.yiiactiveform.js'=>false);
        $model = $this->loadModel($id);
        // AJAX validation is needed
        $this->performAjaxValidation($model);
        if (isset($_POST['Pages'])) {
            $model->attributes = $_POST['Pages'];
            if ($model->save())
                Yii::app()->user->setFlash('PageMenu', 'Page Saved Successfully.');
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Pages');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $user_id = Yii::app()->user->id;
        $topMenu = new CDbCriteria();
        $topMenu->condition = "jebapp_user_id=$user_id AND tag='topmenu'";
        $topMenu->order = 'odr ASC';
        $topMenuData=new CActiveDataProvider('Menu', array(
            'criteria'=>$topMenu,
            'pagination'=>array(
                'pageSize'=>200,
            ),
        ));
        $mainMenu = new CDbCriteria();
        $mainMenu->condition = "jebapp_user_id=$user_id AND tag='mainmenu'";
        $mainMenu->order = 'odr ASC';
        $mainMenuData=new CActiveDataProvider('Menu', array(
            'criteria'=>$mainMenu,
            'pagination'=>array(
                'pageSize'=>200,
            ),
        ));
        $footerMenu = new CDbCriteria();
        $footerMenu->condition = "jebapp_user_id=$user_id AND tag='footermenu'";
        $footerMenu->order = 'odr ASC';
        $footerMenuData=new CActiveDataProvider('Menu', array(
            'criteria'=>$footerMenu,
            'pagination'=>array(
                'pageSize'=>200,
            ),
        ));
        $this->render('admin', array(
            'topMenuData' => $topMenuData,
            'mainMenuData' => $mainMenuData,
            'footerMenuData' => $footerMenuData,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Pages the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Pages::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Pages $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'pages-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
