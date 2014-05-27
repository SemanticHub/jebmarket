<?php

class ManufactureController extends StoreBaseController {

	public $defaultAction = "admin";

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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'New', 'admin', 'delete'),
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

	public function actionCreate() {
		$model=new ProductManufacture;
		$this->performAjaxValidation($model);
		if(isset($_POST['ProductManufacture'])) {
			$model->attributes=$_POST['ProductManufacture'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->id));
		}
		$this->render('create',array( 'model'=>$model, ));
	}
    public function actionUpdate($id) {
		$model=$this->loadModel($id);

		$this->performAjaxValidation($model);

		if(isset($_POST['ProductManufacture'])) {
			$model->attributes=$_POST['ProductManufacture'];
			if($model->save()) $this->redirect(array('admin','id'=>$model->id));
		}
		$this->render('update',array( 'model'=>$model));
	}
    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        if(!isset($_GET['ajax'])) $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

	public function actionAdmin() {
		$model=new ProductManufacture('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProductManufacture']))
			$model->attributes=$_GET['ProductManufacture'];

		$this->render('admin',array( 'model'=>$model));
	}

	public function loadModel($id) {
		$model=ProductManufacture::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model) {
		if(isset($_POST['ajax']) && $_POST['ajax']==='store-product-manufacture-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionNew(){
        $newManufacture = new ProductManufacture;
        $newManufacture->name = $manufactureName = Yii::app()->request->getParam('name');;
        $newManufacture->save();
        $data = array('id'=> $newManufacture->id, 'text' => $newManufacture->name);
        echo CJSON::encode($data);
    }

    /*	public function actionView($id)
{
    $this->render('view',array(
        'model'=>$this->loadModel($id),
    ));
}*/





    /*	public function actionIndex()
        {
            $dataProvider=new CActiveDataProvider('ProductCategory');
            $this->render('index',array(
                'dataProvider'=>$dataProvider,
            ));
        }*/

}
