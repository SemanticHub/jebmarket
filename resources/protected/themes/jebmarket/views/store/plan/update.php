<?php
/* @var $this StorePlanController */
/* @var $model StorePlan */

$this->breadcrumbs=array(
	'Store Plans'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StorePlan', 'url'=>array('index')),
	array('label'=>'Create StorePlan', 'url'=>array('create')),
	array('label'=>'View StorePlan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StorePlan', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Update StorePlan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>