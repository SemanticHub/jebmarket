<?php

class CategoryController extends StoreBaseController
{

	public function filters()
	{
		return array(
            'storeRights', // rights module impl for store
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'list'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
        $new = new ProductCategory();
        $new->store_id = Store::model()->getUserStoreId();
        $new->name = Yii::app()->request->getParam('name');;
        $new->save();
        echo "{id:".$new->id.", name: ".$new->name."}";
		/*$model=new StoreProductCategory;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StoreProductCategory']))
		{
			$model->attributes=$_POST['StoreProductCategory'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));*/
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// $this->performAjaxValidation($model);

		if(isset($_POST['StoreProductCategory']))
		{
			$model->attributes=$_POST['StoreProductCategory'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionList()
	{
        echo CJSON::encode(Editable::source(ProductCategory::model()->findAll('store_id=:store_id', array(':store_id'=>Store::model()->getUserStoreId())), 'id', 'name'));
    }

	public function actionAdmin()
	{
		$model=new StoreProductCategory('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['StoreProductCategory']))
			$model->attributes=$_GET['StoreProductCategory'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=StoreProductCategory::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param StoreProductCategory $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='store-product-category-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
