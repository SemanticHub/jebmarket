<?php
/* Home Page Content */
$this->pageTitle=Yii::app()->name . ' - '. $page->title;
$this->metaDescription = $page->meta_desc;
$this->metaKeywords = $page->meta_keywords;
?>
<?php echo $page->content; ?>