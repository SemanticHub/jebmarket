<?php
/* @var $this LocationController */
/* @var $model Location */

$this->menu=array(
	array('label'=> Yii::t('phrase', 'Locations'), 'url'=>array('admin')),
);
?>
<h1 class="page-title">Create Location</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>