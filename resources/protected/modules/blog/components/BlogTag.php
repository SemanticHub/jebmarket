<?php

Yii::import('zii.widgets.CPortlet');

class BlogTag extends CPortlet {
    public $tag;
    public $user;
    public function	renderContent() {
        $user_id_url = Yii::app()->request->getParam('user_id');
        $this->user = User::model()->findByPk($user_id_url);
        if(!empty($user_id_url)){
            $this->tag = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'tag' AND jebapp_user_id=$user_id_url"));
        }else{
            $this->tag = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'tag' AND jebapp_user_id=40"));
        }
        $this->render('_tagswidget');
    }
}
?>