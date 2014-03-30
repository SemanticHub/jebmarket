<?php

class ManufactureController extends StoreBaseController
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
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'setAdd', 'addNew'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin','JebAdmin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

/*	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}*/

	public function actionCreate()
	{
		$model=new ProductManufacture;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['ProductManufacture']))
		{
			$model->attributes=$_POST['ProductManufacture'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/*public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
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
	}*/

/*	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}*/

/*	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ProductCategory');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}*/

	/*public function actionAdmin()
	{
		$model=new StoreProductCategory('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['StoreProductCategory']))
			$model->attributes=$_GET['StoreProductCategory'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}*/

	public function loadModel($id)
	{
		$model=ProductManufacture::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='store-product-manufacture-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionAddNew(){
        $newManufacture = new ProductManufacture;
        $newManufacture->name = $manufactureName = Yii::app()->request->getParam('name');;
        $newManufacture->save();
        return "{id:".$newManufacture->id.", name: ".$newManufacture->name."}";
    }

    public function actionSetAdd(){
        /*$productId = Yii::app()->request->getParam('pk');
        $manufactureName = yii::app()->request->getParam('value');;
        $manufacture = ProductManufacture::model()->find(array('condition'=>'name=:name', 'params'=>array(':name'=>$manufactureName)));

        if($manufacture) {
            $product = Product::model()->findByPk($productId);
            $product->manufacture_id = $manufacture->id;
            $product->update();
        } else {
            $newManufacture = new ProductManufacture;
            $newManufacture->name = $manufactureName;
            $newManufacture->save();

            $product = Product::model()->findByPk($productId);
            $product->manufacture_id = $newManufacture->id;
            $product->update();
        }*/
        $es = new EditableSaver('Product');
        $es->update();
    }
}
