<?php
/* @var $this ProductImageController */
/* @var $model ProductImage */

$this->breadcrumbs=array(
	'Product Images'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductImage', 'url'=>array('index')),
	array('label'=>'Create ProductImage', 'url'=>array('create')),
	array('label'=>'Update ProductImage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductImage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductImage', 'url'=>array('admin')),
);
?>

<h1>View ProductImage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'image_file',
		'alt_text',
		'title_txt',
		'order',
		'is_default',
		'tag',
	),
)); ?>
