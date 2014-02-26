<?php
/* @var $this StorePlanController */
/* @var $model StorePlan */

$this->menu=array(
	array('label'=>'Create Store Plan', 'url'=>array('create')),
	array('label'=>'Update Store Plan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Store Plan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Store Plans', 'url'=>array('admin')),
);
?>

<h1 class="page-title">View Store Plan <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		//'id',
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
