<?php
/* @var $this UserController */
/* @var $model User */
$this->menu=array(
    array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View User '$model->username'";
$this->menuLinks=array(
    array('label'=>'Manage User', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
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
