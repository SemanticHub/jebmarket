<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserDetails', 'url'=>array('index')),
	array('label'=>'Create UserDetails', 'url'=>array('create')),
	array('label'=>'Update UserDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserDetails', 'url'=>array('admin')),
);
?>

<h1>View UserDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'f_name',
		'l_name',
		'organization',
		'address1',
		'address2',
		'country',
		'state',
		'city',
		'zip',
		'phone',
		'fax',
		'avater',
	),
)); ?>
