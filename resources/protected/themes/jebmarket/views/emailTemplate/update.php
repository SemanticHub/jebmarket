<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */

$this->breadcrumbs=array(
	'Email Templates'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmailTemplate', 'url'=>array('index')),
	array('label'=>'Create EmailTemplate', 'url'=>array('create')),
	array('label'=>'View EmailTemplate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmailTemplate', 'url'=>array('admin')),
);
?>

<h1>Update EmailTemplate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>