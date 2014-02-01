<?php
/* @var $this BlogOptionsController */
/* @var $model BlogOptions */

$this->breadcrumbs=array(
	'Blog Options'=>array('index'),
	$model->option_id=>array('view','id'=>$model->option_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BlogOptions', 'url'=>array('index')),
	array('label'=>'Create BlogOptions', 'url'=>array('create')),
	array('label'=>'View BlogOptions', 'url'=>array('view', 'id'=>$model->option_id)),
	array('label'=>'Manage BlogOptions', 'url'=>array('admin')),
);
?>

<h1>Update BlogOptions <?php echo $model->option_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>