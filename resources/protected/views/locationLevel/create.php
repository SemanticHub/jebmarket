<?php
/* @var $this LocationLevelController */
/* @var $model LocationLevel */

$this->breadcrumbs=array(
	'Location Levels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LocationLevel', 'url'=>array('index')),
	array('label'=>'Manage LocationLevel', 'url'=>array('admin')),
);
?>

<h1>Create LocationLevel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>