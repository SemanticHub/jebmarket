<?php
/* @var $this UserTemplateController */
/* @var $model UserTemplate */

$this->breadcrumbs=array(
	'User Templates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserTemplate', 'url'=>array('index')),
	array('label'=>'Manage UserTemplate', 'url'=>array('admin')),
);
?>

<h1>Create UserTemplate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>