<?php
/* @var $this LocationController */
/* @var $model Location */

$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">Create Location</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>