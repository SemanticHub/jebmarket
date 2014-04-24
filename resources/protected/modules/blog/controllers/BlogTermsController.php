<?php

class BlogTermsController extends Controller
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
	public function actionViewcategory($id)
	{
		$this->render('viewcategory',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionViewtag($id)
	{
		$this->render('viewtag',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreatetag()
	{
	    Yii::app()->clientScript->scriptMap['*.js'] = false;
		$model=new BlogTerms;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['BlogTerms']))
		{
			$model->attributes=$_POST['BlogTerms'];
            if (empty($model->slug)) {
                $model->slug = str_replace(' ', '_', $model->name);
                         }
            $model->taxonomy = 'tag';
			if($model->save())
				$this->redirect(array('tag'));
		}

		$this->render('createtag',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreatecategory()
	{
	    Yii::app()->clientScript->scriptMap['*.js'] = false;
		$model=new BlogTerms;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['BlogTerms']))
		{
			$model->attributes=$_POST['BlogTerms'];
            if (empty($model->slug)) {
                $model->slug = str_replace(' ', '_', $model->name);
            }
            $model->taxonomy = 'category';
			if($model->save())
				$this->redirect(array('category'));
		}

		$this->render('createcategory',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdatecategory($id)
	{
	    Yii::app()->clientScript->scriptMap['*.js'] = false;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['BlogTerms']))
		{
			$model->attributes=$_POST['BlogTerms'];
            if (empty($model->slug)) {
                $model->slug = str_replace(' ', '_', $model->name);
            }
            $model->taxonomy = 'category';
			if($model->save())
				$this->redirect(array('category'));
		}

		$this->render('updatecategory',array(
			'model'=>$model,
		));
	}

	public function actionUpdatetag($id)
	{
	    Yii::app()->clientScript->scriptMap['*.js'] = false;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['BlogTerms']))
		{
			$model->attributes=$_POST['BlogTerms'];
            if (empty($model->slug)) {
                $model->slug = str_replace(' ', '_', $model->name);
            }
            $model->taxonomy = 'tag';
			if($model->save())
				$this->redirect(array('tag'));
		}

		$this->render('updatetag',array(
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('category'));
	}

	public function actionDeletetag($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('tag'));
	}

	public function actionDeletecategory($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('category'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('BlogTerms');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new BlogTerms('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BlogTerms']))
			$model->attributes=$_GET['BlogTerms'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


    /**
     * Manages all models.
     */
    public function actionTag()
    {
        Yii::app()->clientScript->scriptMap['*.js'] = false;
        $model=new BlogTerms('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['BlogTerms']))
            $model->attributes=$_GET['BlogTerms'];

        $this->render('tag',array(
            'model'=>$model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionCategory()
    {
        Yii::app()->clientScript->scriptMap['*.js'] = false;
        $model=new BlogTerms('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['BlogTerms']))
            $model->attributes=$_GET['BlogTerms'];

        $this->render('category',array(
            'model'=>$model,
        ));
    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BlogTerms the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BlogTerms::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BlogTerms $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='blog-terms-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
