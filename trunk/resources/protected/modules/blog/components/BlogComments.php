<?php

Yii::import('zii.widgets.CPortlet');

class BlogComments extends CPortlet {
    public $category;
    public function	renderContent() {
        $this->category = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'category'"));
        $this->render('_commentswidget');
    }
}
?>