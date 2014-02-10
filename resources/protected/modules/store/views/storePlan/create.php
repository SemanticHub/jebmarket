<?php
/* @var $this StorePlanController */
/* @var $model StorePlan */

$this->breadcrumbs=array(
	'Store Plans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StorePlan', 'url'=>array('index')),
	array('label'=>'Manage StorePlan', 'url'=>array('admin')),
);
?>

<h1>Create StorePlan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>