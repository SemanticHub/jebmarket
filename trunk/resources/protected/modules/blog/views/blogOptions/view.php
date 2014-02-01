<?php
/* @var $this BlogOptionsController */
/* @var $model BlogOptions */

$this->breadcrumbs=array(
	'Blog Options'=>array('index'),
	$model->option_id,
);

$this->menu=array(
	array('label'=>'List BlogOptions', 'url'=>array('index')),
	array('label'=>'Create BlogOptions', 'url'=>array('create')),
	array('label'=>'Update BlogOptions', 'url'=>array('update', 'id'=>$model->option_id)),
	array('label'=>'Delete BlogOptions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->option_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BlogOptions', 'url'=>array('admin')),
);
?>

<h1>View BlogOptions #<?php echo $model->option_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'option_id',
		'option_name',
		'option_value',
		'autoload',
		'jebapp_user_id',
	),
)); ?>
