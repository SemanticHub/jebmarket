<?php

class BlogPostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout=false;

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
        Yii::app()->clientScript->scriptMap['*.js'] = false;
		$model=new BlogPost;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['BlogPost']))
		{
			$model->attributes=$_POST['BlogPost'];

            $model->post_name = str_replace(' ', '-', $model->post_title);
            $model->post_date = date("Y-m-d H:i:s");
            $model->post_modified = date("Y-m-d H:i:s");
            if (!empty($model->tag)) {
                $model->tag = implode(",",$model->tag);
            }
            if (!empty($model->category)) {
                $model->category = implode(",",$model->category);
            }
            if($model->save())
                $this->redirect(array('admin','mid'=>Yii::app()->request->getParam('mid')));
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
        Yii::app()->clientScript->scriptMap['*.js'] = false;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['BlogPost']))
		{
			$model->attributes=$_POST['BlogPost'];

            $model->post_name = str_replace(' ', '_', $model->post_title);
            $model->post_modified = date("Y-m-d H:i:s");
            if (!empty($model->tag)) {
                $model->tag = implode(",",$model->tag);
            }
            if (!empty($model->category)) {
                $model->category = implode(",",$model->category);
            }
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
        $model->tag = explode(",",$model->tag);
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
		$dataProvider=new CActiveDataProvider('BlogPost');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
        Yii::app()->clientScript->scriptMap['*.js'] = false;
        $menu = Menu::model()->findByAttributes(array('id'=>Yii::app()->request->getParam('mid')));
		$model=new BlogPost('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BlogPost']))
			$model->attributes=$_GET['BlogPost'];

		$this->render('admin',array(
			'model'=>$model,
            'menu'=>$menu,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BlogPost the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BlogPost::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BlogPost $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='blog-post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
