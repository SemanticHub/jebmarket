<?php

class ProductImageController extends StoreBaseController
{
    public $layout='main';

    public function filters() {
        return array(
            'storeRights', // rights module impl for store
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }


	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('create','update', 'attach' ,'delete', 'list'),
				'users'=>array('@'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Creates a new model.
	 */
	public function actionCreate()
	{
		$model=new ProductImage;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductImage']))
		{
			$model->attributes=$_POST['ProductImage'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    /**
     * Uploads a new model.
     */
    public function actionAttach()
    {

        Yii::app()->getModule('blog');
        $dir_media = 'media/'.Yii::app()->user->id;

        if(!is_dir($dir_media)){
            mkdir($dir_media, 0777);
        }

        $media = new Media();

        $media->url = CUploadedFile::getInstance($media, 'url');
        $media->caption = $media->url->getName();
        $media->alternative_text = $media->url->getName();
        $media->description = $media->url->getName();
        if($media->url->saveAs($dir_media.'/'.$media->url->getName()))
            $media->url = $media->url->getName();

        $media->upload_date = date("Y-m-d H:i:s");
        $media->modified_date = date("Y-m-d H:i:s");
        $media->save();
        echo $media->id;
    }


	/**
	 * Updates a particular model.
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductImage']))
		{
			$model->attributes=$_POST['ProductImage'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
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
	public function actionList()
	{
		$dataProvider=new CActiveDataProvider('ProductImage');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function loadModel($id)
	{
		$model=ProductImage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-image-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
