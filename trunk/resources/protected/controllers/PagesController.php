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

    public function actionPageins() {
        $this->layout = false;
        $this->render('pageins');
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $this->layout = false;
        $user_id = Yii::app()->user->id;
        $type = Yii::app()->request->getParam('type');
        $tag = Yii::app()->request->getParam('tag');
        $mName = Yii::app()->request->getParam('mName');
        $menu = new Menu;
        $model = new Pages;
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
        if($type == 'page'){
            if (!isset($_GET['ajax'])) {
                $model->slug = 'new-page-'.$page_num;
                $model->title = 'New Page '.$page_num;
                if ($model->save()){
                    $menu->pages_id = $model->id;
                    $menu->label = $model->title;
                    $menu->type = $type;
                    $menu->tag = $tag;
                    $menu->url = $model->slug;
                    if ($menu->save())
                        echo "hide";
                }
            }
        }elseif($type == 'module'){
            if (!isset($_GET['ajax'])) {
                $menu->label = 'New Page '.$page_num;
                $menu->type = $type;
                $menu->url = $mName;
                $menu->tag = $tag;
                if ($menu->save())
                    echo "hide";
            }
        }elseif($type == 'custom'){
            if (!isset($_GET['ajax'])) {
                $menu->label = 'Link Page '.$page_num;
                $menu->type = $type;
                $menu->url = 'http://www.demo.com';
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
        Yii::app()->clientScript->scriptMap['*.js'] = false;
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
        $topMenu->select=array('*','COALESCE( parent_id,odr, \'\') AS colorder');
        $topMenu->condition = "jebapp_user_id=$user_id AND tag='topmenu'";
        $topMenu->order = 'colorder DESC';
        $topMenuData=new CActiveDataProvider('Menu', array(
            'criteria'=>$topMenu,
            'pagination'=>array(
                'pageSize'=>200,
            ),
        ));
        $mainMenu = new CDbCriteria();
        $mainMenu->select=array('*','COALESCE( parent_id,odr, \'\') AS colorder');
        $mainMenu->condition = "jebapp_user_id=$user_id AND tag='mainmenu'";
        $mainMenu->order = 'colorder ASC';
        $mainMenuData=new CActiveDataProvider('Menu', array(
            'criteria'=>$mainMenu,
            'pagination'=>array(
                'pageSize'=>200,
            ),
        ));
        $footerMenu = new CDbCriteria();
        $footerMenu->select=array('*','COALESCE(parent_id,odr, \'\') AS colorder');
        $footerMenu->condition = "jebapp_user_id=$user_id AND tag='footermenu'";
        $footerMenu->order = 'colorder ASC';
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
