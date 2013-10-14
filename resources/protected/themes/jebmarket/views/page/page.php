<?php
    $this->pageTitle=Yii::app()->name . ' - '. $model->title;
    $this->metaDescription = $model->meta_desc;
    $this->metaKeywords = $model->meta_keywords;
?>
<h1 class="page-title"><?php echo $model->title; ?></h1>
<?php echo $model->content;?>