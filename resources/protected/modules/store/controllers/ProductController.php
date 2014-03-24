<?php

class ProductController extends StoreBaseController
{

	public $layout='main';

	public $defaultAction = 'admin';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				//'actions'=>array('index','view'),
				//'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'new'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}


	public function actionCreate()
	{
		/*$model=new Product;
        $model->productDetail = new ProductDetail;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}*/

		/*$this->render('create',array(
			'model'=>$model,
		));*/
        $product = new Product;
        $product->store_id = Store::model()->getUserStoreId();
        $product->status = 0;
        $product->title = 'new product';
        $product->added = date("Y-m-d H:i:s");
        //$product->published = 0;

        if($product->save()) {
            $product->productDetail = new ProductDetail;
            $product->productDetail->product_id = $product->id;

            if($product->productDetail->save()) {
                Yii::app()->user->setFlash($this->module->successFlashKey, "A new unpublished product has been created, update product information and set publish to make the product available for users.");
                $this->redirect(array('new','id'=>$product->id));
            }
        }
        //$this->render('create',array('model'=>$product));
	}

    /*
     * This is for security, so that reloading the page will add another product
     *  */
    public function actionNew($id){
        $product = Product::model()->findByPk($id);
        $productDetail = ProductDetail::model()->find(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));

        $this->render('create',array('product'=>$product, 'productDetail'=>$productDetail));
    }

	//public function actionUpdate($id)
	//{
        //$es = new EditableSaver('Product');
        //$es->update();

		/*$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));*/
	//}
    public function actionUpdate() {
        $es = new EditableSaver('Product');
        $es->update();
    }

	public function actionDelete($id)
	{
		//$this->loadModel($id)->delete();
        $product = $this->loadModel($id);
        $productDetail = ProductDetail::model()->find(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));

        if($productDetail->delete()) $product->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
        $model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
