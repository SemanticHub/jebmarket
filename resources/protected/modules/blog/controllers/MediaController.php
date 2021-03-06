<?php

class MediaController extends Controller
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
        $user_id_login = Yii::app()->user->id;
        $criteria = new CDbCriteria();
        $criteria->condition = "jebapp_user_id=$user_id_login";
        $dataProvider=new CActiveDataProvider('Media', array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>18,
            ),
        ));
        $this->render('create',array(
            'dataProvider'=>$dataProvider,
        ));
	}

    public function actionUploadmedia()
    {
        $this->layout = false;
        $model=new Media;
        Yii::import("ext.JebUpload.JebFileUploader");
        $dir_media = Yii::app()->params['uploadPath'].Yii::app()->user->id;
        if(!is_dir($dir_media)){
            mkdir($dir_media, 0777);
        }
        $dir_media = $dir_media.'/media/';
        if(!is_dir($dir_media)){
            mkdir($dir_media, 0777);
        }
        $folder = $dir_media;// folder for uploaded files
        $allowedExtensions = array("jpg", "jpeg", "gif", "png");//array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = Yii::app()->params['sliderfilesizemax'];
        $uploader = new JebFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder, $replaceOldFile = FALSE, $newfilename = FALSE );
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        $fileSize = filesize($folder.$result['filename']);//GETTING FILE SIZE
        $fileName = $result['filename'];//GETTING FILE NAME
        $model->caption = $fileName;
        $model->alternative_text = $fileName;
        $model->description = $fileName;
        $model->url = $fileName;
        $model->upload_date = date("Y-m-d H:i:s");
        $model->modified_date = date("Y-m-d H:i:s");
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
		$this->performAjaxValidation($model);

		if(isset($_POST['Media']))
		{
			$model->attributes=$_POST['Media'];
            $model->modified_date = date("Y-m-d H:i:s");
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
        $model = $this->loadModel($id);
        $uploadPath = Yii::getPathOfAlias('webroot') .DIRECTORY_SEPARATOR . Yii::app()->params['uploadPath'];
        if (file_exists($uploadPath.Yii::app()->user->name.'/'.$model->url)){
            unlink($uploadPath.Yii::app()->user->name.'/'.$model->url);
        }
        $model->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $this->layout = false;
        $user_id_login = Yii::app()->user->id;
        $criteria = new CDbCriteria();
        $criteria->condition = "jebapp_user_id=$user_id_login";
        $dataProvider=new CActiveDataProvider('Media', array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Media('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Media']))
			$model->attributes=$_GET['Media'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Media the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Media::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Media $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='media-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
