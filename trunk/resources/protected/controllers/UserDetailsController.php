<?php

class UserDetailsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
            'rights'
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new UserDetails;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserDetails']))
		{
			$model->attributes=$_POST['UserDetails'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    public function actionEdit(){
        $es = new EditableSaver('UserDetails');
        $es->update();
    }

    public function actionUploadavater($id)
    {
        $model=$this->loadModel($id);
        Yii::import("ext.JebUpload.JebFileUploader");
        $folder = Yii::app()->params['avateruploadPath'];// folder for uploaded files
        $allowedExtensions = array("jpg", "jpeg", "gif", "png");//array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 1024 * 1024 * 5;// maximum file size in 50MB
        $uploader = new JebFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder, $replaceOldFile = TRUE, $newfilename = TRUE );
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        $fileSize = filesize($folder.$result['filename']);//GETTING FILE SIZE
        $fileName = $result['filename'];//GETTING FILE NAME
        $model->avater = $fileName;
        if($model->save())
        echo $return;
    }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserDetails']))
		{
			$model->attributes=$_POST['UserDetails'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('UserDetails');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UserDetails('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserDetails']))
			$model->attributes=$_GET['UserDetails'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UserDetails the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UserDetails::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UserDetails $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-details-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
