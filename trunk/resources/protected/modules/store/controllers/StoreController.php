<?php

class StoreController extends StoreBaseController {

	public function filters() {
		return array(
            'storeRights', // rights module impl for store
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules() {
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','create','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'settings'),
				'users'=>array('admin', 'JebAdmin'),
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
		$model=new Store;
        $model->storeDetail = new StoreDetail;

        // Default Data
        $model->status = 1;
        $model->visibility = 0;

		$this->performAjaxValidation($model);

		if(isset($_POST['Store']))
		{
			$model->attributes=$_POST['Store'];
            $model->storeDetail->attributes=$_POST['StoreDetail'];

        //CVarDumper::dump($model, 10, true);
           // CVarDumper::dump($model->storeDetail->description, 10, true);
            //Yii::app()->end();
            $model->created = date("Y-m-d H:i:s");
            $model->user_id = Yii::app()->user->id;
            $model->plan_id = Yii::app()->controller->module->unlimitedStorePlanId;
			//if($model->save())
			//	$this->redirect(array('view','id'=>$model->id));

            if ($model->validate()) {
                if ($model->save()) {
                    $model->storeDetail->store_id = $model->id;
                    if ($model->storeDetail->save()) {
                        Yii::app()->user->setFlash('success', "Store successfully created.");
                        $this->redirect(array('/store'));
                    }
                }
            }

		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    public function actionSettings() {
        $store = Store::model()->find(array(
            'condition'=> 'user_id=:user_id', 'params'=> array(':user_id'=>Yii::app()->user->id),
        ));

        $storeDetail = StoreDetail::model()->find(array(
            'condition'=> 'store_id=:store_id', 'params'=> array(':store_id'=>$store->id),
        ));

        //$model = Store::model()->findByPk(Yii::app()->user->id);
        //$userdetails = UserDetails::model()->findByPk($model->user_details_id);
        $this->render('settings', array('store' => $store, 'storeDetail' => $storeDetail));
    }

    /*public function actionSettings($id)
	{
		$model=$this->loadModel($id);

        $storeDetail = StoreDetail::model()->find(array(
            'condition'=> 'store_id=:store_id',
            'params'=> array(':store_id'=> $model->id),
        ));

        CVarDumper::dump($storeDetail, 10, true);
        Yii::app()->end();

		// Uncomment the following line if AJAX validation is needed
		/*$this->performAjaxValidation($model);

		if(isset($_POST['Store']))
		{
			$model->attributes=$_POST['Store'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}*/
/*
		$this->render('update',array(
			'model'=>$model,
		));
	}*/


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

        $userStore = Store::model()->find(array(
            'condition'=> 'user_id=:user_id AND status=:status',
            'params'=> array(':user_id'=>Yii::app()->user->id, ':status'=>'1'),
        ));

        $storeAction = 1;

        if($userStore) {
            $storeAction = 1;
            $model = array();

            $storeDetail = StoreDetail::model()->find(array(
                'condition'=> 'store_id=:store_id',
                'params'=> array(':store_id'=>$userStore->id),
            ));

            $userStore->storeDetail = $storeDetail;

            $model['store'] = $userStore;
            //$this->redirect($this->actionSettings($userStore->id));
            ///$this->redirect('store/settings', $userStore->id);
        } else {
            if(Yii::app()->user->isSuperuser) {
                $storeAction = 0;
                //Yii::app()->user->setFlash($this->module->warningFlashKey, "Ultimate Super Store has not been setup yet.");
                //Yii::app()->user->setFlash($this->module->infoFlashKey, "As a super user you can setup the ultimate super store with all the power and features.");

            } else {
                $storeAction = 2;
                //Yii::app()->user->setFlash($this->module->successFlashKey, "You are not allowed to use Store module of JebMarket, Please Update your membership from dashboard.");
            }
        }
        if(!empty($model))
            $this->render('index',array('action'=>$storeAction, 'model' => $model));
        else
            $this->render('index',array('action'=>$storeAction));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Store('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Store']))
			$model->attributes=$_GET['Store'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Store the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Store::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Store $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='store-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionUpdate() {
        $es = new EditableSaver('Store');
        $es->update();
    }
}
