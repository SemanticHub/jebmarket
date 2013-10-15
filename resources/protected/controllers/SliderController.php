<?php

class SliderController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
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
     * Creates a new slide.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Slider;
        if (isset($_POST['Slider'])) {
            $model->attributes = $_POST['Slider'];
            
            $model->image = CUploadedFile::getInstance($model,'image');
            
            if ($model->validate()) {
                if ($model->save()) {
                    Yii::app()->user->setFlash('success', 'New Slide Saved Successfully.');
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }
        }
        $this->render('create', array('model' => $model,));
    }

    /**
     * Updates a particular slide.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        if($model->image) $model->oldSlideImage = $model->image;
        $model->image = CUploadedFile::getInstance($model,'image');

        if (isset($_POST['Slider'])) {
            $model->attributes = $_POST['Slider'];
            if($model->image) {
               $model->image = CUploadedFile::getInstance($model,'image'); 
            } else {
                unset($model->image);
                $model->oldSlideImage = null;
            }
            
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }
        
        $this->render('update', array('model' => $model,));
    }

    /**
     * Deletes a particular slide.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all slides.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Slider');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Slider('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Slider']))
            $model->attributes = $_GET['Slider'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Slider the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Slider::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Slider $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'slider-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
