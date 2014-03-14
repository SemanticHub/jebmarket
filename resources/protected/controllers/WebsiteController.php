<?php

class WebsiteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
		$model=new Website;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Website']))
		{
			$model->attributes=$_POST['Website'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Website']))
		{
			$model->attributes=$_POST['Website'];
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
		$dataProvider=new CActiveDataProvider('Website');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
        $id = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
        $model=$this->loadModel($id->id);
        $this->performAjaxValidation($model);
        if(isset($_POST['Website']))
        {
            $model->attributes=$_POST['Website'];
            if($model->save()){
                Yii::app()->user->setFlash('success', 'Website Settings Saved Successfully.');
                $this->redirect(array('website/admin'));
            }
        }
		$this->render('admin',array(
			'model'=>$model,
		));
	}

    /**
     * Manages all models.
     */
    public function actionLogo()
    {
        $id = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
        $model=$this->loadModel($id->id);
        $this->render('logo',array(
            'model'=>$model,
        ));
    }

    public function actionUploadlogo()
    {
        $this->layout = false;
        $id = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
        $model=$this->loadModel($id->id);
        Yii::import("ext.JebUpload.JebFileUploader");
        $dir_media = Yii::app()->params['uploadPath'].Yii::app()->user->id;
        if(!is_dir($dir_media)){
            mkdir($dir_media, 0777);
        }
        $dir_media = $dir_media.'/logo';
        if(!is_dir($dir_media)){
            mkdir($dir_media, 0777);
        }
        $folder = $dir_media.'/';// folder for uploaded files
        $allowedExtensions = array("jpg", "jpeg", "gif", "png");//array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = Yii::app()->params['profileimagesizemax'];
        $uploader = new JebFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder, $replaceOldFile = true, $newfilename = true );
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        $fileSize = filesize($folder.$result['filename']);//GETTING FILE SIZE
        $fileName = $result['filename'];//GETTING FILE NAME
        $model->logo = $fileName;
        if($model->save())
        echo $return;
    }

    public function actionUploadFavicon()
    {
        $this->layout = false;
        $id = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
        $model=$this->loadModel($id->id);
        Yii::import("ext.JebUpload.JebFileUploader");
        $dir_media = Yii::app()->params['uploadPath'].Yii::app()->user->id;
        if(!is_dir($dir_media)){
            mkdir($dir_media, 0777);
        }
        $dir_media = $dir_media.'/logo';
        if(!is_dir($dir_media)){
            mkdir($dir_media, 0777);
        }
        $folder = $dir_media.'/';// folder for uploaded files
        $allowedExtensions = array("ico");//array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = Yii::app()->params['profileimagesizemax'];
        $uploader = new JebFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder, $replaceOldFile = true, $newfilename = true );
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        $fileSize = filesize($folder.$result['filename']);//GETTING FILE SIZE
        $fileName = $result['filename'];//GETTING FILE NAME
        $model->favicon = $fileName;
        if($model->save())
        echo $return;
    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Website the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Website::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Website $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='website-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
