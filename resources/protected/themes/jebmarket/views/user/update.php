<?php
/* @var $this UserController */
/* @var $model User */
$this->menu=array(
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Update User <?php echo $model->username; ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>