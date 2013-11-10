<?php
/* @var $this LocationLevelController */
/* @var $model LocationLevel */

$this->breadcrumbs=array(
	'Location Levels'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LocationLevel', 'url'=>array('index')),
	array('label'=>'Create LocationLevel', 'url'=>array('create')),
	array('label'=>'View LocationLevel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LocationLevel', 'url'=>array('admin')),
);
?>

<h1>Update LocationLevel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>