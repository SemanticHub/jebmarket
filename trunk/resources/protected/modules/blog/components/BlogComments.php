<?php

Yii::import('zii.widgets.CPortlet');

class BlogComments extends CPortlet {
    public $category;
    public function	renderContent() {
        $user_id_url = Yii::app()->request->getParam('user_id');
        if(!empty($user_id_url)){
            $this->category = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'category' AND jebapp_user_id=$user_id_url"));
        }else{
            $this->category = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'category'"));
        }
        $this->render('_commentswidget');
    }
}
?>