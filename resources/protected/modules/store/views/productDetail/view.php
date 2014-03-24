<?php
/* @var $this ProductDetailController */
/* @var $model ProductDetail */

$this->breadcrumbs=array(
	'Product Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductDetail', 'url'=>array('index')),
	array('label'=>'Create ProductDetail', 'url'=>array('create')),
	array('label'=>'Update ProductDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductDetail', 'url'=>array('admin')),
);
?>

<h1>View ProductDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'description',
		'keyword',
		'meta_description',
		'buy_price',
	),
)); ?>
