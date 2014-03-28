<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">Create FAQ</h1>
<?php $this->renderPartial('_form', array('model' => $model)); ?>