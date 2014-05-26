<?php
/* @var $this StoreProductCategoryController */
/* @var $model StoreProductCategory */

$this->breadcrumbs=array(
	'Store Product Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List StoreProductCategory', 'url'=>array('index')),
	array('label'=>'Create StoreProductCategory', 'url'=>array('create')),
	array('label'=>'Update StoreProductCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StoreProductCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StoreProductCategory', 'url'=>array('admin')),
);
?>

<h1>View StoreProductCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_id',
		'is_root',
		'name',
		'description',
		'meta_description',
		'meta_keyword',
		'image',
		'shop_default',
		'status',
		'visibility',
	),
)); ?>
