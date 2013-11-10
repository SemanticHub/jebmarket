<?php
/* @var $this LocationLevelController */
/* @var $model LocationLevel */

$this->breadcrumbs=array(
	'Location Levels'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List LocationLevel', 'url'=>array('index')),
	array('label'=>'Create LocationLevel', 'url'=>array('create')),
	array('label'=>'Update LocationLevel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LocationLevel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LocationLevel', 'url'=>array('admin')),
);
?>

<h1>View LocationLevel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'code',
		'dial_code',
		'next_level_name',
		'parent_id',
	),
)); ?>
