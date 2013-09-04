<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->menu=array(
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'View Menu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Update Menu '<?php echo $model->label; ?>'</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>