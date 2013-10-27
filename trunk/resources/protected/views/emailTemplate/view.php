<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */

$this->breadcrumbs=array(
	'Email Templates'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List EmailTemplate', 'url'=>array('index')),
	array('label'=>'Create EmailTemplate', 'url'=>array('create')),
	array('label'=>'Update EmailTemplate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmailTemplate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmailTemplate', 'url'=>array('admin')),
);
?>

<h1>View EmailTemplate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'body',
	),
)); ?>
