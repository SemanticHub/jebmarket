<?php

class MenuController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2'
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'rights'
        );
    }

    public function actionMenuItemOptions() {
        if(isset($_POST['type'])) {
        switch ($_POST['type']) {
            case 'page':
                $userid = Yii::app()->user->id;
                echo CHtml::dropDownList("Menu[url]", $_POST['type'], CHtml::listData(Pages::model()->findAll(array('condition' => "slug != :slug AND jebapp_user_id = $userid", 'params' => array(':slug' => 'home-page-view'))), 'slug', 'title'), array('class' => 'form-control'));
                break;
            case 'module':
                echo CHtml::dropDownList("Menu[url]", $_POST['type'], Yii::app()->params['sitemenu'], array('class' => 'form-control'));
                break;
            case 'custom':
                 echo CHtml::textField('Menu[url]', $_POST['type'], array('class' => 'form-control'));
                break;
            default:
                echo '<div class="alert alert-info" style="margin-bottom: 0">Select a \'Menu Item Type\' from above to \'URL\' see options</div>';
        }
        }
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
    public function actionCreate() {
        $model = new Menu;

        if (isset($_POST['Menu'])) {
            $model->attributes = $_POST['Menu'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        if (isset($_POST['Menu'])) {
            $model->attributes = $_POST['Menu'];
            if($model->url == "") unset ($model->url);
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
        $dataProvider = new CActiveDataProvider('Menu');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Menu('search');
        $model->unsetAttributes();
        if (isset($_GET['Menu'])) $model->attributes = $_GET['Menu'];
        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Menu the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Menu::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Menu $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'menu-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}