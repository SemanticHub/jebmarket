<?php
/* @var $this StorePlanController */
/* @var $model StorePlan */

$this->breadcrumbs=array(
	'Store Plans'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List StorePlan', 'url'=>array('index')),
	array('label'=>'Create StorePlan', 'url'=>array('create')),
	array('label'=>'Update StorePlan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StorePlan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StorePlan', 'url'=>array('admin')),
);
?>

<h1>View StorePlan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'is_default',
		'description',
		'thumb_width_height',
		'image_width_height',
		'image_max_size',
		'image_per_product',
		'max_disk_space',
		'max_bandwidth',
		'product_per_store',
		'transaction_fee',
		'transaction_period',
		'transaction_fee_type',
	),
)); ?>
