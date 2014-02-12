<?php

Yii::import('zii.widgets.CPortlet');

class BlogTag extends CPortlet {
    public $tag;
    public function	renderContent() {
        $user_id_url = Yii::app()->request->getParam('user_id');
        if(!empty($user_id_url)){
            $this->tag = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'tag' AND jebapp_user_id=$user_id_url"));
        }else{
            $this->tag = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'tag' AND jebapp_user_id=76"));
        }
        $this->render('_tagswidget');
    }
}
?>