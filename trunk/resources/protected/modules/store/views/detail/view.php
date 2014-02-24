<?php
/* @var $this StoreDetailController */
/* @var $model StoreDetail */

$this->breadcrumbs=array(
	'Store Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StoreDetail', 'url'=>array('index')),
	array('label'=>'Create StoreDetail', 'url'=>array('create')),
	array('label'=>'Update StoreDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StoreDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StoreDetail', 'url'=>array('admin')),
);
?>

<h1>View StoreDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'store_id',
		'location_id',
		'city',
		'address',
		'zip',
		'phone',
		'fax',
		'email',
		'lat',
		'lon',
		'timetable',
		'tag',
		'keyword',
		'description',
	),
)); ?>
