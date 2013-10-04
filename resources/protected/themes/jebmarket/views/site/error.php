<?php
/* @var $this SiteController */
/* @var $error array */
$this->pageTitle = Yii::app()->name . ' - Error';
?>
<h1 class="page-title">Error <?php echo $code; ?></h1>
<div class="alert alert-danger"><?php echo CHtml::encode($message); ?></div>