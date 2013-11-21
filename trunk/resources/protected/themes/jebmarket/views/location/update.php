<?php
/* @var $this LocationController */
/* @var $model Location */


$this->menu=array(
	array('label'=>'Create Location', 'url'=>array('create')),
	array('label'=>'Locations', 'url'=>array('admin')),
);
?>
<h1 class="page-title">Update Location '<?php echo $model->name; ?>'</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>