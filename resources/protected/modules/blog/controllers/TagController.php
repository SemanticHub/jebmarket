<?php

class TagController extends Controller
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
	public function actionView($name)
	{
        $this->layout = 'blog.views.layouts.blog';
        $user_id_url = Yii::app()->request->getParam('user_id');
        $user = User::model()->findByPk($user_id_url);
        $tagid = BlogTerms::model()->findByAttributes(array('slug'=>$name));
        $criteria = new CDbCriteria();
        $criteria->select = array('tag', 'id');
        if(!empty($user_id_url)){
            if(Yii::app()->user->isGuest){
                $criteria->condition = "jebapp_user_id=$user_id_url AND post_status='public'";
            }else{
                $criteria->condition = "jebapp_user_id=$user_id_url";
                $criteria->addInCondition('post_status',array('public','private'));
            }
        }else{
            if(Yii::app()->user->isGuest){
                $criteria->condition = "jebapp_user_id=40 AND post_status='public'";
            }else{
                $criteria->condition = "jebapp_user_id=40";
                $criteria->addInCondition('post_status',array('public','private'));
            }
        }
        $tagpostid = BlogPost::model()->findAll($criteria);
        $postids = array();
        foreach($tagpostid as $event) {
            $event->tag = explode(",",$event->tag);
            if (in_array("$tagid->term_id", $event->tag)) {
                $postids[] = $event->id;
            }
        }
        $criteria=new CDbCriteria;
        $criteria->addInCondition('id',$postids);
        $criteria->order = 'id DESC';
        $dataProvider=new CActiveDataProvider('BlogPost', array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->render('view',array(
            'dataProvider'=>$dataProvider,
            'user'=>$user,
        ));
	}
}