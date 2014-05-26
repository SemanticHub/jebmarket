<?php
/* @var $this ProductManufactureController */
/* @var $model ProductManufacture */

$this->breadcrumbs=array(
	'Product Manufactures'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ProductManufacture', 'url'=>array('index')),
	array('label'=>'Create ProductManufacture', 'url'=>array('create')),
	array('label'=>'Update ProductManufacture', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductManufacture', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductManufacture', 'url'=>array('admin')),
);
?>

<h1>View ProductManufacture #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'logo',
		'website',
		'tag',
	),
)); ?>
