<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Create a new User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>