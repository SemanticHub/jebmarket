<?php
/* @var $this UserTemplateController */
/* @var $model UserTemplate */

$this->breadcrumbs=array(
	'User Templates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserTemplate', 'url'=>array('index')),
	array('label'=>'Create UserTemplate', 'url'=>array('create')),
	array('label'=>'Update UserTemplate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserTemplate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserTemplate', 'url'=>array('admin')),
);
?>

<h1>View UserTemplate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'custom_template',
		'custom_js',
		'custom_css',
		'type',
		'active',
		'create_date',
		'update_date',
		'jebapp_template_id',
		'jebapp_user_id',
	),
)); ?>
