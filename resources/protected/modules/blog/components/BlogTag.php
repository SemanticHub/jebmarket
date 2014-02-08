<?php

Yii::import('zii.widgets.CPortlet');

class BlogTag extends CPortlet {
    public $tag;
    public function	renderContent() {
        $this->tag = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'tag'"));
        $this->render('_tagswidget');
    }
}
?>