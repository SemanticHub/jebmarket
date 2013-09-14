<?php
/* @var $this UserController */
/* @var $model User */
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
		'password',
		'salt',
		'joined',
		'activationcode',
		'activationstatus',
		'last_login',
		'timezone',
		'user_details_id',
	),
)); ?>
