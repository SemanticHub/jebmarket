<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1 class="page-title">View User #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
		//'password',
		//'salt',
		'joined',
		//'activationcode',
		'activationstatus',
		'status',
		'last_login',
		'timezone'
	),
)); ?>
