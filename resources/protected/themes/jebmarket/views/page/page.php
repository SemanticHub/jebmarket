<?php
    $this->pageTitle=Yii::app()->name . ' - '. $model->title;
    $this->metaDescription = $model->meta_desc;
    $this->metaKeywords = $model->meta_keywords;
?>
<?php echo $model->content;?>