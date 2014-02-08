<?php

class DefaultController extends Controller
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
    public function actionAdmin()
    {
        $this->render('admin');
    }
	public function actionIndex()
	{
        $this->layout = 'blog.views.layouts.blog';
        $dataProvider=new CActiveDataProvider('BlogPost', array(
            'criteria'=>array(
                'order'=>'id DESC',
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
	}
    public function actionView($id)
    {
        $this->layout = 'blog.views.layouts.blog';
        $model = $this->loadModel($id);
        $comments = new BlogComment;
        $listcomment = new CActiveDataProvider('BlogComment', array(
            'criteria'=>array(
                'order'=>'comment_id ASC',
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->performAjaxValidation($comments);
        if(isset($_POST['BlogComment']))
        {
            $comments->attributes=$_POST['BlogComment'];
            $comments->comment_date = date("Y-m-d H:i:s");
            $comments->comment_date_gmt = date("Y-m-d H:i:s");
            $comments->jebapp_blog_post_id = $id;
            $comments->user_id = '40';
            if($comments->save()){
                $model->comment_count = $model->comment_count + 1;
                $model->update(array('comment_count'));
                $this->redirect(array('view','id'=>$id));
            }
        }

        $this->render('view',array(
            'model'=>$model,
            'comments'=>$comments,
            'listcomment'=>$listcomment,
        ));
    }
    public function loadModel($id)
    {
        $model=BlogPost::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
    /**
     * Performs the AJAX validation.
     * @param BlogComment $comments the model to be validated
     */
    protected function performAjaxValidation($comments)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='blog-comment-form')
        {
            echo CActiveForm::validate($comments);
            Yii::app()->end();
        }
    }
}