<?php
/* @var $this LocationLevelController */
/* @var $model LocationLevel */


$this->menu=array(
	array('label'=>'Create Location Level', 'url'=>array('create')),
	array('label'=>'Location Levels', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Update Location Level '<?php echo $model->name; ?>'</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>