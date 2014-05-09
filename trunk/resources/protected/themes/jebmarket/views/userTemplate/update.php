<?php
/* @var $this UserTemplateController */
/* @var $model UserTemplate */

$this->breadcrumbs=array(
	'User Templates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserTemplate', 'url'=>array('index')),
	array('label'=>'Create UserTemplate', 'url'=>array('create')),
	array('label'=>'View UserTemplate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserTemplate', 'url'=>array('admin')),
);
?>

<h1>Update UserTemplate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>