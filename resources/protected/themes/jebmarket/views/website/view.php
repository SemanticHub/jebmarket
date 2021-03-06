<?php
/* @var $this WebsiteController */
/* @var $model Website */

$this->breadcrumbs=array(
	'Websites'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Website', 'url'=>array('index')),
	array('label'=>'Create Website', 'url'=>array('create')),
	array('label'=>'Update Website', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Website', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Website', 'url'=>array('admin')),
);
?>

<h1>View Website #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'domain',
		'description',
		'email',
		'logo',
		'favicon',
		'meta_title',
		'meta_desc',
		'meta_keywords',
		'jebapp_user_id',
	),
)); ?>
