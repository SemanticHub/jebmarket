<?php

class MediaController extends Controller {

	public $layout='//layouts/column2';

	public $defaultAction = 'admin';


	public function filters() {
        return array(
            'rights'
        );
	}


	public function actionView($id) {
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/*public function actionCreate() {
		$model=new Media;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Media']))
		{
			$model->attributes=$_POST['Media'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}*/

	public function actionUpdate($id) {
		$model=$this->loadModel($id);

		 $this->performAjaxValidation($model);

		if(isset($_POST['Media'])) {
			$model->attributes=$_POST['Media'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionDelete($id) {
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionAdmin() {
		$dataProvider=new CActiveDataProvider('Media');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

    public function actionListJSON() {
        $dataProvider = new CActiveDataProvider('Media', array(
            'criteria'=>array(
                'condition'=>'jebapp_user_id='.Yii::app()->user->id,
                'order'=>'upload_date DESC'
            ),
            'countCriteria'=>array(
                'condition'=>'jebapp_user_id='.Yii::app()->user->id,
            ),
            'pagination'=>array(
                'pageSize'=>20,
            ),
        ));
        $mediaList = $dataProvider->getData();
        echo CJSON::encode($mediaList);
    }

	/*public function actionAdmin() {
		$model=new Media('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Media']))
			$model->attributes=$_GET['Media'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}*/

	public function loadModel($id) {
		$model=Media::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model) {
		if(isset($_POST['ajax']) && $_POST['ajax']==='media-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
