<?php
/* @var $this SliderController */
/* @var $model Slider */
$this->menu=array(
	array('label'=>'Create Slide', 'url'=>array('create')),
	array('label'=>'View Slide', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Slider', 'url'=>array('admin')),
);
?>
<h1 class="page-title">Update Slider '<?php echo $model->headline; ?>'</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>